<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class ApplyTokenRequest extends Model
{
    /**
     * @var string
     */
    public $actions;
    /**
     * @var int
     */
    public $expireTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $resources;
    protected $_name = [
        'actions'    => 'Actions',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'resources'  => 'Resources',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
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
        if (isset($map['Actions'])) {
            $model->actions = $map['Actions'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
