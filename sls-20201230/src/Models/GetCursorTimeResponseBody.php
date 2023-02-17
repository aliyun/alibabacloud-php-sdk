<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetCursorTimeResponseBody extends Model
{
    /**
     * @example 1554260243
     *
     * @var string
     */
    public $cursorTime;
    protected $_name = [
        'cursorTime' => 'cursor_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cursorTime) {
            $res['cursor_time'] = $this->cursorTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCursorTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cursor_time'])) {
            $model->cursorTime = $map['cursor_time'];
        }

        return $model;
    }
}
