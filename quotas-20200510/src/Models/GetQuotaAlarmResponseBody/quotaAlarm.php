<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmResponseBody;

use AlibabaCloud\Tea\Model;

class quotaAlarm extends Model
{
    /**
     * @var float
     */
    public $thresholdPercent;

    /**
     * @var mixed[]
     */
    public $quotaDimension;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $notifyTarget;

    /**
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @var float
     */
    public $quotaUsage;

    /**
     * @var float
     */
    public $quotaValue;

    /**
     * @var string
     */
    public $alarmId;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'thresholdPercent' => 'ThresholdPercent',
        'quotaDimension'   => 'QuotaDimension',
        'createTime'       => 'CreateTime',
        'quotaActionCode'  => 'QuotaActionCode',
        'alarmName'        => 'AlarmName',
        'notifyTarget'     => 'NotifyTarget',
        'notifyChannels'   => 'NotifyChannels',
        'quotaUsage'       => 'QuotaUsage',
        'quotaValue'       => 'QuotaValue',
        'alarmId'          => 'AlarmId',
        'threshold'        => 'Threshold',
        'productCode'      => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
        }
        if (null !== $this->quotaDimension) {
            $res['QuotaDimension'] = $this->quotaDimension;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->notifyTarget) {
            $res['NotifyTarget'] = $this->notifyTarget;
        }
        if (null !== $this->notifyChannels) {
            $res['NotifyChannels'] = $this->notifyChannels;
        }
        if (null !== $this->quotaUsage) {
            $res['QuotaUsage'] = $this->quotaUsage;
        }
        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotaAlarm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }
        if (isset($map['QuotaDimension'])) {
            $model->quotaDimension = $map['QuotaDimension'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['NotifyTarget'])) {
            $model->notifyTarget = $map['NotifyTarget'];
        }
        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = $map['NotifyChannels'];
            }
        }
        if (isset($map['QuotaUsage'])) {
            $model->quotaUsage = $map['QuotaUsage'];
        }
        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
