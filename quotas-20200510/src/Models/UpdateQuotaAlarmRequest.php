<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaAlarmRequest extends Model
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
     * @description The numeric value of the alert threshold. Valid values:
     *
     *   If the `ThresholdType` parameter is set to `used` and the used quota is greater than or equal to a specified value, you receive alert notifications. The alert threshold must be greater than the current used quota.
     *   If the `ThresholdType` parameter is set to `usable` and the available quota is less than or equal to a specified value, you receive alert notifications. The alert threshold must be less than the current available quota.
     *
     * >  You must set one of the Threshold and ThresholdPercent parameters.
     * @example 160
     *
     * @var float
     */
    public $threshold;

    /**
     * @description The percentage of the alert threshold. Valid values:
     *
     *   If the `ThresholdType` parameter is set to `used` and the percentage of the used quota in the total quota is greater than or equal to a specified value, you receive alert notifications. Value range: (50%, 100%].
     *   If the `ThresholdType` parameter is set to `usable` and the percentage of the available quota in the total quota is less than or equal to a specified value, you receive alert notifications. Value range: (0%, 50%].
     *
     * >  You must set one of the Threshold and ThresholdPercent parameters.
     * @example 51
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
     * @example usable
     *
     * @var string
     */
    public $thresholdType;

    /**
     * @description The webhook URL. Quota Center sends the alert notification to a specified URL by using an HTTP POST request.
     *
     * @example https://alert.aliyun.com/callback
     *
     * @var string
     */
    public $webHook;
    protected $_name = [
        'alarmId'          => 'AlarmId',
        'alarmName'        => 'AlarmName',
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
     * @return UpdateQuotaAlarmRequest
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
