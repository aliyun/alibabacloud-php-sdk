<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description The end of the time range during which the alert rule is effective. Valid values: 0 to 23.
     *
     * > Alert notifications are sent based on the specified threshold only if the alert rule is effective.
     * @example 22
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The alert notification methods. Valid values:
     *
     * 0: Alert notifications are sent by using emails and DingTalk chatbots.
     * @example 0
     *
     * @var int
     */
    public $notifyType;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met. Unit: seconds. Default value: 86400. The default value indicates one day.
     *
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The beginning of the time range during which the alert rule is effective. Valid values: 0 to 23.
     *
     * > Alert notifications are sent based on the specified threshold only if the alert rule is effective.
     * @example 0
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The callback URL.
     *
     * @example https://www.aliyun.com/webhook.json
     *
     * @var string
     */
    public $webHook;
    protected $_name = [
        'endTime'     => 'EndTime',
        'notifyType'  => 'NotifyType',
        'silenceTime' => 'SilenceTime',
        'startTime'   => 'StartTime',
        'webHook'     => 'WebHook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}
