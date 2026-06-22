<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class ReceiveMessageRequest extends Model
{
    /**
     * @var int
     */
    public $waitseconds;
    protected $_name = [
        'waitseconds' => 'waitseconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->waitseconds) {
            $res['waitseconds'] = $this->waitseconds;
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
        if (isset($map['waitseconds'])) {
            $model->waitseconds = $map['waitseconds'];
        }

        return $model;
    }
}
