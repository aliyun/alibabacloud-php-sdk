<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class GrantedRoleListQuery extends Model
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
     * @var string
     */
    public $name;
    protected $_name = [
        'authorizerId' => 'authorizerId',
        'authorizerType' => 'authorizerType',
        'name' => 'name',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
