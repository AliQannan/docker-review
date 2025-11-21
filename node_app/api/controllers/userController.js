const User = require("../models/userModel");

exports.getUsers = async (req, res) => {
  try {
    const users = await User.getAllUsers();
    res.json(users);
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
};

exports.addUser = async (req, res) => {
  try {
    const { name, email } = req.body;
    await User.createUser(name, email);
    res.json({ message: "User added!" });
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
};
