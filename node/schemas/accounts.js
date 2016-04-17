var mongoose = require('mongoose');

module.exports = mongoose.model('Accounts', {
    id: Number,
    title: String,
    type: String,
    money: Number
});
