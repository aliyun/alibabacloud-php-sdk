<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages;

use AlibabaCloud\Tea\Model;

class cardList extends Model
{
    /**
     * @description 区分答案类型：cardAnswer
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description 消息类型：card
     *
     * @var string
     */
    public $msgType;

    /**
     * @description 平台类型：beebot
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'msgType'      => 'MsgType',
        'platform'     => 'Platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
