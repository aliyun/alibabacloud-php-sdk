<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class alarmHistories extends Model
{
    /**
     * @var float
     */
    public $quotaUsage;

    /**
     * @var float
     */
    public $thresholdPercent;

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
    public $threshold;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'quotaUsage'       => 'QuotaUsage',
        'thresholdPercent' => 'ThresholdPercent',
        'createTime'       => 'CreateTime',
        'quotaActionCode'  => 'QuotaActionCode',
        'alarmName'        => 'AlarmName',
        'notifyTarget'     => 'NotifyTarget',
        'notifyChannels'   => 'NotifyChannels',
        'threshold'        => 'Threshold',
        'productCode'      => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaUsage) {
            $res['QuotaUsage'] = $this->quotaUsage;
        }
        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
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
     * @return alarmHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaUsage'])) {
            $model->quotaUsage = $map['QuotaUsage'];
        }
        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
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
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
