<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsResponseBody;

use AlibabaCloud\Tea\Model;

class quotaAlarms extends Model
{
    /**
     * @description The ID of the quota alert.
     *
     * @example a2efa7fc-832f-47bb-8054-39e28012****
     *
     * @var string
     */
    public $alarmId;

    /**
     * @description The name of the quota alert.
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description The time when the quota alert was created.
     *
     * @example 2020-11-27T07:23:34Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the alert threshold was reached. Valid values:
     *
     *   false
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $exceedThreshold;

    /**
     * @description The notification method. Valid values:
     *
     *   sms: SMS messages
     *   email: emails
     *
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @description The alert contact. Valid value: accountContact.
     *
     * @example accountContact
     *
     * @var string
     */
    public $notifyTarget;

    /**
     * @description The abbreviation of the cloud service name.
     *
     * @example config
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_hvnoqv
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The quota dimensions.
     *
     * @example {"regionId":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $quotaDimensions;

    /**
     * @description The used quota.
     *
     * @example 73
     *
     * @var float
     */
    public $quotaUsage;

    /**
     * @description The value of the quota.
     *
     * @example 200
     *
     * @var float
     */
    public $quotaValue;

    /**
     * @description The numeric value of the alert threshold.
     *
     * @example 160
     *
     * @var float
     */
    public $threshold;

    /**
     * @description The percentage of the alert threshold.
     *
     * @example 80
     *
     * @var float
     */
    public $thresholdPercent;

    /**
     * @description The type of the quota alert. Valid values:
     *
     *   used: The alert is created for the used quota.
     *   usable: The alert is created for the available quota.
     *
     * @example used
     *
     * @var string
     */
    public $thresholdType;

    /**
     * @description The webhook URL.
     *
     * @example https://www.aliyun.com/webhook
     *
     * @var string
     */
    public $webHook;
    protected $_name = [
        'alarmId'          => 'AlarmId',
        'alarmName'        => 'AlarmName',
        'createTime'       => 'CreateTime',
        'exceedThreshold'  => 'ExceedThreshold',
        'notifyChannels'   => 'NotifyChannels',
        'notifyTarget'     => 'NotifyTarget',
        'productCode'      => 'ProductCode',
        'quotaActionCode'  => 'QuotaActionCode',
        'quotaDimensions'  => 'QuotaDimensions',
        'quotaUsage'       => 'QuotaUsage',
        'quotaValue'       => 'QuotaValue',
        'threshold'        => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
        'thresholdType'    => 'ThresholdType',
        'webHook'          => 'WebHook',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['NotifyChannels'] = $this->notifyChannels;
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
            $res['QuotaDimensions'] = $this->quotaDimensions;
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

    /**
     * @param array $map
     *
     * @return quotaAlarms
     */
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
                $model->notifyChannels = $map['NotifyChannels'];
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
            $model->quotaDimensions = $map['QuotaDimensions'];
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
