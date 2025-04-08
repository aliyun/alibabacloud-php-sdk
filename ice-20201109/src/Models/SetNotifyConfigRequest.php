<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SetNotifyConfigRequest extends Model
{
    /**
     * @var string
     */
    public $AIAgentId;

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
    public $token;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'audioOssPath' => 'AudioOssPath',
        'callbackUrl' => 'CallbackUrl',
        'enableAudioRecording' => 'EnableAudioRecording',
        'enableNotify' => 'EnableNotify',
        'eventTypes' => 'EventTypes',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }

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
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }

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

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
