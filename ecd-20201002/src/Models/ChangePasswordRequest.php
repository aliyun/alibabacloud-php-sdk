<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class ChangePasswordRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $loginToken;
    /**
     * @var string
     */
    public $newPassword;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var string
     */
    public $oldPassword;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId'     => 'ClientId',
        'endUserId'    => 'EndUserId',
        'loginToken'   => 'LoginToken',
        'newPassword'  => 'NewPassword',
        'officeSiteId' => 'OfficeSiteId',
        'oldPassword'  => 'OldPassword',
        'regionId'     => 'RegionId',
        'sessionId'    => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->oldPassword) {
            $res['OldPassword'] = $this->oldPassword;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OldPassword'])) {
            $model->oldPassword = $map['OldPassword'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
