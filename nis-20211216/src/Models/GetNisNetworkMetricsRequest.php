<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkMetricsRequest\dimensions;

class GetNisNetworkMetricsRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scanBy;

    /**
     * @var int
     */
    public $stepMinutes;

    /**
     * @var bool
     */
    public $useCrossAccount;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'beginTime' => 'BeginTime',
        'dimensions' => 'Dimensions',
        'endTime' => 'EndTime',
        'metricName' => 'MetricName',
        'regionNo' => 'RegionNo',
        'resourceType' => 'ResourceType',
        'scanBy' => 'ScanBy',
        'stepMinutes' => 'StepMinutes',
        'useCrossAccount' => 'UseCrossAccount',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->scanBy) {
            $res['ScanBy'] = $this->scanBy;
        }

        if (null !== $this->stepMinutes) {
            $res['StepMinutes'] = $this->stepMinutes;
        }

        if (null !== $this->useCrossAccount) {
            $res['UseCrossAccount'] = $this->useCrossAccount;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1] = dimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ScanBy'])) {
            $model->scanBy = $map['ScanBy'];
        }

        if (isset($map['StepMinutes'])) {
            $model->stepMinutes = $map['StepMinutes'];
        }

        if (isset($map['UseCrossAccount'])) {
            $model->useCrossAccount = $map['UseCrossAccount'];
        }

        return $model;
    }
}
