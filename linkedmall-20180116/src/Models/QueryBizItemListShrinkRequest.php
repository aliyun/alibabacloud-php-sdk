<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryBizItemListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $subBizId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $lmItemIdsShrink;

    /**
     * @var string
     */
    public $itemIdsShrink;

    /**
     * @var int
     */
    public $categoryId;
    protected $_name = [
        'bizId'           => 'BizId',
        'subBizId'        => 'SubBizId',
        'pageSize'        => 'PageSize',
        'pageNumber'      => 'PageNumber',
        'userId'          => 'UserId',
        'lmItemIdsShrink' => 'LmItemIds',
        'itemIdsShrink'   => 'ItemIds',
        'categoryId'      => 'CategoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->lmItemIdsShrink) {
            $res['LmItemIds'] = $this->lmItemIdsShrink;
        }
        if (null !== $this->itemIdsShrink) {
            $res['ItemIds'] = $this->itemIdsShrink;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBizItemListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['LmItemIds'])) {
            $model->lmItemIdsShrink = $map['LmItemIds'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIdsShrink = $map['ItemIds'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        return $model;
    }
}
