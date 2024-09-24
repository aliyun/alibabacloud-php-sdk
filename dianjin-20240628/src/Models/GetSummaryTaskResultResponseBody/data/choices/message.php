<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponseBody\data\choices;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example assistant
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->toolCalls) {
            $res['toolCalls'] = $this->toolCalls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return message
     */
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
                $model->toolCalls = $map['toolCalls'];
            }
        }

        return $model;
    }
}
