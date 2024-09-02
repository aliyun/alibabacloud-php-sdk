<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\AppGroup;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example Month
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
