<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAutoProvisioningGroupCapacitiesResponseBody\capacities;

use AlibabaCloud\Tea\Model;

class capacity extends Model
{
    /**
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @var string
     */
    public $payAsYouGoCapacity;

    /**
     * @var string
     */
    public $spotCapacity;

    /**
     * @var string
     */
    public $totalCapacity;
    protected $_name = [
        'autoProvisioningGroupId' => 'AutoProvisioningGroupId',
        'payAsYouGoCapacity'      => 'PayAsYouGoCapacity',
        'spotCapacity'            => 'SpotCapacity',
        'totalCapacity'           => 'TotalCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->payAsYouGoCapacity) {
            $res['PayAsYouGoCapacity'] = $this->payAsYouGoCapacity;
        }
        if (null !== $this->spotCapacity) {
            $res['SpotCapacity'] = $this->spotCapacity;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }
        if (isset($map['PayAsYouGoCapacity'])) {
            $model->payAsYouGoCapacity = $map['PayAsYouGoCapacity'];
        }
        if (isset($map['SpotCapacity'])) {
            $model->spotCapacity = $map['SpotCapacity'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }

        return $model;
    }
}
