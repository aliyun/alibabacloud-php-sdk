<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeDirectoriesRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $noPagination;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortDirection;
    protected $_name = [
        'groupId'       => 'GroupId',
        'noPagination'  => 'NoPagination',
        'ownerId'       => 'OwnerId',
        'pageNum'       => 'PageNum',
        'pageSize'      => 'PageSize',
        'parentId'      => 'ParentId',
        'sortBy'        => 'SortBy',
        'sortDirection' => 'SortDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->noPagination) {
            $res['NoPagination'] = $this->noPagination;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortDirection) {
            $res['SortDirection'] = $this->sortDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirectoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['NoPagination'])) {
            $model->noPagination = $map['NoPagination'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortDirection'])) {
            $model->sortDirection = $map['SortDirection'];
        }

        return $model;
    }
}
