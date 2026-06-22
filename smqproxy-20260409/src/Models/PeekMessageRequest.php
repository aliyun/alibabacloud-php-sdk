<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class PeekMessageRequest extends Model
{
    /**
     * @var bool
     */
    public $peekonly;
    protected $_name = [
        'peekonly' => 'peekonly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->peekonly) {
            $res['peekonly'] = $this->peekonly;
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
        if (isset($map['peekonly'])) {
            $model->peekonly = $map['peekonly'];
        }

        return $model;
    }
}
