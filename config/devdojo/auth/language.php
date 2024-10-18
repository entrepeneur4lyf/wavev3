<?php

/*
 * Branding configs for your application
 */
return [
    'login' => [
        'page_title' => 'Sign in',
        'headline' => 'Sign in',
        'subheadline' => 'Login to your account below',
        'show_subheadline' => false,
        'email_address' => 'Email Address',
        'password' => 'Password',
        'remember_me' => 'Remember me',
        'edit' => 'Edit',
        'button' => 'Continue',
        'forget_password' => 'Forget your password?',
        'dont_have_an_account' => "Don't have an account?",
        'sign_up' => 'Sign up',
        'social_auth_authenticated_message' => 'You have been authenticated via __social_providers_list__. Please login to that network below.',
        'change_email' => 'Change Email',
    ],
    'register' => [
        'page_title' => 'Sign up',
        'headline' => 'Sign up',
        'subheadline' => 'Register for your free account below.',
        'show_subheadline' => false,
        'name' => 'Name',
        'email_address' => 'Email Address',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'already_have_an_account' => 'Already have an account?',
        'sign_in' => 'Sign in',
        'button' => 'Continue',
    ],
    'verify' => [
        'page_title' => 'Verify Your Account',
        'headline' => 'Verify your email address',
        'subheadline' => 'Before you can proceed you must verify your email.',
        'show_subheadline' => false,
        'description' => 'Before proceeding, please check your email for a verification link. If you did not receive the email,',
        'new_request_link' => 'click here to request another',
        'new_link_sent' => 'A new link has been sent to your email address.',
        'or' => 'Or',
        'logout' => 'click here to logout',
    ],
    'passwordConfirm' => [
        'page_title' => 'Confirm Your Password',
        'headline' => 'Confirm Password',
        'subheadline' => 'Be sure to confirm your password below',
        'show_subheadline' => false,
        'password' => 'Password',
        'button' => 'Confirm password',
    ],
    'passwordResetRequest' => [
        'page_title' => 'Request a Password Reset',
        'headline' => 'Reset password',
        'subheadline' => 'Enter your email below to reset your password',
        'show_subheadline' => false,
        'email' => 'Email Address',
        'button' => 'Send password reset link',
        'or' => 'or',
        'return_to_login' => 'return to login',
    ],
    'passwordReset' => [
        'page_title' => 'Reset Your Password',
        'headline' => 'Reset Password',
        'subheadline' => 'Reset your password below',
        'show_subheadline' => false,
        'email' => 'Email Address',
        'password' => 'Password',
        'password_confirm' => 'Confirm Password',
        'button' => 'Reset Password',
    ],
    'twoFactorChallenge' => [
        'page_title' => 'Two Factor Challenge',
        'headline_auth' => 'Authentication Code',
        'subheadline_auth' => 'Enter the authentication code provided by your authenticator application.',
        'show_subheadline_auth' => false,
        'headline_recovery' => 'Recovery Code',
        'subheadline_recovery' => 'Please confirm access to your account by entering one of your emergency recovery codes.',
        'show_subheadline_recovery' => false,
    ],

];