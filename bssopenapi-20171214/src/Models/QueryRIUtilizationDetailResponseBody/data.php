<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponseBody\data\detailList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detailList
     */
    public $detailList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'detailList' => 'DetailList',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailList) {
            $res['DetailList'] = null !== $this->detailList ? $this->detailList->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
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
        if (isset($map['DetailList'])) {
            $model->detailList = detailList::fromMap($map['DetailList']);
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
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
