<?php
declare(strict_types=1);

/**
 * Generated by Phan's internal/extract_arg_info.phpt, from ext/opcache/Optimizer/zend_funct_info.c of php-src.
 */
return [
'_' => '?false|?string',
'abs' => 'float|int',
'array_change_key_case' => 'array',
'array_chunk' => '?array',
'array_column' => 'array|false',
'array_combine' => 'array|false',
'array_count_values' => 'array',
'array_diff' => 'array',
'array_diff_assoc' => 'array',
'array_diff_key' => 'array',
'array_diff_uassoc' => 'array',
'array_diff_ukey' => 'array',
'array_fill' => 'array|false',
'array_fill_keys' => 'array',
'array_filter' => 'array',
'array_flip' => 'array',
'array_intersect' => 'array',
'array_intersect_assoc' => 'array',
'array_intersect_key' => 'array',
'array_intersect_uassoc' => 'array',
'array_intersect_ukey' => 'array',
'array_key_exists' => 'bool',
'array_key_first' => '?int|?string',
'array_key_last' => '?int|?string',
'array_keys' => 'array',
'array_map' => 'array',
'array_merge' => 'array',
'array_merge_recursive' => 'array',
'array_multisort' => 'bool',
'array_pad' => 'array|false',
'array_product' => 'float|int',
'array_push' => 'false|int',
'array_replace' => 'array',
'array_replace_recursive' => 'array',
'array_reverse' => 'array',
'array_search' => '?false|?int|?string',
'array_slice' => 'array',
'array_splice' => 'array',
'array_sum' => 'float|int',
'array_udiff' => 'array',
'array_udiff_assoc' => 'array',
'array_udiff_uassoc' => 'array',
'array_uintersect' => 'array',
'array_uintersect_assoc' => 'array',
'array_uintersect_uassoc' => 'array',
'array_unique' => 'array',
'array_values' => 'array',
'array_walk' => 'bool',
'array_walk_recursive' => 'bool',
'arsort' => 'bool',
'asort' => 'bool',
'assert' => 'bool',
'assert_options' => '?array|?false|?int|?object|?string',
'base64_decode' => 'false|string',
'base_convert' => 'false|string',
'bcdiv' => '?string',
'bcmod' => '?string',
'bcpowmod' => '?false|?string',
'bcsqrt' => '?string',
'bin2hex' => 'false|string',
'bind_textdomain_codeset' => '?false|?string',
'bindec' => 'float|int',
'bindtextdomain' => '?false|?string',
'boolval' => 'bool',
'chdir' => 'bool',
'checkdate' => 'bool',
'checkdnsrr' => 'bool',
'chgrp' => 'bool',
'chmod' => 'bool',
'chown' => 'bool',
'chroot' => 'bool',
'chunk_split' => 'false|string',
'class_alias' => 'bool',
'class_exists' => 'bool',
'closedir' => '?bool',
'compact' => '?array',
'constant' => '?array|?bool|?float|?int|?resource|?string',
'convert_uudecode' => 'false|string',
'convert_uuencode' => 'false|string',
'copy' => 'bool',
'count_chars' => 'array|false|string',
'ctype_alnum' => '?bool',
'ctype_alpha' => '?bool',
'ctype_cntrl' => '?bool',
'ctype_digit' => '?bool',
'ctype_graph' => '?bool',
'ctype_lower' => '?bool',
'ctype_print' => '?bool',
'ctype_punct' => '?bool',
'ctype_space' => '?bool',
'ctype_upper' => '?bool',
'ctype_xdigit' => '?bool',
'curl_copy_handle' => '?resource',
'curl_errno' => '?int',
'curl_error' => '?string',
'curl_escape' => '?false|?string',
'curl_exec' => '?false|?string',
'curl_getinfo' => '?array|?false|?float|?int|?string',
'curl_init' => '?false|?resource',
'curl_multi_add_handle' => '?int',
'curl_multi_close' => '?false',
'curl_multi_exec' => '?int',
'curl_multi_getcontent' => '?string',
'curl_multi_info_read' => '?array|?false|?int',
'curl_multi_remove_handle' => '?int',
'curl_multi_select' => '?int',
'curl_multi_setopt' => '?bool',
'curl_multi_strerror' => '?string',
'curl_pause' => '?int',
'curl_setopt' => '?bool',
'curl_setopt_array' => '?bool',
'curl_share_setopt' => '?bool',
'curl_strerror' => '?string',
'curl_unescape' => '?false|?string',
'curl_version' => '?array|?false',
'date' => 'false|string',
'date_add' => 'false|object',
'date_create' => 'false|object',
'date_create_from_format' => 'false|object',
'date_create_immutable' => 'false|object',
'date_create_immutable_from_format' => 'false|object',
'date_date_set' => 'false|object',
'date_default_timezone_set' => 'bool',
'date_diff' => 'false|object',
'date_format' => 'false|string',
'date_get_last_errors' => 'array|false',
'date_interval_create_from_date_string' => 'false|object',
'date_interval_format' => 'false|string',
'date_isodate_set' => 'false|object',
'date_modify' => 'false|object',
'date_offset_get' => 'false|int',
'date_parse' => 'array|false',
'date_parse_from_format' => 'array|false',
'date_sub' => 'false|object',
'date_sun_info' => 'array|false',
'date_sunrise' => 'false|float|int|string',
'date_sunset' => 'false|float|int|string',
'date_time_set' => 'false|object',
'date_timestamp_get' => 'false|int',
'date_timestamp_set' => 'false|object',
'date_timezone_get' => 'false|object',
'date_timezone_set' => 'false|object',
'dcgettext' => '?false|?string',
'dcngettext' => '?false|?string',
'debug_backtrace' => 'array',
'define' => '?bool',
'defined' => 'bool',
'dgettext' => '?false|?string',
'dir' => 'false|object',
'dirname' => '?string',
'disk_free_space' => 'false|float',
'disk_total_space' => 'false|float',
'diskfreespace' => 'false|float',
'dns_check_record' => 'bool',
'dns_get_mx' => 'bool',
'dns_get_record' => 'array|false',
'error_get_last' => '?array',
'error_log' => 'bool',
'exec' => 'false|string',
'exif_imagetype' => '?false|?int',
'exif_read_data' => '?array|?false',
'exif_tagname' => '?false|?string',
'exif_thumbnail' => '?false|?string',
'explode' => 'array|false',
'extension_loaded' => 'bool',
'extract' => '?int',
'fclose' => 'bool',
'feof' => 'bool',
'fflush' => 'bool',
'fgetc' => 'false|string',
'fgetcsv' => '?array|?false',
'fgets' => 'false|string',
'file' => 'array|false',
'file_exists' => 'bool',
'file_get_contents' => 'false|string',
'file_put_contents' => 'false|int',
'fileatime' => 'false|int',
'filectime' => 'false|int',
'filegroup' => 'false|int',
'fileinode' => 'false|int',
'filemtime' => 'false|int',
'fileowner' => 'false|int',
'fileperms' => 'false|int',
'filesize' => 'false|int',
'filetype' => 'false|string',
'filter_has_var' => 'bool',
'filter_id' => '?false|?int',
'filter_input_array' => '?array|?false',
'filter_list' => 'array',
'filter_var_array' => '?array|?false',
'finfo_buffer' => '?false|?string',
'finfo_close' => 'bool',
'finfo_file' => '?false|?string',
'finfo_open' => 'false|resource',
'finfo_set_flags' => 'bool',
'flock' => 'bool',
'fnmatch' => 'bool',
'fopen' => 'false|resource',
'fpassthru' => 'false|int',
'fprintf' => 'false|int',
'fputcsv' => 'false|int',
'fputs' => 'false|int',
'fread' => 'false|string',
'fscanf' => '?array|?false|?int',
'fseek' => 'false|int',
'fsockopen' => 'false|resource',
'fstat' => 'array|false',
'ftell' => 'false|int',
'ftruncate' => 'bool',
'func_get_args' => 'array|false',
'function_exists' => 'bool',
'fwrite' => 'false|int',
'gc_enabled' => 'bool',
'gd_info' => 'array',
'get_browser' => 'array|false|object',
'get_called_class' => 'false|string',
'get_cfg_var' => 'array|false|string',
'get_class' => 'false|string',
'get_class_methods' => '?array|?false',
'get_class_vars' => 'array|false',
'get_declared_classes' => 'array',
'get_declared_interfaces' => 'array',
'get_declared_traits' => 'array',
'get_defined_constants' => 'array',
'get_defined_functions' => '?array',
'get_defined_vars' => 'array',
'get_extension_funcs' => 'array|false',
'get_headers' => 'array|false',
'get_html_translation_table' => 'array',
'get_include_path' => 'false|string',
'get_included_files' => 'array',
'get_loaded_extensions' => 'array',
'get_meta_tags' => 'array|false',
'get_object_vars' => 'array',
'getcwd' => 'false|string',
'getdate' => 'array|false',
'getenv' => 'array|false|string',
'gethostbyaddr' => 'false|string',
'gethostbynamel' => 'array|false',
'gethostname' => 'false|string',
'getimagesize' => 'array|false',
'getimagesizefromstring' => 'array|false',
'getlastmod' => 'false|int',
'getmxrr' => 'bool',
'getmygid' => 'false|int',
'getmyinode' => 'false|int',
'getmypid' => 'false|int',
'getmyuid' => 'false|int',
'getopt' => 'array|false',
'getprotobyname' => 'false|int',
'getprotobynumber' => 'false|string',
'getrandmax' => '?int',
'getrusage' => 'array|false',
'getservbyname' => 'false|int',
'getservbyport' => 'false|string',
'gettext' => '?false|?string',
'gettimeofday' => 'array|float',
'glob' => 'array|false',
'gmdate' => 'false|string',
'gmmktime' => 'false|int',
'gmstrftime' => 'false|string',
'gzclose' => 'bool',
'gzcompress' => '?false|?string',
'gzdecode' => '?false|?string',
'gzdeflate' => '?false|?string',
'gzencode' => '?false|?string',
'gzeof' => 'bool',
'gzfile' => '?array|?false',
'gzgetc' => 'false|string',
'gzgets' => 'false|string',
'gzinflate' => '?false|?string',
'gzopen' => '?false|?resource',
'gzpassthru' => 'false|int',
'gzputs' => 'false|int',
'gzread' => 'false|string',
'gzrewind' => 'bool',
'gzseek' => 'false|int',
'gztell' => 'false|int',
'gzuncompress' => '?false|?string',
'gzwrite' => 'false|int',
'hash' => '?false|?string',
'hash_algos' => 'array',
'hash_copy' => '?false|?object',
'hash_file' => '?false|?string',
'hash_final' => '?string',
'hash_hmac' => '?false|?string',
'hash_hmac_file' => '?false|?string',
'hash_init' => '?false|?object',
'hash_pbkdf2' => '?false|?string',
'hash_update' => '?bool',
'hash_update_file' => '?bool',
'hash_update_stream' => '?int',
'header_register_callback' => '?bool',
'headers_list' => 'array',
'headers_sent' => '?bool',
'hex2bin' => 'false|string',
'hexdec' => 'float|int',
'highlight_file' => 'bool|string',
'highlight_string' => 'bool|string',
'html_entity_decode' => 'false|string',
'htmlspecialchars_decode' => 'false|string',
'http_build_query' => 'false|string',
'http_response_code' => '?false|?int',
'iconv' => '?false|?string',
'iconv_get_encoding' => '?array|?false|?string',
'iconv_mime_decode' => 'false|string',
'iconv_mime_decode_headers' => 'array|false',
'iconv_mime_encode' => 'false|string',
'iconv_set_encoding' => '?bool',
'iconv_strlen' => 'false|int',
'iconv_strpos' => 'false|int',
'iconv_strrpos' => 'false|int',
'iconv_substr' => 'false|string',
'idate' => 'false|int',
'image2wbmp' => '?bool',
'image_type_to_extension' => 'false|string',
'imageaffine' => '?false|?resource',
'imageaffinematrixconcat' => '?array|?false',
'imageaffinematrixget' => '?array|?false',
'imagealphablending' => '?bool',
'imageantialias' => '?bool',
'imagearc' => '?bool',
'imagebmp' => '?bool',
'imagechar' => '?bool',
'imagecharup' => '?bool',
'imagecolorallocatealpha' => 'false|int',
'imagecolorat' => '?false|?int',
'imagecolorclosest' => '?false|?int',
'imagecolorclosestalpha' => '?false|?int',
'imagecolorclosesthwb' => '?false|?int',
'imagecolordeallocate' => '?bool',
'imagecolorexact' => '?false|?int',
'imagecolorexactalpha' => '?false|?int',
'imagecolormatch' => '?bool',
'imagecolorresolve' => '?false|?int',
'imagecolorresolvealpha' => '?false|?int',
'imagecolorset' => '?false',
'imagecolorsforindex' => '?array|?false',
'imagecolorstotal' => '?false|?int',
'imagecolortransparent' => '?false|?int',
'imageconvolution' => 'bool',
'imagecopy' => '?bool',
'imagecopymerge' => '?bool',
'imagecopymergegray' => '?bool',
'imagecopyresampled' => '?bool',
'imagecopyresized' => '?bool',
'imagecreate' => '?false|?resource',
'imagecreatefrombmp' => '?false|?resource',
'imagecreatefromgd' => '?false|?resource',
'imagecreatefromgd2' => '?false|?resource',
'imagecreatefromgd2part' => '?false|?resource',
'imagecreatefromgif' => '?false|?resource',
'imagecreatefromjpeg' => '?false|?resource',
'imagecreatefrompng' => '?false|?resource',
'imagecreatefromstring' => '?false|?resource',
'imagecreatefromwbmp' => '?false|?resource',
'imagecreatefromwebp' => '?false|?resource',
'imagecreatefromxbm' => '?false|?resource',
'imagecreatefromxpm' => '?false|?resource',
'imagecreatetruecolor' => '?false|?resource',
'imagecrop' => '?false|?resource',
'imagecropauto' => '?false|?resource',
'imagedashedline' => '?bool',
'imagedestroy' => '?bool',
'imageellipse' => '?bool',
'imagefill' => '?bool',
'imagefilledarc' => '?bool',
'imagefilledellipse' => '?bool',
'imagefilledpolygon' => '?bool',
'imagefilledrectangle' => '?bool',
'imagefilltoborder' => '?bool',
'imagefilter' => '?bool',
'imageflip' => '?bool',
'imagefontheight' => '?int',
'imagefontwidth' => '?int',
'imageftbbox' => '?array|?false',
'imagefttext' => '?array|?false',
'imagegammacorrect' => '?bool',
'imagegd' => '?bool',
'imagegd2' => '?bool',
'imagegetclip' => '?array|?false',
'imagegif' => '?bool',
'imagegrabscreen' => 'false|resource',
'imagegrabwindow' => 'false|resource',
'imageinterlace' => '?false|?int',
'imageistruecolor' => '?bool',
'imagejpeg' => '?bool',
'imagelayereffect' => '?bool',
'imageline' => '?bool',
'imageloadfont' => '?false|?int',
'imageopenpolygon' => '?bool',
'imagepalettecopy' => '?false',
'imagepalettetotruecolor' => '?bool',
'imagepng' => '?bool',
'imagepolygon' => '?bool',
'imagerectangle' => '?bool',
'imageresolution' => '?array|?bool',
'imagerotate' => 'false|resource',
'imagesavealpha' => '?bool',
'imagescale' => '?false|?resource',
'imagesetbrush' => '?bool',
'imagesetclip' => '?bool',
'imagesetinterpolation' => '?bool',
'imagesetpixel' => '?bool',
'imagesetstyle' => '?bool',
'imagesetthickness' => '?bool',
'imagesettile' => '?bool',
'imagestring' => '?bool',
'imagestringup' => '?bool',
'imagesx' => '?false|?int',
'imagesy' => '?false|?int',
'imagetruecolortopalette' => '?bool',
'imagettfbbox' => '?array|?false',
'imagettftext' => '?array|?false',
'imagewbmp' => '?bool',
'imagewebp' => '?bool',
'imagexbm' => '?bool',
'in_array' => 'bool',
'inet_ntop' => 'false|string',
'inet_pton' => 'false|string',
'ini_alter' => '?false|?string',
'ini_get' => 'false|string',
'ini_get_all' => 'array|false',
'ini_set' => 'false|string',
'interface_exists' => 'bool',
'ip2long' => 'false|int',
'iptcembed' => 'false|string',
'iptcparse' => 'array|false',
'is_a' => 'bool',
'is_array' => 'bool',
'is_bool' => 'bool',
'is_callable' => 'bool',
'is_countable' => 'bool',
'is_dir' => 'bool',
'is_double' => 'bool',
'is_executable' => 'bool',
'is_file' => 'bool',
'is_finite' => 'bool',
'is_float' => 'bool',
'is_infinite' => 'bool',
'is_int' => 'bool',
'is_integer' => 'bool',
'is_iterable' => 'bool',
'is_link' => 'bool',
'is_long' => 'bool',
'is_nan' => 'bool',
'is_null' => 'bool',
'is_numeric' => 'bool',
'is_object' => 'bool',
'is_readable' => 'bool',
'is_real' => 'bool',
'is_resource' => 'bool',
'is_scalar' => 'bool',
'is_string' => 'bool',
'is_subclass_of' => 'bool',
'is_uploaded_file' => 'bool',
'is_writable' => 'bool',
'is_writeable' => 'bool',
'jpeg2wbmp' => '?bool',
'json_encode' => '?false|?string',
'key' => '?int|?string',
'key_exists' => 'bool',
'krsort' => 'bool',
'ksort' => 'bool',
'lchgrp' => 'bool',
'lchown' => 'bool',
'link' => 'bool',
'linkinfo' => 'false|int',
'localeconv' => 'array',
'localtime' => 'array|false',
'log' => 'false|float',
'long2ip' => 'false|string',
'lstat' => 'array|false',
'mail' => 'bool',
'mb_check_encoding' => 'bool',
'mb_convert_case' => 'false|string',
'mb_convert_encoding' => '?array|?false|?string',
'mb_convert_kana' => '?false|?string',
'mb_convert_variables' => '?false|?string',
'mb_decode_mimeheader' => '?false|?string',
'mb_decode_numericentity' => '?false|?string',
'mb_detect_encoding' => '?false|?string',
'mb_detect_order' => '?array|?false',
'mb_encode_mimeheader' => '?false|?string',
'mb_encode_numericentity' => '?false|?string',
'mb_encoding_aliases' => 'array|false',
'mb_ereg' => 'false|int',
'mb_ereg_match' => 'bool',
'mb_ereg_replace' => '?false|?string',
'mb_ereg_replace_callback' => '?false|?string',
'mb_ereg_search' => '?bool',
'mb_ereg_search_getregs' => 'array|false',
'mb_ereg_search_init' => '?bool',
'mb_ereg_search_pos' => '?array|?false',
'mb_ereg_search_regs' => '?array|?false',
'mb_ereg_search_setpos' => '?bool',
'mb_eregi' => 'false|int',
'mb_eregi_replace' => '?false|?string',
'mb_get_info' => 'array|false|int|string',
'mb_http_input' => '?false|?string',
'mb_http_output' => '?bool|?string',
'mb_internal_encoding' => '?bool|?string',
'mb_language' => '?bool|?string',
'mb_list_encodings' => 'array',
'mb_output_handler' => '?string',
'mb_parse_str' => '?bool',
'mb_preferred_mime_name' => '?false|?string',
'mb_regex_encoding' => '?bool|?string',
'mb_regex_set_options' => 'false|string',
'mb_send_mail' => '?bool',
'mb_split' => 'array|false',
'mb_strcut' => '?false|?string',
'mb_strimwidth' => '?false|?string',
'mb_stripos' => '?false|?int',
'mb_stristr' => '?false|?string',
'mb_strlen' => '?false|?int',
'mb_strpos' => '?false|?int',
'mb_strrchr' => '?false|?string',
'mb_strrichr' => '?false|?string',
'mb_strripos' => '?false|?int',
'mb_strrpos' => '?false|?int',
'mb_strstr' => '?false|?string',
'mb_strtolower' => '?false|?string',
'mb_strtoupper' => '?false|?string',
'mb_strwidth' => '?false|?int',
'mb_substitute_character' => '?bool|?int|?string',
'mb_substr' => '?false|?string',
'mb_substr_count' => '?false|?int',
'md5_file' => 'false|string',
'memory_get_peak_usage' => 'false|int',
'memory_get_usage' => 'false|int',
'metaphone' => 'false|string',
'method_exists' => 'bool',
'mhash' => '?false|?string',
'mhash_get_block_size' => '?false|?int',
'mhash_get_hash_name' => '?false|?string',
'mhash_keygen_s2k' => '?false|?string',
'microtime' => 'float|string',
'mime_content_type' => '?false|?string',
'mkdir' => 'bool',
'mktime' => 'false|int',
'money_format' => 'false|string',
'move_uploaded_file' => 'bool',
'mt_rand' => '?false|?int',
'mysqli_affected_rows' => '?int',
'mysqli_autocommit' => '?bool',
'mysqli_begin_transaction' => '?bool',
'mysqli_change_user' => '?bool',
'mysqli_character_set_name' => '?string',
'mysqli_close' => '?true',
'mysqli_commit' => '?bool',
'mysqli_connect' => '?false|?object',
'mysqli_connect_error' => '?string',
'mysqli_data_seek' => '?bool',
'mysqli_debug' => '?true',
'mysqli_dump_debug_info' => '?bool',
'mysqli_errno' => '?int',
'mysqli_error' => '?string',
'mysqli_error_list' => '?array',
'mysqli_fetch_all' => '?array|?false',
'mysqli_fetch_array' => '?array|?false',
'mysqli_fetch_assoc' => '?array|?false',
'mysqli_fetch_field' => '?false|?object',
'mysqli_fetch_field_direct' => '?false|?object',
'mysqli_fetch_fields' => '?array',
'mysqli_fetch_lengths' => '?array|?false',
'mysqli_fetch_object' => '?false|?object',
'mysqli_fetch_row' => '?array|?false',
'mysqli_field_count' => '?int',
'mysqli_field_seek' => '?bool',
'mysqli_field_tell' => '?int',
'mysqli_get_host_info' => '?string',
'mysqli_get_links_stats' => '?array',
'mysqli_get_proto_info' => '?int',
'mysqli_get_server_info' => '?string',
'mysqli_get_server_version' => '?int',
'mysqli_get_warnings' => '?false|?object',
'mysqli_info' => '?string',
'mysqli_init' => 'false|object',
'mysqli_kill' => '?bool',
'mysqli_more_results' => '?bool',
'mysqli_multi_query' => '?bool',
'mysqli_next_result' => '?bool',
'mysqli_num_fields' => '?false|?int',
'mysqli_num_rows' => '?false|?int',
'mysqli_options' => '?bool',
'mysqli_ping' => '?bool',
'mysqli_poll' => '?false|?int',
'mysqli_prepare' => '?false|?object',
'mysqli_query' => '?bool|?object',
'mysqli_real_connect' => '?bool',
'mysqli_real_escape_string' => '?string',
'mysqli_real_query' => '?bool',
'mysqli_reap_async_query' => '?bool|?object',
'mysqli_refresh' => '?bool',
'mysqli_release_savepoint' => '?bool',
'mysqli_rollback' => '?bool',
'mysqli_savepoint' => '?bool',
'mysqli_select_db' => '?bool',
'mysqli_set_charset' => '?bool',
'mysqli_sqlstate' => '?string',
'mysqli_ssl_set' => '?true',
'mysqli_stmt_attr_get' => '?false|?int',
'mysqli_stmt_attr_set' => '?bool',
'mysqli_stmt_bind_param' => '?bool',
'mysqli_stmt_bind_result' => '?bool',
'mysqli_stmt_close' => '?bool',
'mysqli_stmt_data_seek' => '?false',
'mysqli_stmt_errno' => '?int',
'mysqli_stmt_error' => '?string',
'mysqli_stmt_error_list' => '?array',
'mysqli_stmt_execute' => '?bool',
'mysqli_stmt_fetch' => '?bool',
'mysqli_stmt_field_count' => '?int',
'mysqli_stmt_get_result' => '?false|?object',
'mysqli_stmt_get_warnings' => '?false|?object',
'mysqli_stmt_init' => '?false|?object',
'mysqli_stmt_insert_id' => '?int',
'mysqli_stmt_more_results' => '?bool',
'mysqli_stmt_next_result' => '?bool',
'mysqli_stmt_num_rows' => '?int',
'mysqli_stmt_param_count' => '?int',
'mysqli_stmt_prepare' => '?bool',
'mysqli_stmt_reset' => '?bool',
'mysqli_stmt_result_metadata' => '?false|?object',
'mysqli_stmt_send_long_data' => '?bool',
'mysqli_stmt_sqlstate' => '?string',
'mysqli_stmt_store_result' => '?bool',
'mysqli_store_result' => '?false|?object',
'mysqli_thread_id' => '?int',
'mysqli_thread_safe' => 'bool',
'mysqli_use_result' => '?false|?object',
'mysqli_warning_count' => '?int',
'natcasesort' => 'bool',
'natsort' => 'bool',
'ngettext' => '?false|?string',
'nl_langinfo' => 'false|string',
'ob_clean' => 'bool',
'ob_end_clean' => 'bool',
'ob_end_flush' => 'bool',
'ob_flush' => 'bool',
'ob_get_clean' => 'false|string',
'ob_get_contents' => 'false|string',
'ob_get_flush' => 'false|string',
'ob_get_length' => 'false|int',
'ob_get_status' => '?array',
'ob_gzhandler' => 'false|string',
'ob_list_handlers' => '?array',
'ob_start' => 'bool',
'octdec' => 'float|int',
'opendir' => 'false|resource',
'openlog' => 'bool',
'output_add_rewrite_var' => 'bool',
'pack' => 'false|string',
'parse_ini_file' => 'array|false',
'parse_ini_string' => 'array|false',
'parse_url' => 'array|false|int|null|string',
'passthru' => '?false',
'password_get_info' => '?array',
'password_hash' => 'false|null|string',
'password_needs_rehash' => 'bool',
'password_verify' => 'bool',
'pathinfo' => 'array|string',
'pclose' => 'false|int',
'pfsockopen' => 'false|resource',
'pg_affected_rows' => '?false|?int',
'pg_cancel_query' => 'bool',
'pg_close' => '?bool',
'pg_connect' => '?false|?resource',
'pg_connect_poll' => '?false|?int',
'pg_connection_busy' => 'bool',
'pg_connection_reset' => 'bool',
'pg_connection_status' => 'false|int',
'pg_consume_input' => '?bool',
'pg_convert' => '?array|?false',
'pg_copy_from' => '?bool',
'pg_copy_to' => '?array|?false',
'pg_dbname' => '?false|?string',
'pg_delete' => '?bool|?string',
'pg_end_copy' => '?bool',
'pg_escape_bytea' => '?false|?string',
'pg_escape_identifier' => '?false|?string',
'pg_escape_literal' => '?false|?string',
'pg_escape_string' => '?false|?string',
'pg_execute' => '?false|?resource',
'pg_fetch_all' => '?array|?false',
'pg_fetch_all_columns' => '?array|?false',
'pg_fetch_array' => '?array|?false',
'pg_fetch_assoc' => '?array|?false',
'pg_fetch_object' => '?false|?object',
'pg_fetch_result' => '?false|?string',
'pg_fetch_row' => '?array|?false',
'pg_field_is_null' => '?false|?int',
'pg_field_name' => '?false|?string',
'pg_field_num' => '?false|?int',
'pg_field_prtlen' => '?false|?int',
'pg_field_size' => '?false|?int',
'pg_field_table' => '?false|?int|?string',
'pg_field_type' => '?false|?string',
'pg_field_type_oid' => '?false|?int|?string',
'pg_flush' => '?bool|?int',
'pg_free_result' => '?bool',
'pg_get_notify' => 'array|false',
'pg_get_pid' => 'false|int',
'pg_get_result' => 'false|resource',
'pg_host' => '?false|?string',
'pg_insert' => '?bool|?resource|?string',
'pg_last_error' => '?false|?string',
'pg_last_oid' => '?false|?int|?string',
'pg_lo_create' => '?false|?int|?string',
'pg_lo_export' => '?bool',
'pg_lo_import' => '?false|?int|?string',
'pg_lo_open' => '?false|?resource',
'pg_lo_read' => '?false|?string',
'pg_lo_read_all' => '?false|?int',
'pg_lo_seek' => '?bool',
'pg_lo_tell' => '?false|?int',
'pg_lo_truncate' => '?bool',
'pg_lo_unlink' => '?bool',
'pg_lo_write' => '?false|?int',
'pg_meta_data' => '?array|?false',
'pg_num_fields' => '?false|?int',
'pg_num_rows' => '?false|?int',
'pg_options' => '?false|?string',
'pg_parameter_status' => 'false|string',
'pg_pconnect' => '?false|?resource',
'pg_ping' => 'bool',
'pg_port' => '?false|?string',
'pg_prepare' => '?false|?resource',
'pg_put_line' => '?bool',
'pg_query' => '?false|?resource',
'pg_query_params' => '?false|?resource',
'pg_result_error' => 'false|string',
'pg_result_error_field' => 'false|null|string',
'pg_result_seek' => '?bool',
'pg_result_status' => '?false|?int|?string',
'pg_select' => '?bool|?string',
'pg_send_execute' => '?bool|?int',
'pg_send_prepare' => '?bool|?int',
'pg_send_query' => '?bool|?int',
'pg_send_query_params' => '?bool|?int',
'pg_set_client_encoding' => '?false|?int',
'pg_set_error_verbosity' => '?false|?int',
'pg_socket' => '?false|?resource',
'pg_trace' => '?bool',
'pg_transaction_status' => 'false|int',
'pg_tty' => '?false|?string',
'pg_unescape_bytea' => '?false|?string',
'pg_untrace' => '?bool',
'pg_update' => '?bool|?string',
'pg_version' => '?array|?false',
'php_ini_loaded_file' => 'false|string',
'php_ini_scanned_files' => 'false|string',
'php_sapi_name' => 'false|string',
'phpversion' => 'false|string',
'png2wbmp' => '?bool',
'popen' => 'false|resource',
'pow' => '?float|?int|?object',
'preg_filter' => 'array|false|string',
'preg_grep' => '?array|?false',
'preg_last_error' => '?int',
'preg_match' => '?false|?int',
'preg_match_all' => '?false|?int',
'preg_quote' => '?string',
'preg_replace' => '?array|?false|?string',
'preg_replace_callback' => '?array|?false|?string',
'preg_split' => '?array|?false',
'print_r' => 'false|string',
'printf' => 'false|int',
'proc_close' => 'false|int',
'proc_get_status' => 'array|false',
'proc_nice' => 'bool',
'proc_open' => 'false|resource',
'proc_terminate' => 'bool',
'property_exists' => '?bool',
'putenv' => 'bool',
'rand' => '?int',
'readdir' => 'false|string',
'readfile' => 'false|int',
'readgzfile' => '?false|?int',
'readlink' => 'false|string',
'realpath' => 'false|string',
'realpath_cache_get' => 'array',
'register_shutdown_function' => '?false',
'register_tick_function' => '?bool',
'rename' => 'bool',
'rewind' => 'bool',
'rewinddir' => '?bool',
'rmdir' => 'bool',
'round' => 'false|float',
'rsort' => 'bool',
'scandir' => 'array|false',
'serialize' => '?false|?string',
'session_abort' => 'bool',
'session_cache_expire' => '?false|?int',
'session_cache_limiter' => '?false|?string',
'session_create_id' => '?false|?string',
'session_decode' => '?bool',
'session_destroy' => 'bool',
'session_encode' => 'false|string',
'session_gc' => 'false|int',
'session_get_cookie_params' => 'array',
'session_id' => '?false|?string',
'session_module_name' => '?false|?string',
'session_name' => '?false|?string',
'session_regenerate_id' => '?bool',
'session_reset' => '?bool',
'session_save_path' => '?false|?string',
'session_set_cookie_params' => '?bool',
'session_set_save_handler' => '?bool',
'session_start' => 'bool',
'session_status' => '?int',
'session_unset' => 'bool',
'session_write_close' => 'bool',
'set_error_handler' => '?callable',
'set_file_buffer' => 'false|int',
'set_include_path' => 'false|string',
'set_time_limit' => '?bool',
'setcookie' => '?bool',
'setlocale' => 'false|string',
'setrawcookie' => '?bool',
'settype' => 'bool',
'sha1_file' => 'false|string',
'shell_exec' => '?false|?string',
'show_source' => 'false|string',
'shuffle' => 'bool',
'sleep' => 'false|int',
'socket_get_status' => 'array',
'socket_set_blocking' => 'bool',
'socket_set_timeout' => 'bool',
'sodium_bin2hex' => '?string',
'sodium_compare' => '?int',
'sodium_crypto_aead_aes256gcm_decrypt' => '?false|?string',
'sodium_crypto_aead_aes256gcm_encrypt' => '?string',
'sodium_crypto_aead_aes256gcm_is_available' => 'bool',
'sodium_crypto_aead_chacha20poly1305_decrypt' => '?false|?string',
'sodium_crypto_aead_chacha20poly1305_encrypt' => '?string',
'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => '?false|?string',
'sodium_crypto_aead_chacha20poly1305_ietf_encrypt' => '?string',
'sodium_crypto_aead_xchacha20poly1305_ietf_decrypt' => '?false|?string',
'sodium_crypto_aead_xchacha20poly1305_ietf_encrypt' => '?string',
'sodium_crypto_auth' => '?string',
'sodium_crypto_auth_verify' => '?bool',
'sodium_crypto_box' => '?string',
'sodium_crypto_box_keypair_from_secretkey_and_publickey' => '?string',
'sodium_crypto_box_open' => '?false|?string',
'sodium_crypto_box_publickey' => '?string',
'sodium_crypto_box_publickey_from_secretkey' => '?string',
'sodium_crypto_box_seal' => '?string',
'sodium_crypto_box_seal_open' => '?false|?string',
'sodium_crypto_box_secretkey' => '?string',
'sodium_crypto_box_seed_keypair' => '?string',
'sodium_crypto_generichash' => '?string',
'sodium_crypto_generichash_final' => '?string',
'sodium_crypto_generichash_init' => '?string',
'sodium_crypto_generichash_update' => '?true',
'sodium_crypto_kdf_derive_from_key' => '?string',
'sodium_crypto_kx_client_session_keys' => '?array',
'sodium_crypto_kx_publickey' => '?string',
'sodium_crypto_kx_secretkey' => '?string',
'sodium_crypto_kx_seed_keypair' => '?string',
'sodium_crypto_kx_server_session_keys' => '?array',
'sodium_crypto_pwhash' => '?string',
'sodium_crypto_pwhash_scryptsalsa208sha256' => '?string',
'sodium_crypto_pwhash_scryptsalsa208sha256_str' => '?string',
'sodium_crypto_pwhash_scryptsalsa208sha256_str_verify' => '?bool',
'sodium_crypto_pwhash_str' => '?string',
'sodium_crypto_pwhash_str_verify' => '?bool',
'sodium_crypto_scalarmult' => '?string',
'sodium_crypto_secretbox' => '?string',
'sodium_crypto_secretbox_open' => '?false|?string',
'sodium_crypto_shorthash' => '?string',
'sodium_crypto_sign' => '?string',
'sodium_crypto_sign_detached' => '?string',
'sodium_crypto_sign_ed25519_pk_to_curve25519' => '?string',
'sodium_crypto_sign_ed25519_sk_to_curve25519' => '?string',
'sodium_crypto_sign_keypair_from_secretkey_and_publickey' => '?string',
'sodium_crypto_sign_open' => '?false|?string',
'sodium_crypto_sign_publickey' => '?string',
'sodium_crypto_sign_publickey_from_secretkey' => '?string',
'sodium_crypto_sign_secretkey' => '?string',
'sodium_crypto_sign_seed_keypair' => '?string',
'sodium_crypto_sign_verify_detached' => '?bool',
'sodium_crypto_stream' => '?string',
'sodium_crypto_stream_xor' => '?string',
'sodium_hex2bin' => '?string',
'sodium_memcmp' => '?int',
'sodium_pad' => '?string',
'sodium_unpad' => '?string',
'sort' => 'bool',
'soundex' => 'false|string',
'sprintf' => 'false|string',
'sscanf' => '?array|?int',
'stat' => 'array|false',
'str_getcsv' => '?array',
'str_ireplace' => 'array|string',
'str_pad' => '?string',
'str_repeat' => '?string',
'str_replace' => 'array|string',
'str_shuffle' => '?string',
'str_split' => 'array|false',
'str_word_count' => 'array|false|int',
'strchr' => 'false|string',
'strcspn' => 'false|int',
'stream_bucket_make_writeable' => 'false|object',
'stream_context_create' => 'false|resource',
'stream_context_get_default' => 'false|resource',
'stream_context_get_options' => 'array|false',
'stream_context_get_params' => 'array|false',
'stream_context_set_default' => 'false|resource',
'stream_context_set_option' => 'bool',
'stream_context_set_params' => 'bool',
'stream_copy_to_stream' => 'false|int',
'stream_filter_append' => 'false|resource',
'stream_filter_prepend' => 'false|resource',
'stream_filter_register' => 'bool',
'stream_filter_remove' => 'bool',
'stream_get_contents' => 'false|string',
'stream_get_filters' => 'array',
'stream_get_line' => 'false|string',
'stream_get_meta_data' => 'array|false',
'stream_get_transports' => 'array|false',
'stream_get_wrappers' => 'array|false',
'stream_is_local' => 'bool',
'stream_register_wrapper' => 'bool',
'stream_resolve_include_path' => 'false|string',
'stream_select' => 'false|int',
'stream_set_blocking' => 'bool',
'stream_set_chunk_size' => 'false|int',
'stream_set_read_buffer' => 'false|int',
'stream_set_timeout' => 'bool',
'stream_set_write_buffer' => 'false|int',
'stream_socket_accept' => 'false|resource',
'stream_socket_client' => 'false|resource',
'stream_socket_enable_crypto' => 'bool|int',
'stream_socket_get_name' => 'false|string',
'stream_socket_pair' => 'array|false',
'stream_socket_recvfrom' => 'false|string',
'stream_socket_sendto' => 'false|int',
'stream_socket_server' => 'false|resource',
'stream_socket_shutdown' => 'bool',
'stream_supports_lock' => 'bool',
'stream_wrapper_register' => 'bool',
'stream_wrapper_restore' => 'bool',
'stream_wrapper_unregister' => 'bool',
'strftime' => 'false|string',
'stripos' => 'false|int',
'stristr' => 'false|string',
'strncasecmp' => 'false|int',
'strncmp' => 'false|int',
'strpbrk' => 'false|string',
'strpos' => 'false|int',
'strptime' => 'array|false',
'strrchr' => 'false|string',
'strripos' => 'false|int',
'strrpos' => 'false|int',
'strspn' => 'false|int',
'strstr' => 'false|string',
'strtok' => 'false|string',
'strtotime' => 'false|int',
'strtr' => 'false|string',
'substr' => 'false|string',
'substr_compare' => 'false|int',
'substr_count' => 'false|int',
'substr_replace' => 'array|false|string',
'symlink' => 'bool',
'sys_getloadavg' => 'array|false',
'syslog' => 'bool',
'system' => 'false|string',
'tempnam' => 'false|string',
'textdomain' => '?false|?string',
'time_nanosleep' => 'array|bool',
'time_sleep_until' => 'bool',
'timezone_abbreviations_list' => 'array',
'timezone_identifiers_list' => 'array|false',
'timezone_location_get' => 'array|false',
'timezone_name_from_abbr' => 'false|string',
'timezone_name_get' => 'false|string',
'timezone_offset_get' => 'false|int',
'timezone_open' => 'false|object',
'timezone_transitions_get' => 'array|false',
'tmpfile' => 'false|resource',
'touch' => 'bool',
'trait_exists' => 'bool',
'trigger_error' => 'bool',
'uasort' => 'bool',
'uksort' => 'bool',
'umask' => 'false|int',
'unlink' => 'bool',
'unpack' => 'array|false',
'user_error' => 'bool',
'usleep' => '?false',
'usort' => 'bool',
'var_export' => '?string',
'version_compare' => '?bool|?int',
'vfprintf' => 'false|int',
'vprintf' => 'false|int',
'vsprintf' => 'false|string',
'wordwrap' => 'false|string',
'xml_error_string' => '?string',
'xml_get_current_byte_index' => '?false|?int',
'xml_get_current_column_number' => '?false|?int',
'xml_get_current_line_number' => '?false|?int',
'xml_get_error_code' => '?false|?int',
'xml_parse' => '?false|?int',
'xml_parse_into_struct' => '?false|?int',
'xml_parser_create' => 'false|resource',
'xml_parser_create_ns' => 'false|resource',
'xml_parser_free' => '?bool',
'xml_parser_get_option' => '?false|?int|?string',
'xml_parser_set_option' => '?bool',
'xml_set_character_data_handler' => '?bool',
'xml_set_default_handler' => '?bool',
'xml_set_element_handler' => '?bool',
'xml_set_end_namespace_decl_handler' => '?bool',
'xml_set_external_entity_ref_handler' => '?bool',
'xml_set_notation_decl_handler' => '?bool',
'xml_set_object' => '?bool',
'xml_set_processing_instruction_handler' => '?bool',
'xml_set_start_namespace_decl_handler' => '?bool',
'xml_set_unparsed_entity_decl_handler' => '?bool',
'zlib_decode' => '?false|?string',
'zlib_encode' => '?false|?string',
'zlib_get_coding_type' => 'false|string',
];