<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class alarmHistories extends Model
{
    /**
     * @description The name of the quota alert.
     *
     * @example security_groups
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description The time when the quota alert was created.
     *
     * @example 2021-01-24T09:20:09Z
     *
     * @var string
     */
    public $createTime;

    /**
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
     * @description The abbreviation of the Alibaba Cloud service name.
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
     * @description The used quota.
     *
     * @example 31
     *
     * @var float
     */
    public $quotaUsage;

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
     * @example 80
     *
     * @var float
     */
    public $thresholdPercent;
    protected $_name = [
        'alarmName'        => 'AlarmName',
        'createTime'       => 'CreateTime',
        'notifyChannels'   => 'NotifyChannels',
        'notifyTarget'     => 'NotifyTarget',
        'productCode'      => 'ProductCode',
        'quotaActionCode'  => 'QuotaActionCode',
        'quotaUsage'       => 'QuotaUsage',
        'threshold'        => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return alarmHistories
     */
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
