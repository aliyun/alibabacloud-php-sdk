<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListLibraryStatusRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentSize;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $orderField;

    /**
     * @var string
     */
    public $orderMode;

    /**
     * @var string
     */
    public $libraryBizId;

    /**
     * @var string
     */
    public $clusterBizId;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'limit'           => 'Limit',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'currentSize'     => 'CurrentSize',
        'pageCount'       => 'PageCount',
        'orderField'      => 'OrderField',
        'orderMode'       => 'OrderMode',
        'libraryBizId'    => 'LibraryBizId',
        'clusterBizId'    => 'ClusterBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentSize) {
            $res['CurrentSize'] = $this->currentSize;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }
        if (null !== $this->orderMode) {
            $res['OrderMode'] = $this->orderMode;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLibraryStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentSize'])) {
            $model->currentSize = $map['CurrentSize'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }
        if (isset($map['OrderMode'])) {
            $model->orderMode = $map['OrderMode'];
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }

        return $model;
    }
}
