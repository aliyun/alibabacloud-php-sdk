<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspacesRequest extends Model
{
    /**
     * @description 是否返回详情(Quotas, Members)
     *
     * @var bool
     */
    public $needDetail;

    /**
     * @description 排列顺序: desc 或者 asc
     *
     * @var string
     */
    public $order;

    /**
     * @description 查询第几页数据,最小值为1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 设置查询的分页大小,最小值为1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 返回结果的排序字段名，枚举值
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'needDetail' => 'NeedDetail',
        'order'      => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needDetail) {
            $res['NeedDetail'] = $this->needDetail;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedDetail'])) {
            $model->needDetail = $map['NeedDetail'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
