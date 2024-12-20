<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespResponseBody\data\questionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example PROCESSING
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentState) {
            $res['currentState'] = $this->currentState;
        }
        if (null !== $this->questionList) {
            $res['questionList'] = [];
            if (null !== $this->questionList && \is_array($this->questionList)) {
                $n = 0;
                foreach ($this->questionList as $item) {
                    $res['questionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentState'])) {
            $model->currentState = $map['currentState'];
        }
        if (isset($map['questionList'])) {
            if (!empty($map['questionList'])) {
                $model->questionList = [];
                $n                   = 0;
                foreach ($map['questionList'] as $item) {
                    $model->questionList[$n++] = null !== $item ? questionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
