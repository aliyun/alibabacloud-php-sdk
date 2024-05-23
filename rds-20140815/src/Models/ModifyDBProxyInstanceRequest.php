<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyInstanceRequest extends Model
{
    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-t4n3a****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description A deprecated parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The number of database proxies. If you set this parameter to 0, the database proxy feature is disabled for the instance. Valid values: **1** to **16**.
     *
     * This parameter is required.
     * @example 2
     *
     * @var string
     */
    public $DBProxyInstanceNum;

    /**
     * @description The database proxy type. Valid values:
     *
     *   **common**: general-purpose database proxy
     *   **exclusive** (default): dedicated database proxy
     *
     * This parameter is required.
     * @example DedicatedProxy
     *
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @description The point in time that you want to specify. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >  If the **EffectiveTime** parameter is set to **SpecificTime**, you must specify this parameter.
     * @example 2019-07-10T13:15:12Z
     *
     * @var string
     */
    public $effectiveSpecificTime;

    /**
     * @description The effective time. Valid values:
     *
     *   **Immediate**: The effective time is immediate.
     *   **MaintainTime**: The effective time is within the maintenance window. For more information, see ModifyDBInstanceMaintainTime.
     *   **SpecificTime**: The effective time is a specified point in time.
     *
     * Default value: **MaintainTime**.
     * @example MaintainTime
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the vSwitch in the destination zone. You can call the [DescribeVSwitches](https://help.aliyun.com/document_detail/610431.html) operation to query existing vSwitches.
     *
     * >  Only database proxies for ApsaraDB RDS for MySQL instances that use cloud disks can be migrated to different zones.
     * @example vsw-uf6adz52c2p****
     *
     * @var string
     */
    public $vSwitchIds;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'DBProxyEngineType'     => 'DBProxyEngineType',
        'DBProxyInstanceNum'    => 'DBProxyInstanceNum',
        'DBProxyInstanceType'   => 'DBProxyInstanceType',
        'effectiveSpecificTime' => 'EffectiveSpecificTime',
        'effectiveTime'         => 'EffectiveTime',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'vSwitchIds'            => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->DBProxyInstanceNum) {
            $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        }
        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }
        if (null !== $this->effectiveSpecificTime) {
            $res['EffectiveSpecificTime'] = $this->effectiveSpecificTime;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBProxyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DBProxyInstanceNum'])) {
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if (isset($map['EffectiveSpecificTime'])) {
            $model->effectiveSpecificTime = $map['EffectiveSpecificTime'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }

        return $model;
    }
}
