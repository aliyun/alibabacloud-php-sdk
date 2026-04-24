<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeModelOperatorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeModelOperatorResponseBody\data\dailyUsage;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeModelOperatorResponseBody\data\keyUsageList;

class data extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var dailyUsage[]
     */
    public $dailyUsage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var keyUsageList[]
     */
    public $keyUsageList;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var int
     */
    public $usedQuota;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'autoRenew' => 'AutoRenew',
        'baseUrl' => 'BaseUrl',
        'chargeType' => 'ChargeType',
        'dailyUsage' => 'DailyUsage',
        'endTime' => 'EndTime',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'keyUsageList' => 'KeyUsageList',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalQuota' => 'TotalQuota',
        'usedQuota' => 'UsedQuota',
    ];

    public function validate()
    {
        if (\is_array($this->dailyUsage)) {
            Model::validateArray($this->dailyUsage);
        }
        if (\is_array($this->keyUsageList)) {
            Model::validateArray($this->keyUsageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->dailyUsage) {
            if (\is_array($this->dailyUsage)) {
                $res['DailyUsage'] = [];
                $n1 = 0;
                foreach ($this->dailyUsage as $item1) {
                    $res['DailyUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyUsageList) {
            if (\is_array($this->keyUsageList)) {
                $res['KeyUsageList'] = [];
                $n1 = 0;
                foreach ($this->keyUsageList as $item1) {
                    $res['KeyUsageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = $this->usedQuota;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DailyUsage'])) {
            if (!empty($map['DailyUsage'])) {
                $model->dailyUsage = [];
                $n1 = 0;
                foreach ($map['DailyUsage'] as $item1) {
                    $model->dailyUsage[$n1] = dailyUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyUsageList'])) {
            if (!empty($map['KeyUsageList'])) {
                $model->keyUsageList = [];
                $n1 = 0;
                foreach ($map['KeyUsageList'] as $item1) {
                    $model->keyUsageList[$n1] = keyUsageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['UsedQuota'])) {
            $model->usedQuota = $map['UsedQuota'];
        }

        return $model;
    }
}
