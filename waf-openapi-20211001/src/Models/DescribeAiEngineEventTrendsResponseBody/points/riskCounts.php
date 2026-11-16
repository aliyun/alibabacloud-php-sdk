<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEventTrendsResponseBody\points;

use AlibabaCloud\Dara\Model;

class riskCounts extends Model
{
    /**
     * @var int
     */
    public $critical;

    /**
     * @var int
     */
    public $high;

    /**
     * @var int
     */
    public $low;

    /**
     * @var int
     */
    public $medium;
    protected $_name = [
        'critical' => 'Critical',
        'high' => 'High',
        'low' => 'Low',
        'medium' => 'Medium',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = $this->critical;
        }

        if (null !== $this->high) {
            $res['High'] = $this->high;
        }

        if (null !== $this->low) {
            $res['Low'] = $this->low;
        }

        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
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
        if (isset($map['Critical'])) {
            $model->critical = $map['Critical'];
        }

        if (isset($map['High'])) {
            $model->high = $map['High'];
        }

        if (isset($map['Low'])) {
            $model->low = $map['Low'];
        }

        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }

        return $model;
    }
}
