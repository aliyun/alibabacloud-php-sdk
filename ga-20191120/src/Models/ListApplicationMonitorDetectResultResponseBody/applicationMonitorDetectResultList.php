<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorDetectResultResponseBody;

use AlibabaCloud\Tea\Model;

class applicationMonitorDetectResultList extends Model
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
     * @description The response content returned by the origin probing task.
     *
     * @example 502 BadGateway
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the diagnostic result of the origin probing task. Valid values:
     *
     *   **All forward nodes work well**: The origin is normal.
     *   **Endpoint network error.**: The origin is abnormal. You must check whether the origin is running as expected.
     *   **Public network error.**: An Internet error occurred. This refers to a network error that occurred when the client connects to the acceleration region.
     *   **Ga internal error.**: An internal error occurred. For example, an exception occurred when a request is processed by GA.
     *   **Ga has been deleted.**: The current GA instance is deleted.
     *   **Ga state is not stable**: The current GA instance is in an unstable state, such as the Configuring state.
     *   **Ga has no listener configuration.**: The current GA instance does not have a listener.
     *   **Missing endpoint configuration.**: No endpoint is configured.
     *   **Missing acceleration region configuration.**: No acceleration region is configured.
     *   **Missing endpointgroup configuration.**: No endpoint group is configured.
     *
     * @example All forward nodes work well
     *
     * @var string
     */
    public $detail;

    /**
     * @description The time when the diagnosis of the origin detection task ends.
     *
     * @example 1663205460
     *
     * @var string
     */
    public $detectTime;

    /**
     * @description The diagnostic result of the origin probing task.
     *
     *   **success**: The origin probing task succeeded.
     *   **failed**: The origin probing task failed.
     *
     * @example success
     *
     * @var string
     */
    public $diagStatus;

    /**
     * @description The ID of the listener on which the origin probing task runs.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The listening port.
     *
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The network transmission protocol that is used by the listener. Valid values:
     *
     *   **tcp**: TCP
     *   **udp**: UDP
     *   **http**: HTTP
     *   **https**: HTTPS
     *
     * >  UDP listeners do not support probing.
     * @example http
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The error code returned by the origin probing task.
     *
     * @example 502
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The ID of the origin probing task.
     *
     * @example sm-bp1fpdjfju9k8yr1y****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'content'       => 'Content',
        'detail'        => 'Detail',
        'detectTime'    => 'DetectTime',
        'diagStatus'    => 'DiagStatus',
        'listenerId'    => 'ListenerId',
        'port'          => 'Port',
        'protocol'      => 'Protocol',
        'statusCode'    => 'StatusCode',
        'taskId'        => 'TaskId',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->detectTime) {
            $res['DetectTime'] = $this->detectTime;
        }
        if (null !== $this->diagStatus) {
            $res['DiagStatus'] = $this->diagStatus;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationMonitorDetectResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DetectTime'])) {
            $model->detectTime = $map['DetectTime'];
        }
        if (isset($map['DiagStatus'])) {
            $model->diagStatus = $map['DiagStatus'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
