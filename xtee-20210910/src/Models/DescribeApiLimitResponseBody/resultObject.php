<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiLimitResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var bool
     */
    public $limit;

    /**
     * @var int
     */
    public $maxTotalItem;

    /**
     * @var int
     */
    public $totalItem;
    protected $_name = [
        'limit'        => 'limit',
        'maxTotalItem' => 'maxTotalItem',
        'totalItem'    => 'totalItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->maxTotalItem) {
            $res['maxTotalItem'] = $this->maxTotalItem;
        }
        if (null !== $this->totalItem) {
            $res['totalItem'] = $this->totalItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['maxTotalItem'])) {
            $model->maxTotalItem = $map['maxTotalItem'];
        }
        if (isset($map['totalItem'])) {
            $model->totalItem = $map['totalItem'];
        }

        return $model;
    }
}
