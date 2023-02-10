<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\ListBatchTasksResponseBody;

use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListBatchTasksResponseBody\data\increments;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var increments[]
     */
    public $increments;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2000
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'increments' => 'Increments',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->increments) {
            $res['Increments'] = [];
            if (null !== $this->increments && \is_array($this->increments)) {
                $n = 0;
                foreach ($this->increments as $item) {
                    $res['Increments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Increments'])) {
            if (!empty($map['Increments'])) {
                $model->increments = [];
                $n                 = 0;
                foreach ($map['Increments'] as $item) {
                    $model->increments[$n++] = null !== $item ? increments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
