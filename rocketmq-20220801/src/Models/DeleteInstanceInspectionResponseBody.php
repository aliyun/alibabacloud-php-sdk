<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class DeleteInstanceInspectionResponseBody extends Model
{
    /**
     * @var bool
     */
    public $ok;
    protected $_name = [
        'ok' => 'ok',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ok) {
            $res['ok'] = $this->ok;
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
        if (isset($map['ok'])) {
            $model->ok = $map['ok'];
        }

        return $model;
    }
}
