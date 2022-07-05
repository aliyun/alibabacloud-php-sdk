<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetCursorTimeResponseBody extends Model
{
    /**
     * @description Cursor的服务端时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
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
