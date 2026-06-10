<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\messageBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\messageBody\directMessageBody\sentenceList;

class directMessageBody extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string[]
     */
    public $transitionList;

    /**
     * @var string[]
     */
    public $relatedQuestionList;

    /**
     * @var sentenceList[]
     */
    public $sentenceList;
    protected $_name = [
        'contentType' => 'ContentType',
        'transitionList' => 'TransitionList',
        'relatedQuestionList' => 'relatedQuestionList',
        'sentenceList' => 'sentenceList',
    ];

    public function validate()
    {
        if (\is_array($this->transitionList)) {
            Model::validateArray($this->transitionList);
        }
        if (\is_array($this->relatedQuestionList)) {
            Model::validateArray($this->relatedQuestionList);
        }
        if (\is_array($this->sentenceList)) {
            Model::validateArray($this->sentenceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->transitionList) {
            if (\is_array($this->transitionList)) {
                $res['TransitionList'] = [];
                $n1 = 0;
                foreach ($this->transitionList as $item1) {
                    $res['TransitionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relatedQuestionList) {
            if (\is_array($this->relatedQuestionList)) {
                $res['relatedQuestionList'] = [];
                $n1 = 0;
                foreach ($this->relatedQuestionList as $item1) {
                    $res['relatedQuestionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sentenceList) {
            if (\is_array($this->sentenceList)) {
                $res['sentenceList'] = [];
                $n1 = 0;
                foreach ($this->sentenceList as $item1) {
                    $res['sentenceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['TransitionList'])) {
            if (!empty($map['TransitionList'])) {
                $model->transitionList = [];
                $n1 = 0;
                foreach ($map['TransitionList'] as $item1) {
                    $model->transitionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['relatedQuestionList'])) {
            if (!empty($map['relatedQuestionList'])) {
                $model->relatedQuestionList = [];
                $n1 = 0;
                foreach ($map['relatedQuestionList'] as $item1) {
                    $model->relatedQuestionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sentenceList'])) {
            if (!empty($map['sentenceList'])) {
                $model->sentenceList = [];
                $n1 = 0;
                foreach ($map['sentenceList'] as $item1) {
                    $model->sentenceList[$n1] = sentenceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
