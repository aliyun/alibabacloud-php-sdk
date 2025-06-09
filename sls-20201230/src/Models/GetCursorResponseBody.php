<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetCursorResponseBody extends Model
{
    /**
     * @var string
     */
    public $cursor;
    protected $_name = [
        'cursor' => 'cursor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
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
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }

        return $model;
    }
}
