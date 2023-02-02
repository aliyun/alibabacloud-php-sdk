<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues\queueInfo\spotInstanceTypes;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 0.062
     *
     * @var float
     */
    public $spotPriceLimit;
    protected $_name = [
        'instanceType'   => 'InstanceType',
        'spotPriceLimit' => 'SpotPriceLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }

        return $model;
    }
}
