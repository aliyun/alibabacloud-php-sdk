<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryProductListRequest extends Model
{
    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to return the total number of services. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $queryTotalCount;
    protected $_name = [
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'queryTotalCount' => 'QueryTotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryTotalCount) {
            $res['QueryTotalCount'] = $this->queryTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProductListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryTotalCount'])) {
            $model->queryTotalCount = $map['QueryTotalCount'];
        }

        return $model;
    }
}
