<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Dara\Model;

class capacitySpecification extends Model
{
    /**
     * @var float
     */
    public $payAsYouGoCapacity;

    /**
     * @var float
     */
    public $prePaidCapacity;

    /**
     * @var float
     */
    public $spotCapacity;

    /**
     * @var float
     */
    public $totalCapacity;
    protected $_name = [
        'payAsYouGoCapacity' => 'PayAsYouGoCapacity',
        'prePaidCapacity' => 'PrePaidCapacity',
        'spotCapacity' => 'SpotCapacity',
        'totalCapacity' => 'TotalCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->payAsYouGoCapacity) {
            $res['PayAsYouGoCapacity'] = $this->payAsYouGoCapacity;
        }

        if (null !== $this->prePaidCapacity) {
            $res['PrePaidCapacity'] = $this->prePaidCapacity;
        }

        if (null !== $this->spotCapacity) {
            $res['SpotCapacity'] = $this->spotCapacity;
        }

        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
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
        if (isset($map['PayAsYouGoCapacity'])) {
            $model->payAsYouGoCapacity = $map['PayAsYouGoCapacity'];
        }

        if (isset($map['PrePaidCapacity'])) {
            $model->prePaidCapacity = $map['PrePaidCapacity'];
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
