<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\knowledge;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\recommends;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\text;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @example KNOWLEDGE
     *
     * @var string
     */
    public $answerSource;

    /**
     * @example Text
     *
     * @var string
     */
    public $answerType;

    /**
     * @var knowledge
     */
    public $knowledge;

    /**
     * @var recommends[]
     */
    public $recommends;

    /**
     * @var text
     */
    public $text;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $voiceTitle;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'answerType'   => 'AnswerType',
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
