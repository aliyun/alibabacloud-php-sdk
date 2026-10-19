<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SubmitTodoRequest;

use AlibabaCloud\Dara\Model;

class answers extends Model
{
    /**
     * @var string[]
     */
    public $answer;

    /**
     * @var string
     */
    public $question;
    protected $_name = [
        'answer' => 'answer',
        'question' => 'question',
    ];

    public function validate()
    {
        if (\is_array($this->answer)) {
            Model::validateArray($this->answer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            if (\is_array($this->answer)) {
                $res['answer'] = [];
                $n1 = 0;
                foreach ($this->answer as $item1) {
                    $res['answer'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->question) {
            $res['question'] = $this->question;
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
        if (isset($map['answer'])) {
            if (!empty($map['answer'])) {
                $model->answer = [];
                $n1 = 0;
                foreach ($map['answer'] as $item1) {
                    $model->answer[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        return $model;
    }
}
