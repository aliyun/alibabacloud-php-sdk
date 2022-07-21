<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListCodeSourcesRequest extends Model
{
    /**
     * @description 代码源显示名称，支持模糊匹配
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 排序顺序, 枚举值 desc 或者 asc
     *
     * @var string
     */
    public $order;

    /**
     * @description 取第几页的数据
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 用于排序的字段名，可选字段名：DisplayName、GmtCreateTime、 GmtModifyTime
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'displayName' => 'DisplayName',
        'order'       => 'Order',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'sortBy'      => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
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
     * @return ListCodeSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
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
