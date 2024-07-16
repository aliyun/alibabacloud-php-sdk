<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponseBody;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponseBody\data\indices;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var indices[]
     */
    public $indices;

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
     * @example 48
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'indices'    => 'Indices',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indices) {
            $res['Indices'] = [];
            if (null !== $this->indices && \is_array($this->indices)) {
                $n = 0;
                foreach ($this->indices as $item) {
                    $res['Indices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Indices'])) {
            if (!empty($map['Indices'])) {
                $model->indices = [];
                $n              = 0;
                foreach ($map['Indices'] as $item) {
                    $model->indices[$n++] = null !== $item ? indices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
