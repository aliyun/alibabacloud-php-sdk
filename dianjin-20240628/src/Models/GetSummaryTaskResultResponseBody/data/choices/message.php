<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponseBody\data\choices;

use AlibabaCloud\Dara\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $role;
    /**
     * @var mixed[][]
     */
    public $toolCalls;
    protected $_name = [
        'content'   => 'content',
        'role'      => 'role',
        'toolCalls' => 'toolCalls',
    ];

    public function validate()
    {
        if (\is_array($this->toolCalls)) {
            Model::validateArray($this->toolCalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->toolCalls) {
            if (\is_array($this->toolCalls)) {
                $res['toolCalls'] = [];
                $n1               = 0;
                foreach ($this->toolCalls as $item1) {
                    if (\is_array($item1)) {
                        $res['toolCalls'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['toolCalls'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['toolCalls'])) {
            if (!empty($map['toolCalls'])) {
                $model->toolCalls = [];
                $n1               = 0;
                foreach ($map['toolCalls'] as $item1) {
                    if (!empty($item1)) {
                        $model->toolCalls[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->toolCalls[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
