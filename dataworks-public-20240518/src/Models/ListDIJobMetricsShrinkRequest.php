<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDIJobMetricsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $DIJobId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $metricNameShrink;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'DIJobId'          => 'DIJobId',
        'endTime'          => 'EndTime',
        'metricNameShrink' => 'MetricName',
        'startTime'        => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->metricNameShrink) {
            $res['MetricName'] = $this->metricNameShrink;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MetricName'])) {
            $model->metricNameShrink = $map['MetricName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
