<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesResponseBody;

use AlibabaCloud\Dara\Model;

class alarmHistories extends Model
{
    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @var string
     */
    public $notifyTarget;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var float
     */
    public $quotaUsage;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var float
     */
    public $thresholdPercent;
    protected $_name = [
        'alarmName' => 'AlarmName',
        'createTime' => 'CreateTime',
        'notifyChannels' => 'NotifyChannels',
        'notifyTarget' => 'NotifyTarget',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaUsage' => 'QuotaUsage',
        'threshold' => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
    ];

    public function validate()
    {
        if (\is_array($this->notifyChannels)) {
            Model::validateArray($this->notifyChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->notifyChannels) {
            if (\is_array($this->notifyChannels)) {
                $res['NotifyChannels'] = [];
                $n1 = 0;
                foreach ($this->notifyChannels as $item1) {
                    $res['NotifyChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notifyTarget) {
            $res['NotifyTarget'] = $this->notifyTarget;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }

        if (null !== $this->quotaUsage) {
            $res['QuotaUsage'] = $this->quotaUsage;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
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
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = [];
                $n1 = 0;
                foreach ($map['NotifyChannels'] as $item1) {
                    $model->notifyChannels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NotifyTarget'])) {
            $model->notifyTarget = $map['NotifyTarget'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }

        if (isset($map['QuotaUsage'])) {
            $model->quotaUsage = $map['QuotaUsage'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }

        return $model;
    }
}
