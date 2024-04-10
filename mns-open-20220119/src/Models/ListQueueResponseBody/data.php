<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListQueueResponseBody;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListQueueResponseBody\data\pageData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var pageData[]
     */
    public $pageData;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 3
     *
     * @var int
     */
    public $pages;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @example 130
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'pageData' => 'PageData',
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
        'pages'    => 'Pages',
        'size'     => 'Size',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageData) {
            $res['PageData'] = [];
            if (null !== $this->pageData && \is_array($this->pageData)) {
                $n = 0;
                foreach ($this->pageData as $item) {
                    $res['PageData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['PageData'])) {
            if (!empty($map['PageData'])) {
                $model->pageData = [];
                $n               = 0;
                foreach ($map['PageData'] as $item) {
                    $model->pageData[$n++] = null !== $item ? pageData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
