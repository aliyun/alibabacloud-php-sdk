<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SubmitTodoRequest\answers;

class SubmitTodoRequest extends Model
{
    /**
     * @var answers[]
     */
    public $answers;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $todoId;
    protected $_name = [
        'answers' => 'answers',
        'tenantId' => 'tenantId',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        if (\is_array($this->answers)) {
            Model::validateArray($this->answers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answers) {
            if (\is_array($this->answers)) {
                $res['answers'] = [];
                $n1 = 0;
                foreach ($this->answers as $item1) {
                    $res['answers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->todoId) {
            $res['todoId'] = $this->todoId;
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
        if (isset($map['answers'])) {
            if (!empty($map['answers'])) {
                $model->answers = [];
                $n1 = 0;
                foreach ($map['answers'] as $item1) {
                    $model->answers[$n1] = answers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['todoId'])) {
            $model->todoId = $map['todoId'];
        }

        return $model;
    }
}
