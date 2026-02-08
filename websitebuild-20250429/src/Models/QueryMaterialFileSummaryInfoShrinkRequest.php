<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class QueryMaterialFileSummaryInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderColumn;

    /**
     * @var string
     */
    public $orderType;

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
    public $statusListShrink;

    /**
     * @var string
     */
    public $typeListShrink;
    protected $_name = [
        'bizId' => 'BizId',
        'directoryId' => 'DirectoryId',
        'name' => 'Name',
        'orderColumn' => 'OrderColumn',
        'orderType' => 'OrderType',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'statusListShrink' => 'StatusList',
        'typeListShrink' => 'TypeList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->orderColumn) {
            $res['OrderColumn'] = $this->orderColumn;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->statusListShrink) {
            $res['StatusList'] = $this->statusListShrink;
        }

        if (null !== $this->typeListShrink) {
            $res['TypeList'] = $this->typeListShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OrderColumn'])) {
            $model->orderColumn = $map['OrderColumn'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StatusList'])) {
            $model->statusListShrink = $map['StatusList'];
        }

        if (isset($map['TypeList'])) {
            $model->typeListShrink = $map['TypeList'];
        }

        return $model;
    }
}
