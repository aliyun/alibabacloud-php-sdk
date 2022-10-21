<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig;

use AlibabaCloud\Tea\Model;

class instanceTypeList extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
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
     * @return instanceTypeList
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
