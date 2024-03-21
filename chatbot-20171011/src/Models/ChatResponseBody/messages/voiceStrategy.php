<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages;

use AlibabaCloud\Tea\Model;

class voiceStrategy extends Model
{
    /**
     * @var string
     */
    public $asrMaxEndSilence;

    /**
     * @var bool
     */
    public $collectNumber;

    /**
     * @var bool
     */
    public $hangUp;

    /**
     * @var bool
     */
    public $interruptible;

    /**
     * @var int
     */
    public $maxDigits;

    /**
     * @var int
     */
    public $replyTimeout;

    /**
     * @var string
     */
    public $terminator;
    protected $_name = [
        'asrMaxEndSilence' => 'AsrMaxEndSilence',
        'collectNumber'    => 'CollectNumber',
        'hangUp'           => 'HangUp',
        'interruptible'    => 'Interruptible',
        'maxDigits'        => 'MaxDigits',
        'replyTimeout'     => 'ReplyTimeout',
        'terminator'       => 'Terminator',
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
        if (null !== $this->collectNumber) {
            $res['CollectNumber'] = $this->collectNumber;
        }
        if (null !== $this->hangUp) {
            $res['HangUp'] = $this->hangUp;
        }
        if (null !== $this->interruptible) {
            $res['Interruptible'] = $this->interruptible;
        }
        if (null !== $this->maxDigits) {
            $res['MaxDigits'] = $this->maxDigits;
        }
        if (null !== $this->replyTimeout) {
            $res['ReplyTimeout'] = $this->replyTimeout;
        }
        if (null !== $this->terminator) {
            $res['Terminator'] = $this->terminator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return voiceStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrMaxEndSilence'])) {
            $model->asrMaxEndSilence = $map['AsrMaxEndSilence'];
        }
        if (isset($map['CollectNumber'])) {
            $model->collectNumber = $map['CollectNumber'];
        }
        if (isset($map['HangUp'])) {
            $model->hangUp = $map['HangUp'];
        }
        if (isset($map['Interruptible'])) {
            $model->interruptible = $map['Interruptible'];
        }
        if (isset($map['MaxDigits'])) {
            $model->maxDigits = $map['MaxDigits'];
        }
        if (isset($map['ReplyTimeout'])) {
            $model->replyTimeout = $map['ReplyTimeout'];
        }
        if (isset($map['Terminator'])) {
            $model->terminator = $map['Terminator'];
        }

        return $model;
    }
}
