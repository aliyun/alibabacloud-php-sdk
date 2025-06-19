<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDIJobMetricsRequest extends Model
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
     * @var string[]
     */
    public $metricName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'endTime' => 'EndTime',
        'metricName' => 'MetricName',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->metricName)) {
            Model::validateArray($this->metricName);
        }
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

        if (null !== $this->metricName) {
            if (\is_array($this->metricName)) {
                $res['MetricName'] = [];
                $n1 = 0;
                foreach ($this->metricName as $item1) {
                    $res['MetricName'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['MetricName'])) {
                $model->metricName = [];
                $n1 = 0;
                foreach ($map['MetricName'] as $item1) {
                    $model->metricName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
