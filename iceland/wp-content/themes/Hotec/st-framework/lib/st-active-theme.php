<?php
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == 'themes.php' ) {
      // your code here
      st_theme_activate();
}

function st_theme_activate() {
   // update_option(ST_SETTINGS_OPTION,$options);
    st_update_default_settings(true);
    ob_start();
  //  header('Location: '.admin_url('admin.php?page='.ST_PAGE_SLUG));
}



/**
 * Update to default settings
 */ 
function  st_update_default_settings($check  = false){
    $option_name = '_'.ST_NAME.'_is_import_default';
    
    if($check === true){
        if(get_option($option_name)=='y'){
              return false;
        }
    }
    
    // default setting options    
    $default ='a:80:{s:15:"page_full_boxed";s:1:"f";s:6:"layout";s:1:"2";s:23:"disable_header_floating";s:1:"n";s:18:"show_footer_widget";s:1:"y";s:9:"site_logo";s:81:"http://demo.smooththemes.com/hotec/wp-content/themes/hotec/assets/images/logo.png";s:12:"site_favicon";s:0:"";s:8:"sidebars";a:5:{i:0;a:2:{s:5:"title";s:7:"Contact";s:2:"id";s:15:"id1363686920866";}i:1;a:2:{s:5:"title";s:3:"Ads";s:2:"id";s:15:"id1366345831849";}i:2;a:2:{s:5:"title";s:12:"Widget Check";s:2:"id";s:15:"id1366514700885";}i:3;a:2:{s:5:"title";s:5:"Rooms";s:2:"id";s:15:"id1366601756671";}i:4;a:2:{s:5:"title";s:7:"Product";s:2:"id";s:15:"id1366619204224";}}s:9:"body_font";a:8:{s:9:"font-size";s:2:"12";s:14:"font-size-unit";s:2:"px";s:11:"line-height";s:2:"22";s:16:"line-height-unit";s:2:"px";s:5:"color";s:6:"666666";s:11:"font-family";s:5:"Arial";s:10:"font-style";s:6:"normal";s:11:"font-weight";s:6:"normal";}s:13:"headings_font";a:1:{s:11:"font-family";s:236:"http://fonts.googleapis.com/css?family=Roboto:100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&subset=latin%2Cgreek-ext%2Cvietnamese%2Clatin-ext%2Cgreek%2Ccyrillic%2Ccyrillic-ext";}s:9:"heading_1";a:2:{s:9:"font-size";s:2:"24";s:14:"font-size-unit";s:2:"px";}s:9:"heading_2";a:2:{s:9:"font-size";s:2:"20";s:14:"font-size-unit";s:2:"px";}s:9:"heading_3";a:2:{s:9:"font-size";s:2:"16";s:14:"font-size-unit";s:2:"px";}s:9:"heading_4";a:2:{s:9:"font-size";s:2:"18";s:14:"font-size-unit";s:2:"px";}s:9:"heading_5";a:2:{s:9:"font-size";s:2:"12";s:14:"font-size-unit";s:2:"px";}s:9:"heading_6";a:2:{s:9:"font-size";s:2:"12";s:14:"font-size-unit";s:2:"px";}s:17:"predefined_colors";s:6:"bca474";s:25:"enable_custom_global_skin";s:1:"n";s:18:"custom_global_skin";s:6:"1f8f34";s:7:"bg_type";s:1:"c";s:10:"defined_bg";s:15:"background1.jpg";s:16:"defined_bg_color";s:6:"f0f0f0";s:8:"bg_color";s:6:"f5f5f5";s:6:"bg_img";s:69:"http://localhost/hotec/wp-content/uploads/2013/04/logo-06-150x150.jpg";s:10:"bg_positon";s:2:"tl";s:10:"bg_repreat";s:1:"y";s:8:"bg_fixed";s:1:"y";s:21:"disable_header_custom";s:1:"y";s:17:"header_link_color";s:6:"202020";s:23:"header_link_hover_color";s:6:"80B500";s:15:"header_bg_color";s:5:"fffff";s:13:"header_bg_img";s:0:"";s:17:"header_bg_positon";s:0:"";s:17:"header_bg_repreat";s:0:"";s:15:"header_bg_fixed";s:0:"";s:14:"titlebar_title";s:0:"";s:13:"titlebar_desc";s:0:"";s:12:"titlebar_img";s:0:"";s:18:"show_blog_toptitle";s:1:"y";s:13:"blog_toptitle";s:9:"New&Pomos";s:18:"show_blog_titlebar";s:1:"y";s:13:"blog_titlebar";s:15:"Some thing here";s:18:"blog_titlebar_desc";s:26:"Some thing about desc here";s:17:"blog_titlebar_img";s:0:"";s:19:"s_show_featured_img";s:1:"y";s:16:"s_show_post_meta";s:1:"y";s:15:"s_show_post_tag";s:1:"y";s:15:"s_show_comments";s:1:"y";s:8:"facebook";s:2:"#f";s:7:"twitter";s:2:"#t";s:11:"google_plus";s:2:"#g";s:7:"youtube";s:2:"#y";s:5:"skype";s:9:"hoangsa2t";s:16:"footer_copyright";s:216:"Copyright &copy; 2013 All Rights Reserved. Powered by <a title=\"WordPress\" href=\"http://wordpress.org\">WordPress</a> and <a title=\"Premium WordPress Themes\" href=\"http://www.smooththemes.com\">SmoothThemes</a>";s:25:"show_head_reservation_btn";s:1:"y";s:20:"reservation_btn_link";s:48:"http://demo.smooththemes.com/hotec/?page_id=1806";s:19:"reservation_btn_txt";s:12:"Reservation ";s:20:"reservation_btn_skin";s:6:"37b6bd";s:27:"reservation_btn_custom_skin";s:1:"n";s:21:"reservation_btn_color";s:6:"139440";s:17:"room_show_res_btn";s:1:"y";s:17:"room_res_btn_link";s:48:"http://demo.smooththemes.com/hotec/?page_id=1806";s:16:"room_res_btn_txt";s:14:"Book this room";s:13:"show_subcribe";s:1:"y";s:15:"feedburner_urli";s:12:"SmoothThemes";s:9:"post_room";s:0:"";s:10:"post_event";s:0:"";s:14:"post_portfolio";s:0:"";s:14:"flex_animation";s:4:"fade";s:17:"flex_directionNav";s:1:"y";s:18:"flex_animationLoop";s:1:"n";s:14:"flex_slideshow";s:1:"n";s:19:"flex_slideshowSpeed";s:4:"7000";s:22:"flex_animationDuration";s:0:"";s:19:"flex_animationSpeed";s:4:"6000";s:18:"flex_pauseOnAction";s:5:"false";s:17:"flex_pauseOnHover";s:1:"n";s:15:"flex_controlNav";s:1:"y";s:14:"flex_randomize";s:1:"n";s:21:"headder_tracking_code";s:0:"";s:20:"footer_tracking_code";s:0:"";}';
    
    $translate  = 'YToxNzA6e3M6MjoiQnkiO3M6MDoiIjtzOjEwOiIlIENvbW1lbnRzIjtzOjA6IiI7czo0MDoiTm8gc2xpZGVycyBmb3VuZCwgUGxlYXNlIGNyZWF0ZSBhIHNsaWRlciI7czowOiIiO3M6Njk6IlRoaXMgcG9zdCBpcyBwYXNzd29yZCBwcm90ZWN0ZWQuIEVudGVyIHRoZSBwYXNzd29yZCB0byB2aWV3IGNvbW1lbnRzLiI7czowOiIiO3M6MTI6Ik5vIFJlc3BvbnNlcyI7czowOiIiO3M6MTI6Ik9uZSBSZXNwb25zZSI7czowOiIiO3M6MTE6IiUgUmVzcG9uc2VzIjtzOjA6IiI7czoxNDoiT2xkZXIgQ29tbWVudHMiO3M6MDoiIjtzOjE0OiJOZXdlciBDb21tZW50cyI7czowOiIiO3M6MjoidG8iO3M6MDoiIjtzOjIwOiJDb21tZW50cyBhcmUgY2xvc2VkLiI7czowOiIiO3M6MTk6IkxlYXZlIGEgUmVwbHkgdG8gJXMiO3M6MDoiIjtzOjExOiJZb3UgbXVzdCBiZSI7czowOiIiO3M6MTg6InRvIHBvc3QgYSBjb21tZW50LiI7czowOiIiO3M6Mjk6IlJlcXVpcmVkIGZpZWxkcyBhcmUgbWFya2VkICVzIjtzOjA6IiI7czoxMzoiTGVhdmUgYSBSZXBseSI7czowOiIiO3M6MTI6IkNhbmNlbCBSZXBseSI7czowOiIiO3M6MTI6IlBvc3QgQ29tbWVudCI7czowOiIiO3M6NzoiQ29tbWVudCI7czowOiIiO3M6NTc6IllvdSBtdXN0IGJlIDxhIGhyZWY9IiVzIj5sb2dnZWQgaW48L2E+IHRvIHBvc3QgYSBjb21tZW50LiI7czowOiIiO3M6NDE6IllvdXIgZW1haWwgYWRkcmVzcyB3aWxsIG5vdCBiZSBwdWJsaXNoZWQuIjtzOjA6IiI7czo0OiJOYW1lIjtzOjA6IiI7czo1OiJFbWFpbCI7czowOiIiO3M6NzoiV2Vic2l0ZSI7czowOiIiO3M6NzoiVHdpdHRlciI7czowOiIiO3M6ODoiRmFjZWJvb2siO3M6MDoiIjtzOjExOiJHb29nbGUgUGx1cyI7czowOiIiO3M6MTQ6IlN0YXkgQ29ubmVjdGVkIjtzOjA6IiI7czo1OiJTa3lwZSI7czowOiIiO3M6MTU6Ik1haW4gTmF2aWdhdGlvbiI7czowOiIiO3M6MTk6IlNlYXJjaCBmb3IgcHJvZHVjdHMiO3M6MDoiIjtzOjY6IlNlYXJjaCI7czowOiIiO3M6NzoiUGFnZSAlcyI7czowOiIiO3M6MTU6IlBlcm1hbGluayB0byAlcyI7czowOiIiO3M6MTE6IlZpZXcgRGV0YWlsIjtzOjA6IiI7czoxMToiT3BlbiBEZXRhaWwiO3M6MDoiIjtzOjEyOiJPcGVuIEdhbGxlcnkiO3M6MDoiIjtzOjM6IkFsbCI7czowOiIiO3M6Mjoiw5ciO3M6MDoiIjtzOjI6ImF0IjtzOjA6IiI7czoxNDoiVG90YWwgJXMgcGhvdG8iO3M6MDoiIjtzOjE1OiJUb3RhbCAlcyBwaG90b3MiO3M6MDoiIjtzOjE4OiJJbnZhbGlkIFJlY2lwaWVudHMiO3M6MDoiIjtzOjE4OiJJbnZhbGlkIHlvdXIgRW1haWwiO3M6MDoiIjtzOjg6Ik5hbWU6ICVzIjtzOjA6IiI7czoxMToiQWRkcmVzczogJXMiO3M6MDoiIjtzOjk6IkVtYWlsOiAlcyI7czowOiIiO3M6MjU6IlJlc2VydmF0aW9uIFJvb20gVHlwZTogJXMiO3M6MDoiIjtzOjE3OiJOby4gb2YgYWR1bHRzOiAlcyI7czowOiIiO3M6MTk6Ik5vLiBvZiBjaGlsZHJlbjogJXMiO3M6MDoiIjtzOjE2OiJBcnJpdmFsIERhdGU6ICVzIjtzOjA6IiI7czoxODoiRGVwYXJ0dXJlIERhdGU6ICVzIjtzOjA6IiI7czoxNjoiUGhvbmUgTnVtYmVyOiAlcyI7czowOiIiO3M6MzI6IlNwZWNpYWwgUmVxdWlyZW1lbnRzOiA8YnIgLz4gJXMgIjtzOjA6IiI7czozNDoiWW91IGhhdmUgYSBuZXcgcmVzZXJ2YXRpb24gZnJvbSAlcyI7czowOiIiO3M6MzU6IllvdSBoYXZlIGEgbmV3IHJlc2VydmF0aW9uIHJlcXVlc3QhIjtzOjA6IiI7czoxODoiQ2FuIG5vdCBzZW5kIG1haWwuIjtzOjA6IiI7czoxMDoiRW1haWw6ICAlcyI7czowOiIiO3M6MTE6IlN1YmplY3Q6ICVzIjtzOjA6IiI7czoxMToiTWVzc2FnZTogJXMiO3M6MDoiIjtzOjI4OiJZb3UgaGF2ZSBhIG5ldyBlbWFpbCBmcm9tICVzIjtzOjA6IiI7czoyMzoiWW91IGhhdmUgYSBuZXcgbWVzc2FnZSEiO3M6MDoiIjtzOjM6Ii4uLiI7czowOiIiO3M6NjoiVGl0bGU6IjtzOjA6IiI7czoxMjoiQWRzICVkIGxpbms6IjtzOjA6IiI7czo5OiIwIENvbW1lbnQiO3M6MDoiIjtzOjk6IjEgQ29tbWVudCI7czowOiIiO3M6MzoiWWVzIjtzOjA6IiI7czoyOiJObyI7czowOiIiO3M6MTI6IkZhY2Vib29rIFVSTCI7czowOiIiO3M6MTQ6IlNreXBlIHVzZXJuYW1lIjtzOjA6IiI7czo1OiJUYWdzOiI7czowOiIiO3M6MTU6IlByb2plY3QgRGV0YWlscyI7czowOiIiO3M6NDoiRGF0ZSI7czowOiIiO3M6NjoiQ2xpZW50IjtzOjA6IiI7czo2OiJTa2lsbHMiO3M6MDoiIjtzOjU6IlZpc2l0IjtzOjA6IiI7czoyNjoiUHJvamVjdCBTaG9ydCBEZWNzY3JpcHRpb24iO3M6MDoiIjtzOjIwOiJQcm9qZWN0IERlY3NjcmlwdGlvbiI7czowOiIiO3M6MTY6IlJlbGF0ZWQgUHJvamVjdHMiO3M6MDoiIjtzOjE3OiJTZXJ2aWNlcyBJbmNsdWRlZCI7czowOiIiO3M6OToiQ2F0ZWdvcnk6IjtzOjA6IiI7czoxMToiUmVzZXJ2YXRpb24iO3M6MDoiIjtzOjExOiJTZWFjaCBmb3IgOiI7czowOiIiO3M6MTg6IkRhaWx5IEFyY2hpdmVzOiAlcyI7czowOiIiO3M6MjA6Ik1vbnRobHkgQXJjaGl2ZXM6ICVzIjtzOjA6IiI7czozOiJGIFkiO3M6MDoiIjtzOjE5OiJZZWFybHkgQXJjaGl2ZXM6ICVzIjtzOjA6IiI7czoxOiJZIjtzOjA6IiI7czoxMzoiQmxvZyBBcmNoaXZlcyI7czowOiIiO3M6MTQ6IkJvb2sgdGhpcyByb29tIjtzOjA6IiI7czo5OiJZb3VyIE5hbWUiO3M6MDoiIjtzOjg6InJlcXVpcmVkIjtzOjA6IiI7czoxNzoiWW91ciBQaG9uZSBOdW1iZXIiO3M6MDoiIjtzOjg6Im9wdGlvbmFsIjtzOjA6IiI7czoxOToiWW91ciBFLU1haWwgQWRkcmVzcyI7czowOiIiO3M6NzoiU3ViamVjdCI7czowOiIiO3M6ODoiTWVzc2FnZToiO3M6MDoiIjtzOjEwOiJTdWJtaXQgTm93IjtzOjA6IiI7czoxMDoiWW91ciBOYW1lOiI7czowOiIiO3M6MTk6IllvdXIgZW1haWwgYWRkcmVzczoiO3M6MDoiIjtzOjE3OiJDaG9vc2Ugcm9vbSB0eXBlOiI7czowOiIiO3M6MTM6IlNlbGVjdCBhIHJvb20iO3M6MDoiIjtzOjExOiJEb3VibGUgUm9vbSI7czowOiIiO3M6MTE6IkRlbHV4ZSBSb29tIjtzOjA6IiI7czoxMjoiRmFtaWx5IFN1aXRlIjtzOjA6IiI7czoxNDoiTm8uIG9mIGFkdWx0czoiO3M6MDoiIjtzOjEzOiJBcnJpdmFsIERhdGU6IjtzOjA6IiI7czoxMzoiWW91ciBBZGRyZXNzOiI7czowOiIiO3M6MTg6IllvdXIgcGhvbmUgbnVtYmVyOiI7czowOiIiO3M6MTM6Ik5vLiBvZiByb29tczoiO3M6MDoiIjtzOjE2OiJOby4gb2YgY2hpbGRyZW46IjtzOjA6IiI7czoxNToiRGVwYXJ0dXJlIERhdGU6IjtzOjA6IiI7czoyMToiU3BlY2lhbCBSZXF1aXJlbWVudHM6IjtzOjA6IiI7czozNDoiU2lnbiB1cCB0byByZWNlaXZlIFNwZWNpYWwgT2ZmZXJzOiI7czowOiIiO3M6MjU6IkVudGVyIHlvdXIgZS1tYWlsIGFkZHJlc3MiO3M6MDoiIjtzOjk6IlN1YnNjcmliZSI7czowOiIiO3M6MTc6IlZpZXcgRXZlbnQgRGV0YWlsIjtzOjA6IiI7czoxMzoiRmluZCBPdXQgTW9yZSI7czowOiIiO3M6NDU6Ik5vIHByb2R1Y3RzIGZvdW5kIHdoaWNoIG1hdGNoIHlvdXIgc2VsZWN0aW9uLiI7czowOiIiO3M6MTc6IlJhdGVkICVzIG91dCBvZiA1IjtzOjA6IiI7czo4OiJvdXQgb2YgNSI7czowOiIiO3M6MTY6IiVzIHJldmlldyBmb3IgJXMiO3M6MDoiIjtzOjc6IlJldmlld3MiO3M6MDoiIjtzOjQyOiI8c3BhbiBjbGFzcz0ibWV0YS1uYXYiPuKGkDwvc3Bhbj4gUHJldmlvdXMiO3M6MDoiIjtzOjM4OiJOZXh0IDxzcGFuIGNsYXNzPSJtZXRhLW5hdiI+4oaSPC9zcGFuPiI7czowOiIiO3M6MTU6IkFkZCBZb3VyIFJldmlldyI7czowOiIiO3M6MTA6IkFkZCBSZXZpZXciO3M6MDoiIjtzOjEyOiJBZGQgYSByZXZpZXciO3M6MDoiIjtzOjIyOiJCZSB0aGUgZmlyc3QgdG8gcmV2aWV3IjtzOjA6IiI7czoxMzoiU3VibWl0IFJldmlldyI7czowOiIiO3M6NjoiUmF0aW5nIjtzOjA6IiI7czo3OiJSYXRl4oCmIjtzOjA6IiI7czo3OiJQZXJmZWN0IjtzOjA6IiI7czo0OiJHb29kIjtzOjA6IiI7czo3OiJBdmVyYWdlIjtzOjA6IiI7czoxMjoiTm90IHRoYXQgYmFkIjtzOjA6IiI7czo5OiJWZXJ5IFBvb3IiO3M6MDoiIjtzOjExOiJZb3VyIFJldmlldyI7czowOiIiO3M6OToiUmVhZCBNb3JlIjtzOjA6IiI7czoxNDoiU2VsZWN0IG9wdGlvbnMiO3M6MDoiIjtzOjEyOiJWaWV3IG9wdGlvbnMiO3M6MDoiIjtzOjExOiJBZGQgdG8gY2FydCI7czowOiIiO3M6MTU6IkRlZmF1bHQgc29ydGluZyI7czowOiIiO3M6MTg6IlNvcnQgYnkgcG9wdWxhcml0eSI7czowOiIiO3M6MjI6IlNvcnQgYnkgYXZlcmFnZSByYXRpbmciO3M6MDoiIjtzOjE1OiJTb3J0IGJ5IG5ld25lc3MiO3M6MDoiIjtzOjI2OiJTb3J0IGJ5IHByaWNlOiBsb3cgdG8gaGlnaCI7czowOiIiO3M6MjY6IlNvcnQgYnkgcHJpY2U6IGhpZ2ggdG8gbG93IjtzOjA6IiI7czoyNToiU2hvd2luZyB0aGUgc2luZ2xlIHJlc3VsdCI7czowOiIiO3M6MjI6IlNob3dpbmcgYWxsICVkIHJlc3VsdHMiO3M6MDoiIjtzOjM1OiJTaG93aW5nICUxJGTigJMlMiRkIG9mICUzJGQgcmVzdWx0cyI7czowOiIiO3M6NToiU2FsZSEiO3M6MDoiIjtzOjE3OiJVc2VybmFtZSBvciBlbWFpbCI7czowOiIiO3M6ODoiUGFzc3dvcmQiO3M6MDoiIjtzOjU6IkxvZ2luIjtzOjA6IiI7czoxNDoiTG9zdCBQYXNzd29yZD8iO3M6MDoiIjtzOjQ6IlNLVToiO3M6MDoiIjtzOjQ6IlRhZzoiO3M6MDoiIjtzOjY6IldlaWdodCI7czowOiIiO3M6MTA6IkRpbWVuc2lvbnMiO3M6MDoiIjtzOjE2OiJSZWxhdGVkIFByb2R1Y3RzIjtzOjA6IiI7czoxNzoiUmF0ZWQgJWQgb3V0IG9mIDUiO3M6MDoiIjtzOjMzOiJZb3VyIGNvbW1lbnQgaXMgYXdhaXRpbmcgYXBwcm92YWwiO3M6MDoiIjtzOjE0OiJ2ZXJpZmllZCBvd25lciI7czowOiIiO3M6MjA6IllvdSBtYXkgYWxzbyBsaWtl4oCmIjtzOjA6IiI7czoxNjoiQ2hvb3NlIGFuIG9wdGlvbiI7czowOiIiO3M6MTU6IkNsZWFyIHNlbGVjdGlvbiI7czowOiIiO3M6MjI6IkFkZGl0aW9uYWwgSW5mb3JtYXRpb24iO3M6MDoiIjtzOjE5OiJQcm9kdWN0IERlc2NyaXB0aW9uIjtzOjA6IiI7fQ==';
    
    $default = maybe_unserialize($default);
    $default['site_logo'] = st_img('logo.png');
    update_option(ST_SETTINGS_OPTION,$default);
    
    if(st_is_wpml()){
        $langs = icl_get_languages('skip_missing=0&orderby=KEY&order=asc');
        foreach($langs as $l){
           update_option(ST_SETTINGS_OPTION.'_'.$l['language_code'],$default);
        }
    }
    // update translate options
    update_option(ST_TRANSLATE_OPTION, unserialize(base64_decode($translate)));
    
    update_option($option_name,'y');
    
}


/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'flush_rewrite_rules' );


