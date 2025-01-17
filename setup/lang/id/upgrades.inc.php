<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Added new `[[+column]]` column to [[+table]].';
$_lang['add_index'] = 'Added new index on `[[+index]]` for table [[+table]].';
$_lang['alter_column'] = 'Modified column `[[+column]]` in table [[+table]].';
$_lang['add_moduser_classkey'] = 'Ditambahkan class_key bidang untuk mendukung modUser derivatif.';
$_lang['added_cachepwd'] = 'Bidang tambahan cachepwd hilang di awal revolusi rilis.';
$_lang['added_content_ft_idx'] = 'Ditambahkan indeks teks lengkap baru \'content_ft_idx\' di bidang \'pagetitle\', \'longtitle\', \'Deskripsi\', \'introtext\', \'isi\'.';
$_lang['allow_null_properties'] = 'Memperbaiki mengijinkan null untuk \'[[+class]]\'. \'properti\'.';
$_lang['alter_activeuser_action'] = 'ModActiveUser diubah \'action\' bidang agar lebih tindakan label.';
$_lang['alter_usermessage_messageread'] = 'ModUserMessage mengubah bidang \'messageread\' untuk \'membaca\'.';
$_lang['alter_usermessage_postdate'] = 'Berubah modUserMessage \'postdate\' bidang dari INT DATETIME dan nama \'date_sent\'.';
$_lang['alter_usermessage_subject'] = 'Berubah modUserMessage \'subyek\' lapangan dari VARCHAR(60) untuk varchar(255) pada.';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'Konektor dihapus konteks ACLs.';
$_lang['connector_acls_not_removed'] = 'Tidak dapat menghapus konektor konteks ACLs.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Tidak dapat menghapus konektor konteks.';
$_lang['data_remove_error'] = 'Error menghapus data untuk kelas \'[[+class]]\'.';
$_lang['data_remove_success'] = 'Berhasil dihapus data dari tabel untuk kelas \'[[+class]]\'.';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'Berubah modLexiconEntry \'createdon\' untuk memungkinkan NULL.';
$_lang['lexiconentry_focus_alter'] = 'Mengubah modLexiconEntry \'fokus\' dari VARCHAR(100) untuk INT(10).';
$_lang['lexiconentry_focus_alter_int'] = 'Diperbarui modLexiconEntry \'fokus\' kolom data dari string ke kunci asing int baru dari modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'Ditambahkan modLexiconFocus \'id\' kolom.';
$_lang['lexiconfocus_add_pk'] = 'Ditambahkan modLexiconFocus PRIMARY KEY \'id\' kolom.';
$_lang['lexiconfocus_alter_pk'] = 'Mengubah modLexiconFocus \'nama\' dari PRIMARY KEY untuk kunci yang unik';
$_lang['lexiconfocus_drop_pk'] = 'ModLexiconFocus menjatuhkan PRIMARY KEY.';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'Mengganti nama tabel \'[[+old]]\' ke \'[[+new]]\'.';
$_lang['remove_fulltext_index'] = 'Dihapus indeks teks lengkap \'[[+index]]\'.';
$_lang['systemsetting_xtype_fix'] = 'Berhasil tetap xtypes untuk modSystemSettings.';
$_lang['transportpackage_manifest_text'] = 'Dimodifikasi kolom \'nyata\' teks dari MEDIUMTEXT pada \'[[+class]]\'.';
$_lang['update_closure_table'] = 'Memperbarui data tabel penutupan untuk kelas \'[[+class]]\'.';
$_lang['update_table_column_data'] = 'Diperbarui data di kolom [[+column]] meja [[+table]] ([[+class]])';
$_lang['iso_country_code_converted'] = 'Berhasil merubah profil nama negara menggunakan kode ISO negara.';
$_lang['legacy_cleanup_complete'] = 'File legacy bersih selesai.';
$_lang['legacy_cleanup_count'] = 'Dihapus [[+files]] berskas(s) dan [[+folders]] folder(s).';
$_lang['clipboard_flash_file_unlink_success'] = 'Successfully removed the copy to clipboard flash file.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Error removing the copy to clipboard flash file.';
$_lang['clipboard_flash_file_missing'] = 'The copy to clipboard flash file has already been removed.';
$_lang['system_setting_cleanup_success'] = 'System Setting `[[+key]]` removed.';
$_lang['system_setting_cleanup_failed'] = 'System Setting `[[+key]]` could not be removed.';
$_lang['system_setting_update_xtype_success'] = 'Successfully changed the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Failed to change the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'System Setting `[[+key]]` updated.';
$_lang['system_setting_update_failed'] = 'System Setting `[[+key]]` could not be updated.';
$_lang['system_setting_rename_key_success'] = 'Successfully renamed the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Failed to rename the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
