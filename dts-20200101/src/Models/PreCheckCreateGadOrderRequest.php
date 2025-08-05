<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class PreCheckCreateGadOrderRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $masterDatabaseName;

    /**
     * @var string
     */
    public $masterEngineArchType;

    /**
     * @var string
     */
    public $masterShardAccountName;

    /**
     * @var string
     */
    public $masterShardAccountPassword;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $slaveDatabaseName;

    /**
     * @var string
     */
    public $slaveDbInstanceId;

    /**
     * @var string
     */
    public $slaveDbInstanceRegion;

    /**
     * @var string
     */
    public $slaveEngineArchType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'masterDatabaseName' => 'MasterDatabaseName',
        'masterEngineArchType' => 'MasterEngineArchType',
        'masterShardAccountName' => 'MasterShardAccountName',
        'masterShardAccountPassword' => 'MasterShardAccountPassword',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'slaveDatabaseName' => 'SlaveDatabaseName',
        'slaveDbInstanceId' => 'SlaveDbInstanceId',
        'slaveDbInstanceRegion' => 'SlaveDbInstanceRegion',
        'slaveEngineArchType' => 'SlaveEngineArchType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->masterDatabaseName) {
            $res['MasterDatabaseName'] = $this->masterDatabaseName;
        }

        if (null !== $this->masterEngineArchType) {
            $res['MasterEngineArchType'] = $this->masterEngineArchType;
        }

        if (null !== $this->masterShardAccountName) {
            $res['MasterShardAccountName'] = $this->masterShardAccountName;
        }

        if (null !== $this->masterShardAccountPassword) {
            $res['MasterShardAccountPassword'] = $this->masterShardAccountPassword;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->slaveDatabaseName) {
            $res['SlaveDatabaseName'] = $this->slaveDatabaseName;
        }

        if (null !== $this->slaveDbInstanceId) {
            $res['SlaveDbInstanceId'] = $this->slaveDbInstanceId;
        }

        if (null !== $this->slaveDbInstanceRegion) {
            $res['SlaveDbInstanceRegion'] = $this->slaveDbInstanceRegion;
        }

        if (null !== $this->slaveEngineArchType) {
            $res['SlaveEngineArchType'] = $this->slaveEngineArchType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MasterDatabaseName'])) {
            $model->masterDatabaseName = $map['MasterDatabaseName'];
        }

        if (isset($map['MasterEngineArchType'])) {
            $model->masterEngineArchType = $map['MasterEngineArchType'];
        }

        if (isset($map['MasterShardAccountName'])) {
            $model->masterShardAccountName = $map['MasterShardAccountName'];
        }

        if (isset($map['MasterShardAccountPassword'])) {
            $model->masterShardAccountPassword = $map['MasterShardAccountPassword'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SlaveDatabaseName'])) {
            $model->slaveDatabaseName = $map['SlaveDatabaseName'];
        }

        if (isset($map['SlaveDbInstanceId'])) {
            $model->slaveDbInstanceId = $map['SlaveDbInstanceId'];
        }

        if (isset($map['SlaveDbInstanceRegion'])) {
            $model->slaveDbInstanceRegion = $map['SlaveDbInstanceRegion'];
        }

        if (isset($map['SlaveEngineArchType'])) {
            $model->slaveEngineArchType = $map['SlaveEngineArchType'];
        }

        return $model;
    }
}
