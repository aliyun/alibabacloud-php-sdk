<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListItemsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $strategyUsed;

    /**
     * @var bool
     */
    public $withInvalidDetail;
    protected $_name = [
        'page'              => 'page',
        'size'              => 'size',
        'strategyUsed'      => 'strategyUsed',
        'withInvalidDetail' => 'withInvalidDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->strategyUsed) {
            $res['strategyUsed'] = $this->strategyUsed;
        }
        if (null !== $this->withInvalidDetail) {
            $res['withInvalidDetail'] = $this->withInvalidDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['strategyUsed'])) {
            $model->strategyUsed = $map['strategyUsed'];
        }
        if (isset($map['withInvalidDetail'])) {
            $model->withInvalidDetail = $map['withInvalidDetail'];
        }

        return $model;
    }
}
