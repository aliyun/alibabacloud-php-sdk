<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest;

use AlibabaCloud\Dara\Model;

class remindNotifyConfigs extends Model
{
    /**
     * @var string
     */
    public $dingNotify;

    /**
     * @var string
     */
    public $sendTodoApn;
    protected $_name = [
        'dingNotify' => 'dingNotify',
        'sendTodoApn' => 'sendTodoApn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingNotify) {
            $res['dingNotify'] = $this->dingNotify;
        }

        if (null !== $this->sendTodoApn) {
            $res['sendTodoApn'] = $this->sendTodoApn;
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
        if (isset($map['dingNotify'])) {
            $model->dingNotify = $map['dingNotify'];
        }

        if (isset($map['sendTodoApn'])) {
            $model->sendTodoApn = $map['sendTodoApn'];
        }

        return $model;
    }
}
