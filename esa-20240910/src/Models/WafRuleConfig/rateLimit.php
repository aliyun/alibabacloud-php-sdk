<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRatelimitCharacteristics;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\rateLimit\threshold;

class rateLimit extends Model
{
    /**
     * @var WafRatelimitCharacteristics
     */
    public $characteristics;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var bool
     */
    public $onHit;

    /**
     * @var int
     */
    public $TTL;

    /**
     * @var threshold
     */
    public $threshold;
    protected $_name = [
        'characteristics' => 'Characteristics',
        'interval' => 'Interval',
        'onHit' => 'OnHit',
        'TTL' => 'TTL',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        if (null !== $this->characteristics) {
            $this->characteristics->validate();
        }
        if (null !== $this->threshold) {
            $this->threshold->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->characteristics) {
            $res['Characteristics'] = null !== $this->characteristics ? $this->characteristics->toArray($noStream) : $this->characteristics;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->onHit) {
            $res['OnHit'] = $this->onHit;
        }

        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = null !== $this->threshold ? $this->threshold->toArray($noStream) : $this->threshold;
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
        if (isset($map['Characteristics'])) {
            $model->characteristics = WafRatelimitCharacteristics::fromMap($map['Characteristics']);
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['OnHit'])) {
            $model->onHit = $map['OnHit'];
        }

        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = threshold::fromMap($map['Threshold']);
        }

        return $model;
    }
}
