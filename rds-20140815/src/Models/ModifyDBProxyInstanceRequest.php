<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest\DBProxyNodes;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest\migrateAZ;

class ModifyDBProxyInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @var string
     */
    public $DBProxyInstanceNum;

    /**
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @var DBProxyNodes[]
     */
    public $DBProxyNodes;

    /**
     * @var string
     */
    public $effectiveSpecificTime;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var migrateAZ[]
     */
    public $migrateAZ;

    /**
     * @var int
     */
    public $ownerId;

    /**
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
        'DBInstanceId' => 'DBInstanceId',
        'DBProxyEngineType' => 'DBProxyEngineType',
        'DBProxyInstanceNum' => 'DBProxyInstanceNum',
        'DBProxyInstanceType' => 'DBProxyInstanceType',
        'DBProxyNodes' => 'DBProxyNodes',
        'effectiveSpecificTime' => 'EffectiveSpecificTime',
        'effectiveTime' => 'EffectiveTime',
        'migrateAZ' => 'MigrateAZ',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->DBProxyNodes)) {
            Model::validateArray($this->DBProxyNodes);
        }
        if (\is_array($this->migrateAZ)) {
            Model::validateArray($this->migrateAZ);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->DBProxyNodes) {
            if (\is_array($this->DBProxyNodes)) {
                $res['DBProxyNodes'] = [];
                $n1 = 0;
                foreach ($this->DBProxyNodes as $item1) {
                    $res['DBProxyNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->effectiveSpecificTime) {
            $res['EffectiveSpecificTime'] = $this->effectiveSpecificTime;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->migrateAZ) {
            if (\is_array($this->migrateAZ)) {
                $res['MigrateAZ'] = [];
                $n1 = 0;
                foreach ($this->migrateAZ as $item1) {
                    $res['MigrateAZ'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DBProxyNodes'])) {
            if (!empty($map['DBProxyNodes'])) {
                $model->DBProxyNodes = [];
                $n1 = 0;
                foreach ($map['DBProxyNodes'] as $item1) {
                    $model->DBProxyNodes[$n1++] = DBProxyNodes::fromMap($item1);
                }
            }
        }

        if (isset($map['EffectiveSpecificTime'])) {
            $model->effectiveSpecificTime = $map['EffectiveSpecificTime'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['MigrateAZ'])) {
            if (!empty($map['MigrateAZ'])) {
                $model->migrateAZ = [];
                $n1 = 0;
                foreach ($map['MigrateAZ'] as $item1) {
                    $model->migrateAZ[$n1++] = migrateAZ::fromMap($item1);
                }
            }
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
