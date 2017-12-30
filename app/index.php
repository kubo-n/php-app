<?php
class Calc{
    private $txt1;
    private $txt2;
    private $txt3;
    private $tbl;
    private $hbox;
    private $wnd;
    private $combo;
    private $calc_btn;
}

public function _construct(){
    //数字入力用テキストボックスを初期化
    $this->txt1 = new GtkEntry();
    $this->txt2 = new GtkEntry();
    //解答表示用テキストボックス初期化
    $this->txt3 = new GtkEntry();
    //各テキストボックスの幅を調節
    $this->txt1 = new width_chars(6);
    $this->txt2 = new width_chars(6);
    $this->txt3 = new width_chars(6);

    //演算子選択コンボボックスを初期化
    $this->combo = GtkComboBox::new_text();
    $this->combo->insert_text(0,"＋");
    $this->combo->insert_text(1,"－");
    $this->combo->insert_text(2,"×");
    $this->combo->insert_text(3,"÷");
    //"＋"が初期表示されるようにする
    $this->combo->set_active(0);
  
    //計算ボタンを初期化
    $this->calc_btn = new GtkButton("＝");

    //イベントリスナーを割り当て
    $this->calc_btn->connect_simple("clicked",array($this,"calc_handler"));
  
    //テーブルを初期化 
    $this->tbl = new GtkTable(1, 5);
    //テーブルに各コンポーネントを配置
    $this->tbl->attach($this->txt1   ,0,1,0,1);
    $this->tbl->attach($this->combo   ,1,2,0,1);
    $this->tbl->attach($this->txt2    ,2,3,0,1);
    $this->tbl->attach($this->calc_btn,3,4,0,1);
    $this->tbl->attach($this->txt3    ,4,5,0,1);

    $this->hbox = new GtkHBox();
    $this->hbox->pack_start($this->tbl);
    $this->wnd = new GtkWindow();
    $this->wnd->add($this->hbox);
    $this->wnd->set_title("PHP計算機");
    $this->wnd->show_all();
    Gtk::main();
    }
 public function calc_handler(){
  $num1 = doubleval($this->txt1->get_text());
  $num2 = doubleval($this->txt2->get_text());
  switch($this->combo->get_active()){
   //足し算
   case 0:
    $this->txt3->set_text($num1 + $num2);
    break;
   //引き算
   case 1:
    $this->txt3->set_text($num1 - $num2);
    break;
   //掛け算
   case 2:
    $this->txt3->set_text($num1 * $num2);
    break;
   //割り算
   default:
    $this->txt3->set_text($num1 / $num2);
  }
 }
}
//Calcクラスのインスタンスを生成
$calc = new Calc();

}