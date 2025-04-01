<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\sessionStatistics;

use AlibabaCloud\Dara\Model;

class userStatistics extends Model
{
    /**
     * @var int
     */
    public $activeCount;

    /**
     * @var string
     */
    public $metricValue;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'activeCount' => 'ActiveCount',
        'metricValue' => 'MetricValue',
        'totalCount' => 'TotalCount',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }

        if (null !== $this->metricValue) {
            $res['MetricValue'] = $this->metricValue;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }

        if (isset($map['MetricValue'])) {
            $model->metricValue = $map['MetricValue'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
