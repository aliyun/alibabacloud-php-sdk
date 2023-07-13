<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description The name of the availability monitoring task. The name must be 4 to 100 characters in length, and can contain letters, digits, and underscores (\_).
     *
     * @example 22
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The content of the HTTP POST request.
     *
     * @example 0
     *
     * @var int
     */
    public $notifyType;

    /**
     * @description The interval at which detection requests are sent. Unit: seconds. Valid values: 15, 30, 60, 120, 300, 900, 1800, and 3600.
     *
     * >  This parameter is available only for the CloudMonitor agent V3.5.1 or later.
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The method used to calculate metric values that trigger alerts. Valid values of N: 1 to 21. Valid values:
     *
     *   HttpStatus: Value
     *   HttpLatency: Average
     *   TelnetStatus: Value
     *   TelnetLatency: Average
     *   PingLostRate: Average
     *
     * >  The value Value indicates the original value and is used for metrics such as status codes. The value Average indicates the average value and is used for metrics, such as the latency and packet loss rate.
     * @example 0
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The range of instances that are monitored by the availability monitoring task. Valid values:
     *
     *   GROUP: All ECS instances in the application group are monitored.
     *   GROUP_SPEC_INSTANCE: Specified ECS instances in the application group are monitored. The TaskScope parameter must be used in combination with the InstanceList.N parameter. The InstanceList.N parameter specifies the ECS instances to be monitored.
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
