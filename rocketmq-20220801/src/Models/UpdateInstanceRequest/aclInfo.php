<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest;

use AlibabaCloud\Tea\Model;

class aclInfo extends Model
{
    /**
     * @description The authentication type of the instance.
     *
     * @var string[]
     */
    public $aclTypes;

    /**
     * @description Indicates whether the authentication-free in VPCs feature is enabled.
     * - false
     * @var bool
     */
    public $defaultVpcAuthFree;
    protected $_name = [
        'aclTypes'           => 'aclTypes',
        'defaultVpcAuthFree' => 'defaultVpcAuthFree',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclTypes) {
            $res['aclTypes'] = $this->aclTypes;
        }
        if (null !== $this->defaultVpcAuthFree) {
            $res['defaultVpcAuthFree'] = $this->defaultVpcAuthFree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclTypes'])) {
            if (!empty($map['aclTypes'])) {
                $model->aclTypes = $map['aclTypes'];
            }
        }
        if (isset($map['defaultVpcAuthFree'])) {
            $model->defaultVpcAuthFree = $map['defaultVpcAuthFree'];
        }

        return $model;
    }
}
