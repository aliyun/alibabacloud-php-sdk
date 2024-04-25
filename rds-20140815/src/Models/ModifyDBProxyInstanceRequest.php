<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyInstanceRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-t4n3a****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description An internal parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The number of proxy instances that are enabled. If the value of this parameter is 0, the database proxy feature is disabled for the instance. Valid values: **1** to **60**.
     *
     * >  The capability of the database proxy to process requests increases with the number of proxy instances that are enabled. You can monitor the load on the instance and specify an appropriate number of proxy instances based on the load monitoring data.
     * @example 2
     *
     * @var string
     */
    public $DBProxyInstanceNum;

    /**
     * @description The type of database proxy that is enabled for the instance. Set the value to **DedicatedProxy**.
     *
     * @example DedicatedProxy
     *
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @description The point in time at which you want to apply the new database proxy settings. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >  If you set the **EffectiveTime** parameter to **SpecificTime**, you must specify the EffectiveSpecificTime parameter.
     * @example 2019-07-10T13:15:12Z
     *
     * @var string
     */
    public $effectiveSpecificTime;

    /**
     * @description The time when you want to apply the new database proxy settings. Valid values:
     *
     *   **Immediate**: ApsaraDB RDS immediately applies the new settings.
     *   **MaintainTime**: ApsaraDB RDS applies the new settings during the maintenance window that you specified. For more information, see [Modify the maintenance window](~~26249~~).
     *   **SpecificTime**: ApsaraDB RDS applies the new settings at a specified point in time.
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
     * @description The ID of the region where the instance resides. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
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
