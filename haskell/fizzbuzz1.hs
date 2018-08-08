fizzBuzz :: Int -> String
fizzBuzz x
    | (x `mod` 15 == 0) = "Fizzbuzz"
    | (x `mod` 3 == 0) = "Fizz"
    | (x `mod` 5 == 0) = "Buzz"
    | otherwise = show x

fizzBuzz1To100 = map fizzBuzz [1..100]
