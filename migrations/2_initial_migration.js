var MedicalDataSharing = artifacts.require("./MedicalDataSharing.sol");

module.exports = function(deployer) {
  deployer.deploy(MedicalDataSharing);
};