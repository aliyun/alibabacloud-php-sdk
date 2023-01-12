<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryBizItemListV2Request extends Model
{
    /**
     * @example LMALL20210802****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 5001****
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var int[]
     */
    public $itemIds;

    /**
     * @var string[]
     */
    public $lmItemIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example db18296d3e56417c8817acf43bfd****
     *
     * @var string
     */
    public $subBizId;

    /**
     * @example 214123553****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'      => 'BizId',
        'categoryId' => 'CategoryId',
        'itemIds'    => 'ItemIds',
        'lmItemIds'  => 'LmItemIds',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'subBizId'   => 'SubBizId',
        'userId'     => 'UserId',
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
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->lmItemIds) {
            $res['LmItemIds'] = $this->lmItemIds;
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
     * @return QueryBizItemListV2Request
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
            if (!empty($map['ItemIds'])) {
                $model->itemIds = $map['ItemIds'];
            }
        }
        if (isset($map['LmItemIds'])) {
            if (!empty($map['LmItemIds'])) {
                $model->lmItemIds = $map['LmItemIds'];
            }
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
