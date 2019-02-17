pragma solidity ^0.5.0;

/**
 * The Mds contract does this and that...
 */
contract MedicalDataSharing {
	uint public hospitalCount = 0;

	struct accessControl {
			uint id;
			address hsAccount;
			bool allow;
		}

	mapping (uint => accessControl) public access;
	mapping (address => mapping (uint => accessControl) ) public approvedHospitalByPatient;
	event hospitalAllowed(
			uint id,
			address hsAccount,
			bool allow
		);

	function createAccess(address _address, bool _allow) public {
		hospitalCount ++;
		access[hospitalCount] = accessControl(hospitalCount, _address, _allow);
		emit hospitalAllowed(hospitalCount, _address, _allow);
	}		
}
