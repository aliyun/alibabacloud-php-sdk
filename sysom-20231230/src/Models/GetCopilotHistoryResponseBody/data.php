<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetCopilotHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $time;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'content' => 'content',
        'time'    => 'time',
        'user'    => 'user',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->user) {
            $res['user'] = $this->user;
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

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
