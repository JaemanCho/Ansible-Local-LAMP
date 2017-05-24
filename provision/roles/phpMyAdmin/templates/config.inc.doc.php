<?php

$cfg['blowfish_secret'] = 'Fof3yeVCh8Y5uDL65faoiLJmW50GMiUd';                           // 「クッキー」認証タイプを利用するときに使用されるパスフレーズ、46文字以内

$i = 0;
$i++;

$cfg['Servers'][$i]['host']                         = 'localhost';                      // ホスト名かIPアドレスを指定
$cfg['Servers'][$i]['port']                         = '';                               //
$cfg['Servers'][$i]['socket']                       = '';                               //
$cfg['Servers'][$i]['connect_type']                 = 'tcp';                            // Mysqlの接続タイプを指定
$cfg['Servers'][$i]['extension']                    = 'mysqli';                         // MySQL エクステンションのタイプを指定
$cfg['Servers'][$i]['compress']                     = FALSE;                            // 圧縮プロトコルを利用するかどうか指定
$cfg['Servers'][$i]['controluser']                  = '';                               //
$cfg['Servers'][$i]['controlpass']                  = '';                               //
$cfg['Servers'][$i]['auth_type']                    = 'cookie';                         // 認証方法
$cfg['Servers'][$i]['user']                         = '';                               //
$cfg['Servers'][$i]['password']                     = '';                               //
$cfg['Servers'][$i]['only_db']                      = '';                               //
$cfg['Servers'][$i]['hide_db']                      = '';                               //
$cfg['Servers'][$i]['verbose']                      = '';                               //
$cfg['Servers'][$i]['pmadb']                        = '';                               //
$cfg['Servers'][$i]['bookmarktable']                = '';                               //
$cfg['Servers'][$i]['relation']                     = '';                               //
$cfg['Servers'][$i]['table_info']                   = '';                               //
$cfg['Servers'][$i]['table_coords']                 = '';                               //
$cfg['Servers'][$i]['pdf_pages']                    = '';                               //
$cfg['Servers'][$i]['column_info']                  = '';                               //
$cfg['Servers'][$i]['history']                      = '';                               //
$cfg['Servers'][$i]['verbose_check']                = TRUE;                             //
$cfg['Servers'][$i]['AllowRoot']                    = TRUE;                             //
$cfg['Servers'][$i]['AllowDeny']['order']           = '';                               //
$cfg['Servers'][$i]['AllowDeny']['rules']           = array();                          //
$cfg['Servers'][$i]['AllowNoPassword']              = FALSE;                            //
$cfg['Servers'][$i]['designer_coords']              = '';                               //
$cfg['Servers'][$i]['bs_garbage_threshold']         = 50;                               // BLOB データ関連
$cfg['Servers'][$i]['bs_repository_threshold']      = '32M';                            // BLOB データ関連
$cfg['Servers'][$i]['bs_temp_blob_timeout']         = 600;                              // BLOB データ関連
$cfg['Servers'][$i]['bs_temp_log_threshold']        = '32M';                            // BLOB データ関連
$cfg['UploadDir']                                   = '/var/lib/phpMyAdmin/upload';     // phpMyAdminのアップロード機能を利用しないで直接FTPなどでSQLファイルをアップするフォルダを指定
$cfg['SaveDir']                                     = '/var/lib/phpMyAdmin/save';       // ダンプを保存するディレクトリ名を指定
$cfg['PmaNoRelation_DisableWarning']                = TRUE;                             //  phpMyAdmin 環境保管領域に関するエ警告メッセージ非表示
?>
