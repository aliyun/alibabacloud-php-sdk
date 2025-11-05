<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListResourceGroupMetricDataRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'endTime' => 'EndTime',
        'length' => 'Length',
        'metricName' => 'MetricName',
        'nextToken' => 'NextToken',
        'period' => 'Period',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
