<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEventTrendsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEventTrendsResponseBody\points\riskCounts;

class points extends Model
{
    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var riskCounts
     */
    public $riskCounts;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'eventCount' => 'EventCount',
        'riskCounts' => 'RiskCounts',
        'time' => 'Time',
    ];

    public function validate()
    {
        if (null !== $this->riskCounts) {
            $this->riskCounts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }

        if (null !== $this->riskCounts) {
            $res['RiskCounts'] = null !== $this->riskCounts ? $this->riskCounts->toArray($noStream) : $this->riskCounts;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }

        if (isset($map['RiskCounts'])) {
            $model->riskCounts = riskCounts::fromMap($map['RiskCounts']);
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
