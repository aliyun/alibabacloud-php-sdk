<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaRequest extends Model
{
    /**
     * @description 实体Id
     *
     * @var string
     */
    public $entityId;

    /**
     * @description 过滤条件
     *
     * @var string
     */
    public $match;

    /**
     * @description 当前页码。默认值为1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 每页返回的数据条数。默认值为10，最大值为100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 排序字段和排序顺序。多个使用英文逗号（,）分隔
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'entityId' => 'EntityId',
        'match'    => 'Match',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy'   => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->match) {
            $res['Match'] = $this->match;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
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
     * @return SearchMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Match'])) {
            $model->match = $map['Match'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
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
