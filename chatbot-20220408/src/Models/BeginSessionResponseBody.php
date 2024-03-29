<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class BeginSessionResponseBody extends Model
{
    /**
     * @var int
     */
    public $asrMaxEndSilence;

    /**
     * @var bool
     */
    public $interruptible;

    /**
     * @example 149C7528-C104-1B50-A4F9-0C5907A8AD9D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 静默超时时间
     *
     * @example 5
     *
     * @var int
     */
    public $silenceReplyTimeout;

    /**
     * @example 智能对话机器人为您服务，请问有什么可以帮您？
     *
     * @var string
     */
    public $welcomeMessage;
    protected $_name = [
        'asrMaxEndSilence'    => 'AsrMaxEndSilence',
        'interruptible'       => 'Interruptible',
        'requestId'           => 'RequestId',
        'silenceReplyTimeout' => 'SilenceReplyTimeout',
        'welcomeMessage'      => 'WelcomeMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrMaxEndSilence) {
            $res['AsrMaxEndSilence'] = $this->asrMaxEndSilence;
        }
        if (null !== $this->interruptible) {
            $res['Interruptible'] = $this->interruptible;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->silenceReplyTimeout) {
            $res['SilenceReplyTimeout'] = $this->silenceReplyTimeout;
        }
        if (null !== $this->welcomeMessage) {
            $res['WelcomeMessage'] = $this->welcomeMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeginSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrMaxEndSilence'])) {
            $model->asrMaxEndSilence = $map['AsrMaxEndSilence'];
        }
        if (isset($map['Interruptible'])) {
            $model->interruptible = $map['Interruptible'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SilenceReplyTimeout'])) {
            $model->silenceReplyTimeout = $map['SilenceReplyTimeout'];
        }
        if (isset($map['WelcomeMessage'])) {
            $model->welcomeMessage = $map['WelcomeMessage'];
        }

        return $model;
    }
}
