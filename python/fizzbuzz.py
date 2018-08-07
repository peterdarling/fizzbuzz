# from https://gist.github.com/konstantinfarrell/c4f84ea579615da63de0eb325753b71d
for i in range(1, 101): print("Fizz"*(i%3==0)+"Buzz"*(i%5==0) or str(i))