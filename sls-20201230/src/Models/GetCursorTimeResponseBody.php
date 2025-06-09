<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetCursorTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $cursorTime;
    protected $_name = [
        'cursorTime' => 'cursor_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cursorTime) {
            $res['cursor_time'] = $this->cursorTime;
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
        if (isset($map['cursor_time'])) {
            $model->cursorTime = $map['cursor_time'];
        }

        return $model;
    }
}
