<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaAlarmRequest extends Model
{
    /**
     * @description The ID of the quota alert.
     *
     * This parameter is required.
     * @example a2efa7fc-832f-47bb-8054-39e28012****
     *
     * @var string
     */
    public $alarmId;

    /**
     * @description The name of the quota alert.
     *
     * This parameter is required.
     * @example rules
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description The numeric value of the alert threshold. Valid values:
     *
     *   If you set the `ThresholdType` parameter to `used`, you will receive an alert notification when the used quota is greater than or equal to the preset alert threshold. The alert threshold must be greater than the current used quota.
     *   If you set the `ThresholdType` parameter to `usable`, you will receive an alert notification when the available quota is less than or equal to the preset alert threshold. The alert threshold must be less than the current available quota.
     *
     * > You must set one of the Threshold and ThresholdPercent parameters.
     * @example 160
     *
     * @var float
     */
    public $threshold;

    /**
     * @description The percentage of the alert threshold. Valid values:
     *
     *   If you set `ThresholdType` to `used`, you receive an alert notification when the used quota is greater than or equal to the preset percentage of the alert threshold. Value range: (50%, 100%].
     *   If you set `ThresholdType` to `usable`, you receive an alert notification when the available quota is less than or equal to the preset percentage of the alert threshold. Value range: (0%, 50%].
     *
     * >  You must set one of Threshold and ThresholdPercent.
     * @example 51
     *
     * @var float
     */
    public $thresholdPercent;

    /**
     * @description The type of the quota alert. Valid values:
     *
     *   used (default): The alert is created for the used quota.
     *   usable: The alert is created for the available quota.
     *
     * @example usable
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
