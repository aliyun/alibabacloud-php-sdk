<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class ChangePasswordRequest extends Model
{
    /**
     * @example 42f6645a-9c3c-4772-be2a-cc5f5732****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example liming
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example 67436290
     *
     * @var string
     */
    public $newPassword;

    /**
     * @example cn-shanghai+dir-227468****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example 12345678
     *
     * @var string
     */
    public $oldPassword;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ChangePasswordRequest
     */
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
