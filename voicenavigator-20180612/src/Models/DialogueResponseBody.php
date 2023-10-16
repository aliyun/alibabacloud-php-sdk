<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DialogueResponseBody extends Model
{
    /**
     * @example Broadcast
     *
     * @var string
     */
    public $action;

    /**
     * @example {\"duration\":2420,\"endTime\":1651717326805,\"hangUpDirection\":\"client\",\"hasLastPlaybackCompleted\":true,\"startTime\":1651717324385}
     *
     * @var string
     */
    public $actionParams;

    /**
     * @example true
     *
     * @var bool
     */
    public $interruptible;

    /**
     * @example 9DB8BA95-4513-54B9-9C67-A28909CFB4AD
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $textResponse;
    protected $_name = [
        'action'        => 'Action',
        'actionParams'  => 'ActionParams',
        'interruptible' => 'Interruptible',
        'requestId'     => 'RequestId',
        'textResponse'  => 'TextResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->interruptible) {
            $res['Interruptible'] = $this->interruptible;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->textResponse) {
            $res['TextResponse'] = $this->textResponse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DialogueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['Interruptible'])) {
            $model->interruptible = $map['Interruptible'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TextResponse'])) {
            $model->textResponse = $map['TextResponse'];
        }

        return $model;
    }
}
