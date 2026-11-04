<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AssignUsersResponseBody\data;

use AlibabaCloud\Dara\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $primary;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'primary' => 'Primary',
        'ramId' => 'RamId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }

        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
