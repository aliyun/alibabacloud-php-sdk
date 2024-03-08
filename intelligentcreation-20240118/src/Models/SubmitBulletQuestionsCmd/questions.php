<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\SubmitBulletQuestionsCmd;

use AlibabaCloud\Tea\Model;

class questions extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'content'  => 'content',
        'id'       => 'id',
        'time'     => 'time',
        'username' => 'username',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return questions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
