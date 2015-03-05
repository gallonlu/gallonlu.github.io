/* @pjs preload="background.jpg"; */

  PImage bg;
int num;
ArrayList<Area> areas;
Word word;

void draw(){
  background(bg);
  word.display(mouseX,mouseY);
}

void addArea( int x, int y, int len ){
  Area newArea = new Area(x,y,len);
  areas.add(newArea);
}

class Area
{
  int x,y;
  int len;

  Area( int tx, int ty, int ts ){
    x = tx;
    y = ty;
    len = ts;
  }

  boolean inArea( int mx, int my ){
    if( sqrt(pow(mx-x,2)+pow(my-y,2)) < len )
    return true;
    else
    return false;
  }
}
  void setup(){
  //size is eq background
  size(1219, 889);

  bg = loadImage("background.jpg");

  num = 28;

  areas = new ArrayList<Area>();

  word = new Word(num,areas);

  //area
  addArea(332,409,70);//1
  addArea(565,190,55);//2
  addArea(579,407,65);//3
  addArea(399,229,63);//5
  addArea(290,264,75);//6
  addArea(691,412,65);//7
  addArea(550,340,30);//21
  addArea(767,301,30);//哲學之道
  addArea(505,280,30);//枯山水禪園
  addArea(500,300,30);//有庠紀念花園
  addArea(1049,124,70);//健康休閒中心
  addArea(881,194,90);//元智操場
  addArea(927,115,40);//籃球場
  addArea(754,540,55);//戲綠塘
  addArea(654,500,30);//元智花園
  addArea(1152,311,70);//學生宿舍
  addArea(987,353,70);//體育館
  addArea(1040,249,65);//活動中心
  addArea(433,757,40);//校門
  addArea(433,800,60);//元智科學園區
  addArea(453,600,40);//春雨堂
  addArea(473,440,25);//櫻花巷
  addArea(483,400,25);//無限延伸
  addArea(400,480,25);//譯心坪
  addArea(812,408,30);//明理之石
  addArea(825,458,30);//牡丹亭
  addArea(640,680,65);//棒球場
  addArea(160,700,80);//教授宿舍
}

class Word
{
  ArrayList<Area> areas;
  ArrayList<String> information;
  int lastArea,size;

  Word( int n, ArrayList<Area> a ){
    lastArea = -1;

    size = n;

    areas = new ArrayList<Area>();
    information = new ArrayList<String>();
    //show info

    addText("元智一館");
    addText("元智二館");
    addText("元智三館");
    addText("元智五館");
    addText("元智六館");
    addText("元智七館");
    addText("二一石");
    addText("哲學之道");    
    addText("枯山水禪園");
    addText("有庠紀念花園");
    addText("健康休閒中心");
    addText("操場");
    addText("籃球場");
    addText("戲綠塘");
    addText("元智花園");
    addText("學生宿舍");
    addText("體育館");
    addText("活動中心");
    addText("校門");
    addText("元智科學園區");
    addText("春雨堂");
    addText("櫻花巷");
    addText("無限延伸");
    addText("譯心坪");
    addText("明理之石");
    addText("牡丹亭");
    addText("棒球場");
    addText("教授宿舍");
    areas = a;
  }

  void addText( String t ){
   information.add(t);
  }

  int getCurrentArea( int x, int y ){
   for( int i = 0; i < size; i++ ){
     if( areas.get(i).inArea(x,y) )
     return i;
   }
   return -1;
  }

  void showInfo( int curArea, int mx, int my ){
    //img show info
    int rectw = 100,recth = 25;
    int rectx = mx, recty = my;
    //img show fix
    if( rectx + rectw > width )
    rectx -= rectw;
    if( recty + recth > height )
    recty -= recth;
    fill(0,130);
    textAlign(CENTER);
    rect(rectx,recty, rectw, recth);
    fill(255);
    text( information.get(curArea), rectx+7, recty+7, rectw-14, recty-14);
  }

  void display( int mx, int my )
  {
    noStroke();
    int curArea = getCurrentArea(mx,my);
    if( curArea != -1 )
    showInfo( curArea, mx, my );
    lastArea = curArea;
  }
}

