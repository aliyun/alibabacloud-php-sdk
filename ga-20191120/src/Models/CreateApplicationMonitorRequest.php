<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationMonitorRequest extends Model
{
    /**
     * @description The ID of the GA instance on which to execute the origin probing task.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The URL or IP address that you want to probe.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable the automatic diagnostics feature. Default value: false. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $detectEnable;

    /**
     * @description The threshold that is used to trigger the automatic diagnostics feature. Unit: %.
     *
     * Valid values: **0** to **100**.
     *
     * The default value is **0**, which indicates that the automatic diagnostics feature is not triggered.
     * @example 0
     *
     * @var int
     */
    public $detectThreshold;

    /**
     * @description The number of times that are required to reach the threshold before the automatic diagnostics feature can be triggered.
     *
     * Valid values: **1** to **20**. Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $detectTimes;

    /**
     * @description The ID of the listener on which to execute the origin probing task.
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
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The silence period of the automatic diagnostics feature. This parameter specifies the interval at which the automatic diagnostics feature is triggered. If the availability rate does not return to normal after GA triggers an automatic diagnostic, GA must wait until the silence period ends before GA can trigger another automatic diagnostic.
     *
     * If the number of consecutive times that the availability rate drops below the threshold of automatic diagnostics reaches the value of the **DetectTimes** parameter, the automatic diagnostics feature is triggered. The automatic diagnostics feature is not triggered again within the silence period even if the availability rate stays below the threshold. If the availability rate does not return to normal after the silence period ends, the automatic diagnostics feature is triggered again.
     *
     * Unit: seconds. Valid values: **300** to **86400**. Default value: **300**.
     * @example 300
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The name of the origin probing task.
     *
     * The name must be 4 to 100 characters in length, and can contain digits, underscores (\_), and hyphens (-). It must start with a letter.
     * @example task1
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'address'         => 'Address',
        'clientToken'     => 'ClientToken',
        'detectEnable'    => 'DetectEnable',
        'detectThreshold' => 'DetectThreshold',
        'detectTimes'     => 'DetectTimes',
        'listenerId'      => 'ListenerId',
        'optionsJson'     => 'OptionsJson',
        'regionId'        => 'RegionId',
        'silenceTime'     => 'SilenceTime',
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
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationMonitorRequest
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
