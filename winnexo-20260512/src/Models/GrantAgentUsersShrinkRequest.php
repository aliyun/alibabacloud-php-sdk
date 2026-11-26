<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GrantAgentUsersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var string
     */
    public $operatingObjectName;

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
    public $permissionsShrink;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userGroupIdsShrink;

    /**
     * @var string
     */
    public $userIdsShrink;
    protected $_name = [
        'appToken' => 'appToken',
        'expireDate' => 'expireDate',
        'operatingObjectName' => 'operatingObjectName',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'permissionsShrink' => 'permissions',
        'tenantId' => 'tenantId',
        'userGroupIdsShrink' => 'userGroupIds',
        'userIdsShrink' => 'userIds',
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

        if (null !== $this->expireDate) {
            $res['expireDate'] = $this->expireDate;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->permissionsShrink) {
            $res['permissions'] = $this->permissionsShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupIdsShrink) {
            $res['userGroupIds'] = $this->userGroupIdsShrink;
        }

        if (null !== $this->userIdsShrink) {
            $res['userIds'] = $this->userIdsShrink;
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

        if (isset($map['expireDate'])) {
            $model->expireDate = $map['expireDate'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['permissions'])) {
            $model->permissionsShrink = $map['permissions'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupIds'])) {
            $model->userGroupIdsShrink = $map['userGroupIds'];
        }

        if (isset($map['userIds'])) {
            $model->userIdsShrink = $map['userIds'];
        }

        return $model;
    }
}
