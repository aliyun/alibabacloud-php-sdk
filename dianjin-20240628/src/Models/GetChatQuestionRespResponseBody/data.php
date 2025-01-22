<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespResponseBody\data\questionList;

class data extends Model
{
    /**
     * @var string
     */
    public $currentState;
    /**
     * @var questionList[]
     */
    public $questionList;
    protected $_name = [
        'currentState' => 'currentState',
        'questionList' => 'questionList',
    ];

    public function validate()
    {
        if (\is_array($this->questionList)) {
            Model::validateArray($this->questionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentState) {
            $res['currentState'] = $this->currentState;
        }

        if (null !== $this->questionList) {
            if (\is_array($this->questionList)) {
                $res['questionList'] = [];
                $n1                  = 0;
                foreach ($this->questionList as $item1) {
                    $res['questionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['currentState'])) {
            $model->currentState = $map['currentState'];
        }

        if (isset($map['questionList'])) {
            if (!empty($map['questionList'])) {
                $model->questionList = [];
                $n1                  = 0;
                foreach ($map['questionList'] as $item1) {
                    $model->questionList[$n1++] = questionList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
