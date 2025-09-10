<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsResponseBody;

use AlibabaCloud\Dara\Model;

class quotaAlarms extends Model
{
    /**
     * @var string
     */
    public $alarmId;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $exceedThreshold;

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
     * @var mixed[]
     */
    public $quotaDimensions;

    /**
     * @var float
     */
    public $quotaUsage;

    /**
     * @var float
     */
    public $quotaValue;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var float
     */
    public $thresholdPercent;

    /**
     * @var string
     */
    public $thresholdType;

    /**
     * @var string
     */
    public $webHook;
    protected $_name = [
        'alarmId' => 'AlarmId',
        'alarmName' => 'AlarmName',
        'createTime' => 'CreateTime',
        'exceedThreshold' => 'ExceedThreshold',
        'notifyChannels' => 'NotifyChannels',
        'notifyTarget' => 'NotifyTarget',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaDimensions' => 'QuotaDimensions',
        'quotaUsage' => 'QuotaUsage',
        'quotaValue' => 'QuotaValue',
        'threshold' => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
        'thresholdType' => 'ThresholdType',
        'webHook' => 'WebHook',
    ];

    public function validate()
    {
        if (\is_array($this->notifyChannels)) {
            Model::validateArray($this->notifyChannels);
        }
        if (\is_array($this->quotaDimensions)) {
            Model::validateArray($this->quotaDimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }

        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->exceedThreshold) {
            $res['ExceedThreshold'] = $this->exceedThreshold;
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

        if (null !== $this->quotaDimensions) {
            if (\is_array($this->quotaDimensions)) {
                $res['QuotaDimensions'] = [];
                foreach ($this->quotaDimensions as $key1 => $value1) {
                    $res['QuotaDimensions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->quotaUsage) {
            $res['QuotaUsage'] = $this->quotaUsage;
        }

        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
        }

        if (null !== $this->thresholdType) {
            $res['ThresholdType'] = $this->thresholdType;
        }

        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
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
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }

        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExceedThreshold'])) {
            $model->exceedThreshold = $map['ExceedThreshold'];
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

        if (isset($map['QuotaDimensions'])) {
            if (!empty($map['QuotaDimensions'])) {
                $model->quotaDimensions = [];
                foreach ($map['QuotaDimensions'] as $key1 => $value1) {
                    $model->quotaDimensions[$key1] = $value1;
                }
            }
        }

        if (isset($map['QuotaUsage'])) {
            $model->quotaUsage = $map['QuotaUsage'];
        }

        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }

        if (isset($map['ThresholdType'])) {
            $model->thresholdType = $map['ThresholdType'];
        }

        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}
