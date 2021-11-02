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
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $itemIdsShrink;

    /**
     * @var string
     */
    public $lmItemIdsShrink;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $subBizId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'           => 'BizId',
        'categoryId'      => 'CategoryId',
        'itemIdsShrink'   => 'ItemIds',
        'lmItemIdsShrink' => 'LmItemIds',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'subBizId'        => 'SubBizId',
        'userId'          => 'UserId',
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
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->itemIdsShrink) {
            $res['ItemIds'] = $this->itemIdsShrink;
        }
        if (null !== $this->lmItemIdsShrink) {
            $res['LmItemIds'] = $this->lmItemIdsShrink;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIdsShrink = $map['ItemIds'];
        }
        if (isset($map['LmItemIds'])) {
            $model->lmItemIdsShrink = $map['LmItemIds'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
