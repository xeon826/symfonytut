// assets/js/greet.js
export default function(name) {
  // return `Yo yo ${name} - welcome to Encore!`;
  // here
  var peaks = ["Tallac", "Ralston", "Rose"];
  var [last] = [...peaks].reverse();
  console.log(last);
  console.log(peaks.join(', '));
  // here
  var morning = {
    breakfast: "oatmeal",
    lunch: "peanut butter and jelly"
  }

  var dinner = "mac and cheese"

  var backpackingMeals = {
    ...morning,
    dinner
  }
  console.log(backpackingMeals);
};
