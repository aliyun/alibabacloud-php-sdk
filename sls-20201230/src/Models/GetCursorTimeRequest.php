<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetCursorTimeRequest extends Model
{
    /**
     * @description 游标。
     *
     * @var string
     */
    public $cursor;

    /**
     * @description 固定为 cursor_time 。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cursor' => 'cursor',
        'type'   => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCursorTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
