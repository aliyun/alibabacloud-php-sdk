<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduTutor\V20250707\Models\AnswerSSERequest;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string[][]
     */
    public $content;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'content',
        'role' => 'role',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    if (\is_array($item1)) {
                        $res['content'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['content'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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
        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['content'] as $item1) {
                    if (!empty($item1)) {
                        $model->content[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->content[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
