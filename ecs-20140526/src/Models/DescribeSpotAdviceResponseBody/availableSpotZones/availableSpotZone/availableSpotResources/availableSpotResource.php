<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone\availableSpotResources;

use AlibabaCloud\Tea\Model;

class availableSpotResource extends Model
{
    /**
     * @var int
     */
    public $averageSpotDiscount;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $interruptRateDesc;

    /**
     * @var float
     */
    public $interruptionRate;
    protected $_name = [
        'averageSpotDiscount' => 'AverageSpotDiscount',
        'instanceType'        => 'InstanceType',
        'interruptRateDesc'   => 'InterruptRateDesc',
        'interruptionRate'    => 'InterruptionRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageSpotDiscount) {
            $res['AverageSpotDiscount'] = $this->averageSpotDiscount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->interruptRateDesc) {
            $res['InterruptRateDesc'] = $this->interruptRateDesc;
        }
        if (null !== $this->interruptionRate) {
            $res['InterruptionRate'] = $this->interruptionRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpotResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageSpotDiscount'])) {
            $model->averageSpotDiscount = $map['AverageSpotDiscount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InterruptRateDesc'])) {
            $model->interruptRateDesc = $map['InterruptRateDesc'];
        }
        if (isset($map['InterruptionRate'])) {
            $model->interruptionRate = $map['InterruptionRate'];
        }

        return $model;
    }
}
