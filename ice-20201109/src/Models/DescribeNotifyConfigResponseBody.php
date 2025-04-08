<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DescribeNotifyConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $audioOssPath;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var bool
     */
    public $enableAudioRecording;

    /**
     * @var bool
     */
    public $enableNotify;

    /**
     * @var string
     */
    public $eventTypes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'audioOssPath' => 'AudioOssPath',
        'callbackUrl' => 'CallbackUrl',
        'enableAudioRecording' => 'EnableAudioRecording',
        'enableNotify' => 'EnableNotify',
        'eventTypes' => 'EventTypes',
        'requestId' => 'RequestId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioOssPath) {
            $res['AudioOssPath'] = $this->audioOssPath;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->enableAudioRecording) {
            $res['EnableAudioRecording'] = $this->enableAudioRecording;
        }

        if (null !== $this->enableNotify) {
            $res['EnableNotify'] = $this->enableNotify;
        }

        if (null !== $this->eventTypes) {
            $res['EventTypes'] = $this->eventTypes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AudioOssPath'])) {
            $model->audioOssPath = $map['AudioOssPath'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['EnableAudioRecording'])) {
            $model->enableAudioRecording = $map['EnableAudioRecording'];
        }

        if (isset($map['EnableNotify'])) {
            $model->enableNotify = $map['EnableNotify'];
        }

        if (isset($map['EventTypes'])) {
            $model->eventTypes = $map['EventTypes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
