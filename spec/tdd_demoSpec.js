describe("the addFour function that returns either the sum of 4 and a value passed as an argument or the string 'NaN'", function() {

  it("should return a 'NaN' string value when a non-numeric value passed", function() {
    var result1 = app_object.addFour("nasty");
    expect(result1).toEqual("NaN");
  });

  it("should return a value that is 4 more than the passed value", function() {
    var result2 = app_object.addFour(96);
    expect(result2).toEqual(100);
  });
});

describe("the addTen function that returns either the sum of 10 and a value passed as an argument or the string 'NaN'", function() {

  it("should return a 'NaN' string value when a non-numeric value passed", function() {
    var result1 = app_object.addTen("nasty");
    expect(result1).toEqual("NaN");
  });

  it("should return a value that is 10 more than the passed value", function() {
    var result2 = app_object.addTen(42);
    expect(result2).toEqual(52);
  });
});

