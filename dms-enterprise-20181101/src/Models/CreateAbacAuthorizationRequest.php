<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateAbacAuthorizationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @description This parameter is required.
     *
     * @example 12****
     *
     * @var int
     */
    public $policyId;

    /**
     * @example 31****
     *
     * @var int
     */
    public $roleId;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @example 51****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'identityType' => 'IdentityType',
        'policyId'     => 'PolicyId',
        'roleId'       => 'RoleId',
        'tid'          => 'Tid',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAbacAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
