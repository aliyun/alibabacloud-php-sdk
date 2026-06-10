<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\answerReferenceInfo;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\messageBody;

class answerInfo extends Model
{
    /**
     * @var answerReferenceInfo
     */
    public $answerReferenceInfo;

    /**
     * @var messageBody
     */
    public $messageBody;
    protected $_name = [
        'answerReferenceInfo' => 'AnswerReferenceInfo',
        'messageBody' => 'MessageBody',
    ];

    public function validate()
    {
        if (null !== $this->answerReferenceInfo) {
            $this->answerReferenceInfo->validate();
        }
        if (null !== $this->messageBody) {
            $this->messageBody->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerReferenceInfo) {
            $res['AnswerReferenceInfo'] = null !== $this->answerReferenceInfo ? $this->answerReferenceInfo->toArray($noStream) : $this->answerReferenceInfo;
        }

        if (null !== $this->messageBody) {
            $res['MessageBody'] = null !== $this->messageBody ? $this->messageBody->toArray($noStream) : $this->messageBody;
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
        if (isset($map['AnswerReferenceInfo'])) {
            $model->answerReferenceInfo = answerReferenceInfo::fromMap($map['AnswerReferenceInfo']);
        }

        if (isset($map['MessageBody'])) {
            $model->messageBody = messageBody::fromMap($map['MessageBody']);
        }

        return $model;
    }
}
