<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class ApplyTokenRequest extends Model
{
    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $actions;
    protected $_name = [
        'resources'  => 'Resources',
        'instanceId' => 'InstanceId',
        'expireTime' => 'ExpireTime',
        'actions'    => 'Actions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Actions'])) {
            $model->actions = $map['Actions'];
        }

        return $model;
    }
}
