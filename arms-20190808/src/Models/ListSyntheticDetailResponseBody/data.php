<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of results.
     *
     * @var mixed[][]
     */
    public $items;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description A reserved field.
     *
     * @example null
     *
     * @var int
     */
    public $taskCreateTime;

    /**
     * @description The total number of entries.
     *
     * @example 12
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'items' => 'Items',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'taskCreateTime' => 'TaskCreateTime',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskCreateTime) {
            $res['TaskCreateTime'] = $this->taskCreateTime;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskCreateTime'])) {
            $model->taskCreateTime = $map['TaskCreateTime'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
