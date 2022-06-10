<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\cardList;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\knowledge;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\recommends;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\text;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @description 当AnswerType为Recommend时，此字段表示推荐的答案来源
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description 本条消息的类型
     *
     * @var string
     */
    public $answerType;

    /**
     * @description 当AnswerType为CardAnswer时，此字段包含机器人返回的Card的列表
     *
     * @var cardList[]
     */
    public $cardList;

    /**
     * @description 当AnswerType为Knowledge时，此字段包含机器人返回的Knowledge对象
     *
     * @var knowledge
     */
    public $knowledge;

    /**
     * @description 当AnswerType为Recommend时，此字段包含机器人返回的Recommend的列表
     *
     * @var recommends[]
     */
    public $recommends;

    /**
     * @description 当AnswerType为Text时，此字段包含机器人返回的Text对象
     *
     * @var text
     */
    public $text;

    /**
     * @description 当AnswerType为Recommend时，此字段表示推荐或者反问的标题话术
     *
     * @var string
     */
    public $title;

    /**
     * @description 当AnswerType为Recommend时，并且问答的机器人为语音机器人，此字段表示列表型答案在语音场景渲染之后的答案内容
     *
     * @var string
     */
    public $voiceTitle;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'answerType'   => 'AnswerType',
        'cardList'     => 'CardList',
        'knowledge'    => 'Knowledge',
        'recommends'   => 'Recommends',
        'text'         => 'Text',
        'title'        => 'Title',
        'voiceTitle'   => 'VoiceTitle',
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
        if (null !== $this->answerType) {
            $res['AnswerType'] = $this->answerType;
        }
        if (null !== $this->cardList) {
            $res['CardList'] = [];
            if (null !== $this->cardList && \is_array($this->cardList)) {
                $n = 0;
                foreach ($this->cardList as $item) {
                    $res['CardList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->knowledge) {
            $res['Knowledge'] = null !== $this->knowledge ? $this->knowledge->toMap() : null;
        }
        if (null !== $this->recommends) {
            $res['Recommends'] = [];
            if (null !== $this->recommends && \is_array($this->recommends)) {
                $n = 0;
                foreach ($this->recommends as $item) {
                    $res['Recommends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->text) {
            $res['Text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->voiceTitle) {
            $res['VoiceTitle'] = $this->voiceTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['AnswerType'])) {
            $model->answerType = $map['AnswerType'];
        }
        if (isset($map['CardList'])) {
            if (!empty($map['CardList'])) {
                $model->cardList = [];
                $n               = 0;
                foreach ($map['CardList'] as $item) {
                    $model->cardList[$n++] = null !== $item ? cardList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Knowledge'])) {
            $model->knowledge = knowledge::fromMap($map['Knowledge']);
        }
        if (isset($map['Recommends'])) {
            if (!empty($map['Recommends'])) {
                $model->recommends = [];
                $n                 = 0;
                foreach ($map['Recommends'] as $item) {
                    $model->recommends[$n++] = null !== $item ? recommends::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Text'])) {
            $model->text = text::fromMap($map['Text']);
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VoiceTitle'])) {
            $model->voiceTitle = $map['VoiceTitle'];
        }

        return $model;
    }
}
