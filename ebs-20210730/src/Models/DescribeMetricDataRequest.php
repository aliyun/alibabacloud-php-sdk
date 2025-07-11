<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class DescribeMetricDataRequest extends Model
{
    /**
     * @var string
     */
    public $aggreOps;

    /**
     * @var string
     */
    public $aggreOverLineOps;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $groupByLabels;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'aggreOps' => 'AggreOps',
        'aggreOverLineOps' => 'AggreOverLineOps',
        'dimensions' => 'Dimensions',
        'endTime' => 'EndTime',
        'groupByLabels' => 'GroupByLabels',
        'metricName' => 'MetricName',
        'period' => 'Period',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->groupByLabels)) {
            Model::validateArray($this->groupByLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggreOps) {
            $res['AggreOps'] = $this->aggreOps;
        }

        if (null !== $this->aggreOverLineOps) {
            $res['AggreOverLineOps'] = $this->aggreOverLineOps;
        }

        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupByLabels) {
            if (\is_array($this->groupByLabels)) {
                $res['GroupByLabels'] = [];
                $n1 = 0;
                foreach ($this->groupByLabels as $item1) {
                    $res['GroupByLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AggreOps'])) {
            $model->aggreOps = $map['AggreOps'];
        }

        if (isset($map['AggreOverLineOps'])) {
            $model->aggreOverLineOps = $map['AggreOverLineOps'];
        }

        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupByLabels'])) {
            if (!empty($map['GroupByLabels'])) {
                $model->groupByLabels = [];
                $n1 = 0;
                foreach ($map['GroupByLabels'] as $item1) {
                    $model->groupByLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
