/*
* Demonstrates the use of the GifAnimation library.
* the left animation is looping, the one in the middle 
* plays once on mouse click and the one in the right
* is a PImage array. 
* the first two pause if you hit the spacebar.
*/

import crayolon.portamod.*;
import gifAnimation.*;

PortaMod mymod;
PImage[] animation;
Gif loopingGif;
boolean pause = false;
boolean loading = true;

String[] tracklist;

public void setup() {
  size(480, 272);
  frameRate(100);
  /*
  tracklist = new String[15];
  tracklist[0] = "3kr";
  tracklist[1] = "5pyhun73r 3l337 v3r";
  tracklist[2] = "aaf";
  tracklist[3] = "alias";
  tracklist[4] = "audiorosputnick";
  tracklist[5] = "bong-fogel";
  tracklist[6] = "datagroove";
  tracklist[7] = "deluxe-ecs";
  tracklist[8] = "fonkyspenat";
  tracklist[9] = "getdowndafunkme";
  tracklist[10] = "influensa";
  tracklist[11] = "klassfest";
  tracklist[12] = "renonsdags-skit";
  tracklist[13] = "square&enjoy";
  tracklist[14] = "thismachinethinks";
  
  randomSeed(minute()+second()+1337);

  loading = true;*/
  //param("track"); 


  startthis( param("track"));
}


void stopthat() {
  //loopingGif.dispose();
  mymod.mute();
  loading = true;
  draw();
}

void startthis(String thisfile) {
  //String thisfile = tracklist[parseInt(random(15))];
  
 // loopingGif = new Gif(this, thisfile+".gif");
  //loopingGif.loop();

  mymod = new PortaMod(this);
  mymod.doModLoad(thisfile+".mod", true, 6.020f);
  mymod.loopSong();
  
  loading = false;
}

void draw() {
  if (loading) { 
    //println("hello world");
    background(0);
    //println("hello world2");
  } else {
    background(255 / (float)height * mouseY);
  //  image(loopingGif, 0, height / 2 - loopingGif.height / 2);
  }
}
/*
void mousePressed() {
    stopthat();
    startthis();
//  nonLoopingGif.play();
}

void keyPressed() {
  if (key == ' ') {
    if (pause) {
      //loopingGif.play();
      mymod.play();
      pause = false;
    } 
    else {
      //loopingGif.pause();
      mymod.pause();      
      pause = true;
    }
  }
}*/
