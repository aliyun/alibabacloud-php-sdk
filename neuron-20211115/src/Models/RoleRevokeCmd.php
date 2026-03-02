<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class RoleRevokeCmd extends Model
{
    /**
     * @var string
     */
    public $authorizerId;

    /**
     * @var string
     */
    public $authorizerType;

    /**
     * @var int
     */
    public $roleId;
    protected $_name = [
        'authorizerId' => 'authorizerId',
        'authorizerType' => 'authorizerType',
        'roleId' => 'roleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizerId) {
            $res['authorizerId'] = $this->authorizerId;
        }

        if (null !== $this->authorizerType) {
            $res['authorizerType'] = $this->authorizerType;
        }

        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
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
        if (isset($map['authorizerId'])) {
            $model->authorizerId = $map['authorizerId'];
        }

        if (isset($map['authorizerType'])) {
            $model->authorizerType = $map['authorizerType'];
        }

        if (isset($map['roleId'])) {
            $model->roleId = $map['roleId'];
        }

        return $model;
    }
}
