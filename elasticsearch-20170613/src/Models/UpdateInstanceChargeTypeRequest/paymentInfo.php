<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceChargeTypeRequest;

use AlibabaCloud\Dara\Model;

class paymentInfo extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $pricingCycle;
    protected $_name = [
        'duration' => 'duration',
        'pricingCycle' => 'pricingCycle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->pricingCycle) {
            $res['pricingCycle'] = $this->pricingCycle;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['pricingCycle'])) {
            $model->pricingCycle = $map['pricingCycle'];
        }

        return $model;
    }
}
