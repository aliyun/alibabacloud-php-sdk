<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeCrossBackupMetaListRequest extends Model
{
    /**
     * @description The ID of the cross-region backup file that you want to use. You can call the [DescribeCrossRegionBackups](~~121733~~) operation to query the ID of the cross-region backup file.
     *
     * @example 123456
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The name of the database that you want to query. The system implements exact match based on the value of this parameter and returns the name of the matched database and the names of the tables in the matched database.
     *
     * @example testdb1
     *
     * @var string
     */
    public $getDbName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: any non-zero positive integer.
     *
     * > This parameter only takes effect when you specify the **PageSize** parameter.
     * @example 1
     *
     * @var string
     */
    public $pageIndex;

    /**
     * @description The number of entries to return per page. Default value: **1**.
     *
     * > This parameter only takes effect when you specify the **PageIndex** parameter.
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The name of the database that you want to query. The system implements fuzzy match based on the value of this parameter and returns only the name of the matched database.
     *
     * > You can implement fuzzy match and then exact match. For example, you can set the Pattern parameter to test to query the testdb1 and testdb2 databases. Then, you can specify the **GetDbName** parameter to query only the matched database and the tables in the matched database.
     * @example test
     *
     * @var string
     */
    public $pattern;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'backupSetId'          => 'BackupSetId',
        'getDbName'            => 'GetDbName',
        'ownerId'              => 'OwnerId',
        'pageIndex'            => 'PageIndex',
        'pageSize'             => 'PageSize',
        'pattern'              => 'Pattern',
        'region'               => 'Region',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->getDbName) {
            $res['GetDbName'] = $this->getDbName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCrossBackupMetaListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['GetDbName'])) {
            $model->getDbName = $map['GetDbName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
