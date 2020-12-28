<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups;

use AlibabaCloud\Tea\Model;

class targetCapacitySpecification extends Model
{
    /**
     * @var float
     */
    public $spotTargetCapacity;

    /**
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @var float
     */
    public $totalTargetCapacity;

    /**
     * @var float
     */
    public $payAsYouGoTargetCapacity;
    protected $_name = [
        'spotTargetCapacity'        => 'SpotTargetCapacity',
        'defaultTargetCapacityType' => 'DefaultTargetCapacityType',
        'totalTargetCapacity'       => 'TotalTargetCapacity',
        'payAsYouGoTargetCapacity'  => 'PayAsYouGoTargetCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetCapacitySpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }

        return $model;
    }
}
