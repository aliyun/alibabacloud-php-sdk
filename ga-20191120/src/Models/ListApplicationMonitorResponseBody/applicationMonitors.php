<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class applicationMonitors extends Model
{
    /**
     * @description The ID of the GA instance on which the origin probing task runs.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The URL or IP address that is probed.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description Indicates whether the automatic diagnostics feature is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $detectEnable;

    /**
     * @description The threshold that is used to trigger the automatic diagnostics feature.
     *
     * @example １
     *
     * @var int
     */
    public $detectThreshold;

    /**
     * @description The number of times that are required to reach the threshold before the automatic diagnostics feature can be triggered.
     *
     * @example １
     *
     * @var int
     */
    public $detectTimes;

    /**
     * @description The ID of the listener on which the origin probing task runs.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The extended options of the listener protocol that is used by the origin probing task. The options vary based on the listener protocol.
     *
     * @example { "http_method": "get","header": "key:asd","acceptable_response_code": "500","cert_verify": true }
     *
     * @var string
     */
    public $optionsJson;

    /**
     * @description The silence period of the automatic diagnostics feature. This parameter indicates the interval at which the automatic diagnostics feature is triggered. If the availability rate does not return to normal after GA triggers an automatic diagnostic, GA must wait until the silence period ends before GA can trigger another automatic diagnostic.
     *
     * If the number of consecutive times that the availability rate drops below the threshold of automatic diagnostics reaches the value of the **DetectTimes** parameter, the automatic diagnostics feature is triggered. The automatic diagnostics feature is not triggered again within the silence period even if the availability rate stays below the threshold. If the availability rate does not return to normal after the silence period ends, the automatic diagnostics feature is triggered again.
     *
     * Unit: seconds.
     * @example 300
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The state of the origin probing task. Valid values:
     *
     *   **active**: The origin probing task is running.
     *   **inactive**: The origin probing task is stopped.
     *   **init**: The origin probing task is being initialized.
     *   **deleting**: The origin probing task is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the origin probing task.
     *
     * @example sm-bp1fpdjfju9k8yr1y****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the origin probing task.
     *
     * @example task1
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'address'         => 'Address',
        'detectEnable'    => 'DetectEnable',
        'detectThreshold' => 'DetectThreshold',
        'detectTimes'     => 'DetectTimes',
        'listenerId'      => 'ListenerId',
        'optionsJson'     => 'OptionsJson',
        'silenceTime'     => 'SilenceTime',
        'state'           => 'State',
        'taskId'          => 'TaskId',
        'taskName'        => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->detectEnable) {
            $res['DetectEnable'] = $this->detectEnable;
        }
        if (null !== $this->detectThreshold) {
            $res['DetectThreshold'] = $this->detectThreshold;
        }
        if (null !== $this->detectTimes) {
            $res['DetectTimes'] = $this->detectTimes;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = $this->optionsJson;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationMonitors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['DetectEnable'])) {
            $model->detectEnable = $map['DetectEnable'];
        }
        if (isset($map['DetectThreshold'])) {
            $model->detectThreshold = $map['DetectThreshold'];
        }
        if (isset($map['DetectTimes'])) {
            $model->detectTimes = $map['DetectTimes'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['OptionsJson'])) {
            $model->optionsJson = $map['OptionsJson'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
