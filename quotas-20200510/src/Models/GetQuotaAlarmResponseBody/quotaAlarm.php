<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmResponseBody;

use AlibabaCloud\Tea\Model;

class quotaAlarm extends Model
{
    /**
     * @description The ID of the quota alert.
     *
     * @example 78d7e436-4b25-4897-84b5-d7b656bb****
     *
     * @var string
     */
    public $alarmId;

    /**
     * @description The name of the quota alert.
     *
     * @example tf-testacccn-hangzhouquotasquotaalarm81611
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description The time when the quota alert was created.
     *
     * @example 2021-01-21T03:47:28Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The alert notification methods.
     *
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @description The alert contact.
     *
     * @example accountContact
     *
     * @var string
     */
    public $notifyTarget;

    /**
     * @description The abbreviation of the cloud service name.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_security-groups
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The quota dimension.
     *
     * @example {"regionId":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $quotaDimension;

    /**
     * @description The used quota.
     *
     * @example 28
     *
     * @var float
     */
    public $quotaUsage;

    /**
     * @description The quota value.
     *
     * @example 804
     *
     * @var float
     */
    public $quotaValue;

    /**
     * @description The numeric value of the alert threshold.
     *
     * @example 29
     *
     * @var float
     */
    public $threshold;

    /**
     * @description The percentage of the alert threshold.
     *
     * @example 50
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
     * @description The webhook URL. Quota Center sends alert notifications to the specified URL by using HTTP POST requests.
     *
     * @example https://alert.aliyun.com/callback
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'alarmId'          => 'AlarmId',
        'alarmName'        => 'AlarmName',
        'createTime'       => 'CreateTime',
        'notifyChannels'   => 'NotifyChannels',
        'notifyTarget'     => 'NotifyTarget',
        'productCode'      => 'ProductCode',
        'quotaActionCode'  => 'QuotaActionCode',
        'quotaDimension'   => 'QuotaDimension',
        'quotaUsage'       => 'QuotaUsage',
        'quotaValue'       => 'QuotaValue',
        'threshold'        => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
        'thresholdType'    => 'ThresholdType',
        'webhook'          => 'Webhook',
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
        if (null !== $this->quotaDimension) {
            $res['QuotaDimension'] = $this->quotaDimension;
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
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
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
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['QuotaDimension'])) {
            $model->quotaDimension = $map['QuotaDimension'];
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
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
