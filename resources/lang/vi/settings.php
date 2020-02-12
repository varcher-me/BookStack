<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Cài đặt',
    'settings_save' => 'Lưu Cài đặt',
    'settings_save_success' => 'Đã lưu cài đặt',

    // App Settings
    'app_customization' => 'Tuỳ biến',
    'app_features_security' => 'Chức năng & Bảo mật',
    'app_name' => 'Tên Ứng dụng',
    'app_name_desc' => 'Tên này được hiển thị trong header và trong bất kì email hệ thống được gửi.',
    'app_name_header' => 'Hiển thị tên trong header',
    'app_public_access' => 'Quyền truy cập công khai',
    'app_public_access_desc' => 'Bật tùy chọn này sẽ cho phép khách, người không cần đăng nhập, truy cập đến nội dung bản BookStack của bạn.',
    'app_public_access_desc_guest' => 'Quyền truy cập của khách có thể được điều khiển thông qua người dùng "Guest".',
    'app_public_access_toggle' => 'Cho phép truy cập công khai',
    'app_public_viewing' => 'Cho phép xem công khai?',
    'app_secure_images' => 'Bảo mật tốt hơn cho việc tải lên ảnh',
    'app_secure_images_toggle' => 'Bật bảo mật tốt hơn cho các ảnh được tải lên',
    'app_secure_images_desc' => 'Vì lí do hiệu năng, tất cả các ảnh đều được truy cập công khai. Tùy chọn này thêm một chuỗi ngẫu nhiên, khó đoán vào phần liên kết đến ảnh. Đảm bảo rằng tránh việc index thư mục để ngăn chặn việc truy cập đến ảnh một cách dễ dàng.',
    'app_editor' => 'Soạn thảo Trang',
    'app_editor_desc' => 'Chọn trình soạn thảo nào sẽ được sử dụng bởi tất cả người dùng để chỉnh sửa trang.',
    'app_custom_html' => 'Tùy chọn nội dung Head HTML',
    'app_custom_html_desc' => 'Bất cứ nội dung nào được thêm vào đây sẽ được đưa vào phần cuối của khu vực <head> của mỗi trang. Tiện cho việc ghi đè style hoặc thêm mã phân tích dữ liệu.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Logo Ứng dụng',
    'app_logo_desc' => 'Ảnh này nên có kích thước chiều cao là 43px. <br>Ảnh lớn sẽ được điều chỉnh tỷ lệ xuống.',
    'app_primary_color' => 'Màu chủ đạo của Ứng dụng',
    'app_primary_color_desc' => 'Đặt màu chủ đạo của ứng dụng kể cả banner, các nút và các đường dẫn liên kết.',
    'app_homepage' => 'Trang chủ Ứng dụng',
    'app_homepage_desc' => 'Select a view to show on the homepage instead of the default view. Page permissions are ignored for selected pages.',
    'app_homepage_select' => 'Chọn một trang',
    'app_disable_comments' => 'Tắt bình luận',
    'app_disable_comments_toggle' => 'Tắt bình luận',
    'app_disable_comments_desc' => 'Tắt các bình luận trên tất cả các trang của ứng dụng. <br> Các bình luận đã tồn tại sẽ không được hiển thị.',

    // Color settings
    'content_colors' => 'Màu của phần Nội dung',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Shelf Color',
    'book_color' => 'Book Color',
    'chapter_color' => 'Chapter Color',
    'page_color' => 'Page Color',
    'page_draft_color' => 'Page Draft Color',

    // Registration Settings
    'reg_settings' => 'Đăng ký',
    'reg_enable' => 'Bật Đăng ký',
    'reg_enable_toggle' => 'Bật đăng ký',
    'reg_enable_desc' => 'Khi đăng ký được bật người dùng sẽ có thể tự đăng ký để trở thành người dùng của ứng dụng. Khi đăng kí người dùng sẽ được cấp một quyền sử dụng mặc định.',
    'reg_default_role' => 'Quyền người dùng sử dụng mặc định sau khi đăng kí',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Xác nhận Email',
    'reg_email_confirmation_toggle' => 'Yêu cầu xác nhận email',
    'reg_confirm_email_desc' => 'If domain restriction is used then email confirmation will be required and this option will be ignored.',
    'reg_confirm_restrict_domain' => 'Giới hạn tên miền',
    'reg_confirm_restrict_domain_desc' => 'Enter a comma separated list of email domains you would like to restrict registration to. Users will be sent an email to confirm their address before being allowed to interact with the application. <br> Note that users will be able to change their email addresses after successful registration.',
    'reg_confirm_restrict_domain_placeholder' => 'Không có giới hạn nào được thiết lập',

    // Maintenance settings
    'maint' => 'Maintenance',
    'maint_image_cleanup' => 'Cleanup Images',
    'maint_image_cleanup_desc' => "Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.",
    'maint_image_cleanup_ignore_revisions' => 'Ignore images in revisions',
    'maint_image_cleanup_run' => 'Run Cleanup',
    'maint_image_cleanup_warning' => ':count potentially unused images were found. Are you sure you want to delete these images?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'No unused images found, Nothing deleted!',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',

    // Role Settings
    'roles' => 'Roles',
    'role_user_roles' => 'User Roles',
    'role_create' => 'Create New Role',
    'role_create_success' => 'Role successfully created',
    'role_delete' => 'Delete Role',
    'role_delete_confirm' => 'This will delete the role with the name \':roleName\'.',
    'role_delete_users_assigned' => 'This role has :userCount users assigned to it. If you would like to migrate the users from this role select a new role below.',
    'role_delete_no_migration' => "Don't migrate users",
    'role_delete_sure' => 'Are you sure you want to delete this role?',
    'role_delete_success' => 'Role successfully deleted',
    'role_edit' => 'Edit Role',
    'role_details' => 'Role Details',
    'role_name' => 'Role Name',
    'role_desc' => 'Short Description of Role',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'System Permissions',
    'role_manage_users' => 'Manage users',
    'role_manage_roles' => 'Manage roles & role permissions',
    'role_manage_entity_permissions' => 'Manage all book, chapter & page permissions',
    'role_manage_own_entity_permissions' => 'Manage permissions on own book, chapter & pages',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Manage app settings',
    'role_asset' => 'Asset Permissions',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_all' => 'All',
    'role_own' => 'Own',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'Save Role',
    'role_update_success' => 'Role successfully updated',
    'role_users' => 'Users in this role',
    'role_users_none' => 'No users are currently assigned to this role',

    // Users
    'users' => 'Users',
    'user_profile' => 'User Profile',
    'users_add_new' => 'Add New User',
    'users_search' => 'Search Users',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'User Roles',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Only fill the below if you would like to change your password.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Delete User',
    'users_delete_named' => 'Delete user :userName',
    'users_delete_warning' => 'This will fully delete this user with the name \':userName\' from the system.',
    'users_delete_confirm' => 'Are you sure you want to delete this user?',
    'users_delete_success' => 'Users successfully removed',
    'users_edit' => 'Edit User',
    'users_edit_profile' => 'Edit Profile',
    'users_edit_success' => 'User successfully updated',
    'users_avatar' => 'User Avatar',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Preferred Language',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Social Accounts',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Connect Account',
    'users_social_disconnect' => 'Disconnect Account',
    'users_social_connected' => ':socialAccount account was successfully attached to your profile.',
    'users_social_disconnected' => ':socialAccount account was successfully disconnected from your profile.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID"" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Created :timeAgo',
    'user_api_token_updated' => 'Token Updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
