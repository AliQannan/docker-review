const db = require("../config/db.js");

exports.getAllUsers = () => {
  return new Promise((resolve, reject) => {
    db.query("SELECT * FROM users", (err, results) => {
      if (err) reject(err);
      resolve(results);
    });
  });
};

exports.createUser = (name, email) => {
  return new Promise((resolve, reject) => {
    db.query(
      "INSERT INTO users (name, email) VALUES (?, ?)",
      [name, email],
      (err, result) => {
        if (err) reject(err);
        resolve(result);
      }
    );
  });
};

