<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDelayConfigResponseBody extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;

    /**
     * @description The duration for which the playback of the live stream is delayed.
     *
     * @example 60
     *
     * @var string
     */
    public $delayTime;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The request ID.
     *
     * @example A3136B58-5876-4168-83CA-B562781981A0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $stream;

    /**
     * @description The trigger mode. Valid values:
     *
     *   **PUBLISH_ONLY**: Stream delay can be triggered only by specifying the stream delay parameter in the ingest URL.
     *   **CONFIG_ONLY**: Stream delay can be triggered only by the stream delay configuration.
     *   **PUBLISH_CONFIG**: Stream delay can be triggered by the stream delay parameter in the ingest URL or the stream delay configuration. The stream delay parameter takes precedence over the stream delay configuration.
     *
     * @example PUBLISH_ONLY
     *
     * @var string
     */
    public $taskTriggerMode;
    protected $_name = [
        'app' => 'App',
        'delayTime' => 'DelayTime',
        'domain' => 'Domain',
        'requestId' => 'RequestId',
        'stream' => 'Stream',
        'taskTriggerMode' => 'TaskTriggerMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->taskTriggerMode) {
            $res['TaskTriggerMode'] = $this->taskTriggerMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDelayConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['TaskTriggerMode'])) {
            $model->taskTriggerMode = $map['TaskTriggerMode'];
        }

        return $model;
    }
}
