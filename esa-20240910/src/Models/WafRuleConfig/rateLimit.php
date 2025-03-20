<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\rateLimit\threshold;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleMatch2;
use AlibabaCloud\Tea\Model;

class rateLimit extends Model
{
    /**
     * @var WafRuleMatch2
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->characteristics) {
            $res['Characteristics'] = null !== $this->characteristics ? $this->characteristics->toMap() : null;
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
            $res['Threshold'] = null !== $this->threshold ? $this->threshold->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rateLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Characteristics'])) {
            $model->characteristics = WafRuleMatch2::fromMap($map['Characteristics']);
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
