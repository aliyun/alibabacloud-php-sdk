<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\data;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $role;

    /**
     * @var mixed
     */
    public $content;
    protected $_name = [
        'role' => 'role',
        'content' => 'content',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
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
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        return $model;
    }
}
