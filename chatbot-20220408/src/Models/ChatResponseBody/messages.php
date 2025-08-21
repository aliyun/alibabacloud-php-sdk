<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\knowledge;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\recommends;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\text;

class messages extends Model
{
    /**
     * @var string
     */
    public $answerSource;

    /**
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
        'answerType' => 'AnswerType',
        'knowledge' => 'Knowledge',
        'recommends' => 'Recommends',
        'text' => 'Text',
        'title' => 'Title',
        'voiceTitle' => 'VoiceTitle',
    ];

    public function validate()
    {
        if (null !== $this->knowledge) {
            $this->knowledge->validate();
        }
        if (\is_array($this->recommends)) {
            Model::validateArray($this->recommends);
        }
        if (null !== $this->text) {
            $this->text->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
        }

        if (null !== $this->answerType) {
            $res['AnswerType'] = $this->answerType;
        }

        if (null !== $this->knowledge) {
            $res['Knowledge'] = null !== $this->knowledge ? $this->knowledge->toArray($noStream) : $this->knowledge;
        }

        if (null !== $this->recommends) {
            if (\is_array($this->recommends)) {
                $res['Recommends'] = [];
                $n1 = 0;
                foreach ($this->recommends as $item1) {
                    $res['Recommends'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = null !== $this->text ? $this->text->toArray($noStream) : $this->text;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->voiceTitle) {
            $res['VoiceTitle'] = $this->voiceTitle;
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
                $n1 = 0;
                foreach ($map['Recommends'] as $item1) {
                    $model->recommends[$n1] = recommends::fromMap($item1);
                    ++$n1;
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
