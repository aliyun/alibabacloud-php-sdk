<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\escalationList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\targetList;
use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description The alert notification methods. Valid values:
     *
     * 0: Alert notifications are sent by using emails and DingTalk chatbots.
     * @example 22
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The comparison operator that is used in the alert rule. Valid values:
     *
     *   `>`
     *   `>=`
     *   `<`
     *   `<=`
     *   `=`
     *
     * @var escalationList
     */
    public $escalationList;

    /**
     * @description The name of the metric. Valid values:
     *
     *   HttpStatus: HTTP status code
     *   HttpLatency: HTTP response time
     *   TelnetStatus: Telnet status code
     *   TelnetLatency: Telnet response time
     *   PingLostRate: Ping packet loss rate
     *
     * @example 1
     *
     * @var int
     */
    public $notifyType;

    /**
     * @description The callback URL.
     *
     * CloudMonitor pushes an alert notification to the specified callback URL by sending an HTTP POST request. Only the HTTP protocol is supported.
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The trigger conditions of the alert rule.
     *
     * @example 0
     *
     * @var int
     */
    public $startTime;

    /**
     * @var targetList
     */
    public $targetList;

    /**
     * @description The alert threshold.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webHook;
    protected $_name = [
        'endTime'        => 'EndTime',
        'escalationList' => 'EscalationList',
        'notifyType'     => 'NotifyType',
        'silenceTime'    => 'SilenceTime',
        'startTime'      => 'StartTime',
        'targetList'     => 'TargetList',
        'webHook'        => 'WebHook',
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
        if (null !== $this->escalationList) {
            $res['EscalationList'] = null !== $this->escalationList ? $this->escalationList->toMap() : null;
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
        if (null !== $this->targetList) {
            $res['TargetList'] = null !== $this->targetList ? $this->targetList->toMap() : null;
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
        if (isset($map['EscalationList'])) {
            $model->escalationList = escalationList::fromMap($map['EscalationList']);
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
        if (isset($map['TargetList'])) {
            $model->targetList = targetList::fromMap($map['TargetList']);
        }
        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}
