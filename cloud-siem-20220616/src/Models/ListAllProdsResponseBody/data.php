<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAllProdsResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAllProdsResponseBody\data\prodList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The cloud services.
     *
     * @example 1
     *
     * @var prodList[]
     */
    public $prodList;

    /**
     * @description The total number of logs.
     *
     * @example 19
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'prodList'    => 'ProdList',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->prodList) {
            $res['ProdList'] = [];
            if (null !== $this->prodList && \is_array($this->prodList)) {
                $n = 0;
                foreach ($this->prodList as $item) {
                    $res['ProdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProdList'])) {
            if (!empty($map['ProdList'])) {
                $model->prodList = [];
                $n               = 0;
                foreach ($map['ProdList'] as $item) {
                    $model->prodList[$n++] = null !== $item ? prodList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
