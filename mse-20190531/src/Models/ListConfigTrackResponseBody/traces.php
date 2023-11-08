<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListConfigTrackResponseBody;

use AlibabaCloud\Tea\Model;

class traces extends Model
{
    /**
     * @description Indicates whether the request is sent from the client. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $client;

    /**
     * @description The ID of the configuration.
     *
     * @example eir-server.properties
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The response latency. Unit: milliseconds.
     *
     * @example 0
     *
     * @var string
     */
    public $delay;

    /**
     * @description The event. Valid values:
     *
     *   pull: configuration acquisition events
     *   persist: persistence events
     *
     * @example pull
     *
     * @var string
     */
    public $event;

    /**
     * @description The name of the configuration group.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description The logging time.
     *
     * @example 2022-11-28 15:09:15
     *
     * @var string
     */
    public $logDate;

    /**
     * @description The MD5 value.
     *
     * @example d21c9091c60daa0ff7ee2f420141e5a0
     *
     * @var string
     */
    public $md5;

    /**
     * @description Indicates whether messages are pushed by a server. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $push;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.1.2
     *
     * @var string
     */
    public $requestIp;

    /**
     * @description The response node.
     *
     * @example mse-1973b9a0-1670834*****-reg-center-0-2
     *
     * @var string
     */
    public $responseIp;

    /**
     * @description The result.
     *
     * @example ok
     *
     * @var string
     */
    public $result;

    /**
     * @description The timestamp that indicates the time when the metric value is collected.
     *
     * Unit: seconds.
     * @example 1659666529
     *
     * @var string
     */
    public $ts;

    /**
     * @description The release type. Valid values:
     *
     *   beta: beta release
     *   tag: canary release
     *   batch: batch release
     *
     * @example beta
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'client'     => 'Client',
        'dataId'     => 'DataId',
        'delay'      => 'Delay',
        'event'      => 'Event',
        'group'      => 'Group',
        'logDate'    => 'LogDate',
        'md5'        => 'Md5',
        'push'       => 'Push',
        'requestIp'  => 'RequestIp',
        'responseIp' => 'ResponseIp',
        'result'     => 'Result',
        'ts'         => 'Ts',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->client) {
            $res['Client'] = $this->client;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->logDate) {
            $res['LogDate'] = $this->logDate;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->push) {
            $res['Push'] = $this->push;
        }
        if (null !== $this->requestIp) {
            $res['RequestIp'] = $this->requestIp;
        }
        if (null !== $this->responseIp) {
            $res['ResponseIp'] = $this->responseIp;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Client'])) {
            $model->client = $map['Client'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['LogDate'])) {
            $model->logDate = $map['LogDate'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Push'])) {
            $model->push = $map['Push'];
        }
        if (isset($map['RequestIp'])) {
            $model->requestIp = $map['RequestIp'];
        }
        if (isset($map['ResponseIp'])) {
            $model->responseIp = $map['ResponseIp'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
