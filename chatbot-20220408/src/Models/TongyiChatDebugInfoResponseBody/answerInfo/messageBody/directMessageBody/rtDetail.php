<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\messageBody\directMessageBody;

use AlibabaCloud\Dara\Model;

class rtDetail extends Model
{
    /**
     * @var mixed
     */
    public $sentenceRtList;

    /**
     * @var mixed
     */
    public $transitionRtList;
    protected $_name = [
        'sentenceRtList' => 'SentenceRtList',
        'transitionRtList' => 'TransitionRtList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sentenceRtList) {
            $res['SentenceRtList'] = $this->sentenceRtList;
        }

        if (null !== $this->transitionRtList) {
            $res['TransitionRtList'] = $this->transitionRtList;
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
        if (isset($map['SentenceRtList'])) {
            $model->sentenceRtList = $map['SentenceRtList'];
        }

        if (isset($map['TransitionRtList'])) {
            $model->transitionRtList = $map['TransitionRtList'];
        }

        return $model;
    }
}
