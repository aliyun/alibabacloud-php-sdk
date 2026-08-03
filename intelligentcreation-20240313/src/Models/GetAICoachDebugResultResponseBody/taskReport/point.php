<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport\point\answerList;

class point extends Model
{
    /**
     * @var answerList[]
     */
    public $answerList;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'answerList' => 'answerList',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->answerList)) {
            Model::validateArray($this->answerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerList) {
            if (\is_array($this->answerList)) {
                $res['answerList'] = [];
                $n1 = 0;
                foreach ($this->answerList as $item1) {
                    $res['answerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['answerList'])) {
            if (!empty($map['answerList'])) {
                $model->answerList = [];
                $n1 = 0;
                foreach ($map['answerList'] as $item1) {
                    $model->answerList[$n1] = answerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
