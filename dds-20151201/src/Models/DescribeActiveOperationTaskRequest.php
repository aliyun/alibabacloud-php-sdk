<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTaskRequest extends Model
{
    /**
     * @description Specifies whether to return the historical tasks.
     *
     * Default value: 0. Valid values:
     *
     * - 0: returns the current task.
     * - 1: returns the historical tasks.
     *
     * @example 0
     *
     * @var int
     */
    public $isHistory;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Specify a value greater than 10. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the product.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $productId;

    /**
     * @description The region ID of the instance.
     *
     * >  If you set the Region parameter to **all**, all tasks created within your Alibaba Cloud account are queried. In this case, you must set the **taskType** parameter to **all**.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the task. Valid values:
     *
     * - rds_apsaradb_ha: master-replica switchover
     * - rds_apsaradb_transfer: instance migration
     * - rds_apsaradb_upgrade: minor version update
     *
     * This parameter is required.
     *
     * @example rds_apsaradb_ha
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'isHistory' => 'IsHistory',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productId' => 'ProductId',
        'region' => 'Region',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'taskType' => 'TaskType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isHistory) {
            $res['IsHistory'] = $this->isHistory;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveOperationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsHistory'])) {
            $model->isHistory = $map['IsHistory'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
