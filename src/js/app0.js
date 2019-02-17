App = {
  web3Provider: null,
  contracts: {},

  init: async function() {
    
    App.web3Provider = web3.currentProvider;
    web3 = new Web3(web3.currentProvider);

    web3.eth.getCoinbase(function(err, account) {
      if (err === null) {
        App.current_account = account;
        
        console.log(account);
      }
    });
    return await App.initWeb3();
  },

  initWeb3: async function() {
    /*
     * Replace me...
     */

    return App.initContract();
  },

  initContract: function() {
    /*
     * Replace me...
     */

    return App.bindEvents();
  },

  bindEvents: function() {
    $(document).on('click', '.btn-adopt', App.handleAdopt);
  },

  markAdopted: function(adopters, account) {
    /*
     * Replace me...
     */
  },

  handleAdopt: function(event) {
    event.preventDefault();

    var petId = parseInt($(event.target).data('id'));

    /*
     * Replace me...
     */
  }

};

$(function() {
  $(window).load(function() {
    App.init();
  });
});
