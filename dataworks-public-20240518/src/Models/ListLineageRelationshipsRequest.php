<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListLineageRelationshipsRequest extends Model
{
    /**
     * @var string
     */
    public $dstEntityId;

    /**
     * @var string
     */
    public $dstEntityName;

    /**
     * @var string
     */
    public $order;

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
    public $sortBy;

    /**
     * @var string
     */
    public $srcEntityId;

    /**
     * @var string
     */
    public $srcEntityName;
    protected $_name = [
        'dstEntityId' => 'DstEntityId',
        'dstEntityName' => 'DstEntityName',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'srcEntityId' => 'SrcEntityId',
        'srcEntityName' => 'SrcEntityName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstEntityId) {
            $res['DstEntityId'] = $this->dstEntityId;
        }

        if (null !== $this->dstEntityName) {
            $res['DstEntityName'] = $this->dstEntityName;
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

        if (null !== $this->srcEntityId) {
            $res['SrcEntityId'] = $this->srcEntityId;
        }

        if (null !== $this->srcEntityName) {
            $res['SrcEntityName'] = $this->srcEntityName;
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
        if (isset($map['DstEntityId'])) {
            $model->dstEntityId = $map['DstEntityId'];
        }

        if (isset($map['DstEntityName'])) {
            $model->dstEntityName = $map['DstEntityName'];
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

        if (isset($map['SrcEntityId'])) {
            $model->srcEntityId = $map['SrcEntityId'];
        }

        if (isset($map['SrcEntityName'])) {
            $model->srcEntityName = $map['SrcEntityName'];
        }

        return $model;
    }
}
