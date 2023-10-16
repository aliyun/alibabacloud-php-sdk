<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelDetailResponseBody\moudle;
use AlibabaCloud\Tea\Model;

class QueryTrademarkModelDetailResponseBody extends Model
{
    /**
     * @var moudle
     */
    public $moudle;
    protected $_name = [
        'moudle' => 'Moudle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moudle) {
            $res['Moudle'] = null !== $this->moudle ? $this->moudle->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkModelDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Moudle'])) {
            $model->moudle = moudle::fromMap($map['Moudle']);
        }

        return $model;
    }
}
