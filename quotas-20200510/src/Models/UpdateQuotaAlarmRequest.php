<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaAlarmRequest extends Model
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
    public $webHook;
    protected $_name = [
        'alarmId'          => 'AlarmId',
        'alarmName'        => 'AlarmName',
        'threshold'        => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
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
        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}
