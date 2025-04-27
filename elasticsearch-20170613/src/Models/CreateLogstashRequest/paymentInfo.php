<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateLogstashRequest;

use AlibabaCloud\Dara\Model;

class paymentInfo extends Model
{
    /**
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $isAutoRenew;

    /**
     * @var string
     */
    public $pricingCycle;
    protected $_name = [
        'autoRenewDuration' => 'autoRenewDuration',
        'duration' => 'duration',
        'isAutoRenew' => 'isAutoRenew',
        'pricingCycle' => 'pricingCycle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewDuration) {
            $res['autoRenewDuration'] = $this->autoRenewDuration;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->isAutoRenew) {
            $res['isAutoRenew'] = $this->isAutoRenew;
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
        if (isset($map['autoRenewDuration'])) {
            $model->autoRenewDuration = $map['autoRenewDuration'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['isAutoRenew'])) {
            $model->isAutoRenew = $map['isAutoRenew'];
        }

        if (isset($map['pricingCycle'])) {
            $model->pricingCycle = $map['pricingCycle'];
        }

        return $model;
    }
}
