<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[][]
     */
    public $items;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $total;

    /**
     * @var int
     */
    public $page;
    protected $_name = [
        'items'    => 'Items',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
        'page'     => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = $map['Items'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        return $model;
    }
}
