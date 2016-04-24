var mongoose = require('mongoose');

module.exports = mongoose.model('Accounts', {
    title: String,
    type: String,
    balance: Number
});
