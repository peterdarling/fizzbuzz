#include <stdio.h>

int main(void)
{
    for (int i=1; i<=100; i++) {
        printf("%s%s%s\n", i%3&&i%5?i.' ':'', i%3?'':'Fizz', i%5?'':'Buzz');
    }
    return 0;
}
