<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The billing duration. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, and 12.
     *
     * @example 29
     *
     * @var int
     */
    public $duration;

    /**
     * @description The unit of the billing duration. Valid values: Month and Year.
     *
     * @example ""
     *
     * @var string
     */
    public $pricingCycle;
    protected $_name = [
        'autoRenew'    => 'autoRenew',
        'duration'     => 'duration',
        'pricingCycle' => 'pricingCycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->pricingCycle) {
            $res['pricingCycle'] = $this->pricingCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['pricingCycle'])) {
            $model->pricingCycle = $map['pricingCycle'];
        }

        return $model;
    }
}
