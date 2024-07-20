<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationMonitorRequest extends Model
{
    /**
     * @description The URL or IP address that is probed.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable the automatic diagnostics feature. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $detectEnable;

    /**
     * @description Set the threshold that is used to trigger the automatic diagnostics feature. If the liveness of the origin in percentile drops below the specified threshold, the automatic diagnostics feature is triggered.
     *
     * Valid values: **0** to **100**.
     * @example 0
     *
     * @var int
     */
    public $detectThreshold;

    /**
     * @description The number of times that the threshold must be reached before the automatic diagnostics feature is triggered.
     *
     * Valid values: **1** to **20**.
     * @example 1
     *
     * @var int
     */
    public $detectTimes;

    /**
     * @description The ID of the listener that you want to modify. The listener runs the origin probing task.
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
     * @description The ID of the region where the Global Accelerator (GA) instance is deployed. The value is set to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The silence period of the automatic diagnostics feature. This parameter specifies the interval at which the automatic diagnostics feature is triggered. If the availability rate does not return to normal after GA triggers an automatic diagnostic task, GA must wait until the silence period ends before GA can trigger another automatic diagnostic task.
     *
     * If the number of consecutive times that the availability rate drops below the threshold of automatic diagnostics reaches the value of the **DetectTimes** parameter, the automatic diagnostics feature is triggered. The automatic diagnostics feature is not triggered again within the silence period even if the availability rate stays below the threshold. If the availability rate does not return to normal after the silence period ends, the automatic diagnostics feature is triggered again.
     *
     * Unit: seconds. Valid values: **300** to **86400**.
     * @example 300
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The ID of the origin probing task that you want to modify.
     *
     * This parameter is required.
     * @example sm-bp1fpdjfju9k8yr1y****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the origin probing task.
     *
     * The name must be 1 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The name must start with a letter.
     * @example task1
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'address'         => 'Address',
        'clientToken'     => 'ClientToken',
        'detectEnable'    => 'DetectEnable',
        'detectThreshold' => 'DetectThreshold',
        'detectTimes'     => 'DetectTimes',
        'listenerId'      => 'ListenerId',
        'optionsJson'     => 'OptionsJson',
        'regionId'        => 'RegionId',
        'silenceTime'     => 'SilenceTime',
        'taskId'          => 'TaskId',
        'taskName'        => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
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
     * @return UpdateApplicationMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
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
