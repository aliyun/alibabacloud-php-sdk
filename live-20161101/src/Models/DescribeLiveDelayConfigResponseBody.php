<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLiveDelayConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $delayTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stream;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
