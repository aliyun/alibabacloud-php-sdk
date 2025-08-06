<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskRequest;

use AlibabaCloud\Dara\Model;

class notifyConfigs extends Model
{
    /**
     * @var string
     */
    public $dingNotify;
    protected $_name = [
        'dingNotify' => 'DingNotify',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingNotify) {
            $res['DingNotify'] = $this->dingNotify;
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
        if (isset($map['DingNotify'])) {
            $model->dingNotify = $map['DingNotify'];
        }

        return $model;
    }
}
