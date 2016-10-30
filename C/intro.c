#include <stdio.h>

/*
実行コマンド:
◆コンパイル
gcc -o <classファイル名> <c言語ファイル>
(例)gcc -o intro intro.c
◆実行
./intro.c
*/

/*
データ型
int
float(実数)
char
long
*/

/*

返り値の型 関数名（引数,...）{
	処理;
	return 返り値;
}

*/

/*

文字列: charの配列（※終端は「\0」）
stringはない

char s[] = {'a','b','c','\0'};
char s[] = "abc";

*/

/*
ポインタ:アドレスを格納するための変数

メモリ（記憶領域）の節約が出来る
*/

/*
*/
//プロトタイプ宣言(関数が登場しているという指示)
float getMax(float a,float b);

float getMax(float a,float b){
   if(a>=b){
    return a;
   }else{
   	return b;
   }
}

//変数の有効期限
//static
void f(void) {
	//static扱いは以下の宣言だけ
  static int a= 0;
  a++;
  printf("a:%d\n", a);
}

void sayHi(void){
	printf("hi!\n");
}

void t(long *pb){
    *pb +=100;
    printf("%ld\n", *pb);
}

void swap(int *pc,int *pd){
 int tmp = *pd;
 *pd = *pc; 
 *pc = tmp;
}

int main(void)
{
	// int x = 10;
	// float y = 5.2;
	// char c = 'A';
	// printf("x= %d, y=%f, c=%c\n",x,y,c);

    // f();
    // f();
    // f();

    //文字列
    // char s[] = "abc";
    // printf("%c\n", s[1]);

    //配列
    //0-2まで添字が使える
    int sales[3];
    int sales2[] = {500,600,700};
    sales[0] =200;
    sales[1] =300;
    sales[2] =400;
    printf("%d\n", sales2[2]);

    // ポインタ変数
    int a;
    a = 10;
    int *pa;
    pa = &a;

    long b =1000;
    t(&b);

    // 参照渡し
    int c = 5;
    int d = 9;
    swap(&c,&d);
    printf("a:%d, b:%d\n", c, d);

    printf("%d\n", *pa);

    //float result;
	  // result = getMax(2.3,5.2);
	  // printf("%f\n",result);
	  // sayHi();

	return 0;
}