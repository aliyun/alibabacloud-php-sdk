<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeJobMonitorRuleResponseBody;

use AlibabaCloud\Tea\Model;

class monitorRules extends Model
{
    /**
     * @description The threshold that triggers the alert.
     *
     *   If the request parameter **Type** of the [CreateJobMonitorRule](~~212332~~) operation is set to **delay**, the unit of DelayRuleTime is seconds.
     *   If the request parameter **Type** of the [CreateJobMonitorRule](~~212332~~) operation is set to **full_timeout**, the unit of DelayRuleTime is hours.
     *
     * @example 11
     *
     * @var int
     */
    public $delayRuleTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var int
     */
    public $noticeValue;

    /**
     * @var int
     */
    public $period;

    /**
     * @description The mobile phone numbers that receive alert notifications. Multiple mobile numbers are separated by commas (,).
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $phone;

    /**
     * @description Indicates whether the monitoring rule is enabled. Valid values:
     *
     *   **Y**: The monitoring rule is enabled.
     *   **N**: The monitoring rule is disabled.
     *
     * @example Y
     *
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $times;

    /**
     * @description The type of the monitoring rule. Valid values:
     *
     *   **delay**: If the task latency reaches the threshold, an alert is triggered.
     *   **error**: If an exception occurs, an alert is triggered.
     *
     * @example delay
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'delayRuleTime' => 'DelayRuleTime',
        'jobId'         => 'JobId',
        'jobType'       => 'JobType',
        'noticeValue'   => 'NoticeValue',
        'period'        => 'Period',
        'phone'         => 'Phone',
        'state'         => 'State',
        'times'         => 'Times',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayRuleTime) {
            $res['DelayRuleTime'] = $this->delayRuleTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->noticeValue) {
            $res['NoticeValue'] = $this->noticeValue;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayRuleTime'])) {
            $model->delayRuleTime = $map['DelayRuleTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['NoticeValue'])) {
            $model->noticeValue = $map['NoticeValue'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
