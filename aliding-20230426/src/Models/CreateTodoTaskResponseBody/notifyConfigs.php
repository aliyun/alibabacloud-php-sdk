<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody;

use AlibabaCloud\Dara\Model;

class notifyConfigs extends Model
{
    /**
     * @var string
     */
    public $dingNotify;
    protected $_name = [
        'dingNotify' => 'dingNotify',
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

        return $model;
    }
}
