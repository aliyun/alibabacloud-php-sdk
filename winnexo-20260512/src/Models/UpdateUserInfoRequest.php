<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $languagePreference;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $offering;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var string
     */
    public $profileRoleInfo;

    /**
     * @var string
     */
    public $selfIntroduction;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'appToken' => 'appToken',
        'avatar' => 'avatar',
        'languagePreference' => 'languagePreference',
        'name' => 'name',
        'offering' => 'offering',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'profileRoleInfo' => 'profileRoleInfo',
        'selfIntroduction' => 'selfIntroduction',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->languagePreference) {
            $res['languagePreference'] = $this->languagePreference;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->offering) {
            $res['offering'] = $this->offering;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->profileRoleInfo) {
            $res['profileRoleInfo'] = $this->profileRoleInfo;
        }

        if (null !== $this->selfIntroduction) {
            $res['selfIntroduction'] = $this->selfIntroduction;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['languagePreference'])) {
            $model->languagePreference = $map['languagePreference'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['offering'])) {
            $model->offering = $map['offering'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['profileRoleInfo'])) {
            $model->profileRoleInfo = $map['profileRoleInfo'];
        }

        if (isset($map['selfIntroduction'])) {
            $model->selfIntroduction = $map['selfIntroduction'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
