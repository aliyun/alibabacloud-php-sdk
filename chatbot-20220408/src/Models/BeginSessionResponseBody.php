<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $silenceReplyTimeout;

    /**
     * @var string
     */
    public $welcomeMessage;
    protected $_name = [
        'asrMaxEndSilence' => 'AsrMaxEndSilence',
        'interruptible' => 'Interruptible',
        'requestId' => 'RequestId',
        'silenceReplyTimeout' => 'SilenceReplyTimeout',
        'welcomeMessage' => 'WelcomeMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
