<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListBackupsRequest extends Model
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
    public $orderMode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $metadataType;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $backupId;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'limit'           => 'Limit',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'currentSize'     => 'CurrentSize',
        'pageCount'       => 'PageCount',
        'orderMode'       => 'OrderMode',
        'id'              => 'Id',
        'bizId'           => 'BizId',
        'metadataType'    => 'MetadataType',
        'serviceName'     => 'ServiceName',
        'backupPlanId'    => 'BackupPlanId',
        'clusterId'       => 'ClusterId',
        'status'          => 'Status',
        'backupId'        => 'BackupId',
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
        if (null !== $this->orderMode) {
            $res['OrderMode'] = $this->orderMode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->metadataType) {
            $res['MetadataType'] = $this->metadataType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBackupsRequest
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
        if (isset($map['OrderMode'])) {
            $model->orderMode = $map['OrderMode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['MetadataType'])) {
            $model->metadataType = $map['MetadataType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BackupId'])) {
            if (!empty($map['BackupId'])) {
                $model->backupId = $map['BackupId'];
            }
        }

        return $model;
    }
}
