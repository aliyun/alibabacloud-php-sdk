<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetCursorResponseBody extends Model
{
    /**
     * @description 游标位置。
     *
     * @var string
     */
    public $cursor;
    protected $_name = [
        'cursor' => 'cursor',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCursorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }

        return $model;
    }
}
