<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AccountAccessTokenResponse extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $defaultDriveId;

    /**
     * @var string
     */
    public $defaultSboxDriveId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var LinkInfo[]
     */
    public $existLink;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var bool
     */
    public $isFirstLogin;

    /**
     * @var bool
     */
    public $needLink;

    /**
     * @var bool
     */
    public $needRpVerify;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $pathStatus;

    /**
     * @var bool
     */
    public $pinSetup;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tokenType;

    /**
     * @var string[]
     */
    public $userData;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'accessToken'        => 'access_token',
        'avatar'             => 'avatar',
        'defaultDriveId'     => 'default_drive_id',
        'defaultSboxDriveId' => 'default_sbox_drive_id',
        'deviceId'           => 'device_id',
        'deviceName'         => 'device_name',
        'domainId'           => 'domain_id',
        'existLink'          => 'exist_link',
        'expireTime'         => 'expire_time',
        'expiresIn'          => 'expires_in',
        'isFirstLogin'       => 'is_first_login',
        'needLink'           => 'need_link',
        'needRpVerify'       => 'need_rp_verify',
        'nickName'           => 'nick_name',
        'pathStatus'         => 'path_status',
        'pinSetup'           => 'pin_setup',
        'refreshToken'       => 'refresh_token',
        'role'               => 'role',
        'state'              => 'state',
        'status'             => 'status',
        'tokenType'          => 'token_type',
        'userData'           => 'user_data',
        'userId'             => 'user_id',
        'userName'           => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->defaultDriveId) {
            $res['default_drive_id'] = $this->defaultDriveId;
        }
        if (null !== $this->defaultSboxDriveId) {
            $res['default_sbox_drive_id'] = $this->defaultSboxDriveId;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['device_name'] = $this->deviceName;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->existLink) {
            $res['exist_link'] = [];
            if (null !== $this->existLink && \is_array($this->existLink)) {
                $n = 0;
                foreach ($this->existLink as $item) {
                    $res['exist_link'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }
        if (null !== $this->isFirstLogin) {
            $res['is_first_login'] = $this->isFirstLogin;
        }
        if (null !== $this->needLink) {
            $res['need_link'] = $this->needLink;
        }
        if (null !== $this->needRpVerify) {
            $res['need_rp_verify'] = $this->needRpVerify;
        }
        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }
        if (null !== $this->pathStatus) {
            $res['path_status'] = $this->pathStatus;
        }
        if (null !== $this->pinSetup) {
            $res['pin_setup'] = $this->pinSetup;
        }
        if (null !== $this->refreshToken) {
            $res['refresh_token'] = $this->refreshToken;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tokenType) {
            $res['token_type'] = $this->tokenType;
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AccountAccessTokenResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access_token'])) {
            $model->accessToken = $map['access_token'];
        }
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['default_drive_id'])) {
            $model->defaultDriveId = $map['default_drive_id'];
        }
        if (isset($map['default_sbox_drive_id'])) {
            $model->defaultSboxDriveId = $map['default_sbox_drive_id'];
        }
        if (isset($map['device_id'])) {
            $model->deviceId = $map['device_id'];
        }
        if (isset($map['device_name'])) {
            $model->deviceName = $map['device_name'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['exist_link'])) {
            if (!empty($map['exist_link'])) {
                $model->existLink = [];
                $n                = 0;
                foreach ($map['exist_link'] as $item) {
                    $model->existLink[$n++] = null !== $item ? LinkInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['expire_time'])) {
            $model->expireTime = $map['expire_time'];
        }
        if (isset($map['expires_in'])) {
            $model->expiresIn = $map['expires_in'];
        }
        if (isset($map['is_first_login'])) {
            $model->isFirstLogin = $map['is_first_login'];
        }
        if (isset($map['need_link'])) {
            $model->needLink = $map['need_link'];
        }
        if (isset($map['need_rp_verify'])) {
            $model->needRpVerify = $map['need_rp_verify'];
        }
        if (isset($map['nick_name'])) {
            $model->nickName = $map['nick_name'];
        }
        if (isset($map['path_status'])) {
            $model->pathStatus = $map['path_status'];
        }
        if (isset($map['pin_setup'])) {
            $model->pinSetup = $map['pin_setup'];
        }
        if (isset($map['refresh_token'])) {
            $model->refreshToken = $map['refresh_token'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['token_type'])) {
            $model->tokenType = $map['token_type'];
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
