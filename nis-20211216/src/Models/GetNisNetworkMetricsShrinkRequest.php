<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class GetNisNetworkMetricsShrinkRequest extends Model
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
     * @var string
     */
    public $dimensionsShrink;

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
     * @var bool
     */
    public $useCrossAccount;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'beginTime' => 'BeginTime',
        'dimensionsShrink' => 'Dimensions',
        'endTime' => 'EndTime',
        'metricName' => 'MetricName',
        'regionNo' => 'RegionNo',
        'resourceType' => 'ResourceType',
        'scanBy' => 'ScanBy',
        'useCrossAccount' => 'UseCrossAccount',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
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
                    $res['AccountIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->dimensionsShrink) {
            $res['Dimensions'] = $this->dimensionsShrink;
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
                    $model->accountIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['Dimensions'])) {
            $model->dimensionsShrink = $map['Dimensions'];
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

        if (isset($map['UseCrossAccount'])) {
            $model->useCrossAccount = $map['UseCrossAccount'];
        }

        return $model;
    }
}
