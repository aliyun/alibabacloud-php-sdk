<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTtsQuestionByGroupIdResponseBody;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTtsQuestionByGroupIdResponseBody\data\questions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 47584ba4-9781-496b-8e6f-c8525a213***
     *
     * @var string
     */
    public $groupId;

    /**
     * @var questions[]
     */
    public $questions;
    protected $_name = [
        'groupId'   => 'GroupId',
        'questions' => 'Questions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->questions) {
            $res['Questions'] = [];
            if (null !== $this->questions && \is_array($this->questions)) {
                $n = 0;
                foreach ($this->questions as $item) {
                    $res['Questions'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Questions'])) {
            if (!empty($map['Questions'])) {
                $model->questions = [];
                $n                = 0;
                foreach ($map['Questions'] as $item) {
                    $model->questions[$n++] = null !== $item ? questions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
