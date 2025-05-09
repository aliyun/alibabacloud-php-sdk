<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateAbacAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $identityType;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var int
     */
    public $roleId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'identityType' => 'IdentityType',
        'policyId' => 'PolicyId',
        'roleId' => 'RoleId',
        'tid' => 'Tid',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
