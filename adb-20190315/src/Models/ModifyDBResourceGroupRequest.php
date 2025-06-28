<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterSizeResource;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var mixed[]
     */
    public $engineParams;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var int
     */
    public $maxClusterCount;

    /**
     * @var string
     */
    public $maxComputeResource;

    /**
     * @var int
     */
    public $minClusterCount;

    /**
     * @var string
     */
    public $minComputeResource;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string[]
     */
    public $poolUserList;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'clusterMode' => 'ClusterMode',
        'clusterSizeResource' => 'ClusterSizeResource',
        'DBClusterId' => 'DBClusterId',
        'engineParams' => 'EngineParams',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'maxClusterCount' => 'MaxClusterCount',
        'maxComputeResource' => 'MaxComputeResource',
        'minClusterCount' => 'MinClusterCount',
        'minComputeResource' => 'MinComputeResource',
        'nodeNum' => 'NodeNum',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'poolUserList' => 'PoolUserList',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->engineParams)) {
            Model::validateArray($this->engineParams);
        }
        if (\is_array($this->poolUserList)) {
            Model::validateArray($this->poolUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }

        if (null !== $this->clusterSizeResource) {
            $res['ClusterSizeResource'] = $this->clusterSizeResource;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->engineParams) {
            if (\is_array($this->engineParams)) {
                $res['EngineParams'] = [];
                foreach ($this->engineParams as $key1 => $value1) {
                    $res['EngineParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->maxClusterCount) {
            $res['MaxClusterCount'] = $this->maxClusterCount;
        }

        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }

        if (null !== $this->minClusterCount) {
            $res['MinClusterCount'] = $this->minClusterCount;
        }

        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }

        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->poolUserList) {
            if (\is_array($this->poolUserList)) {
                $res['PoolUserList'] = [];
                $n1 = 0;
                foreach ($this->poolUserList as $item1) {
                    $res['PoolUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }

        if (isset($map['ClusterSizeResource'])) {
            $model->clusterSizeResource = $map['ClusterSizeResource'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EngineParams'])) {
            if (!empty($map['EngineParams'])) {
                $model->engineParams = [];
                foreach ($map['EngineParams'] as $key1 => $value1) {
                    $model->engineParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['MaxClusterCount'])) {
            $model->maxClusterCount = $map['MaxClusterCount'];
        }

        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }

        if (isset($map['MinClusterCount'])) {
            $model->minClusterCount = $map['MinClusterCount'];
        }

        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }

        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PoolUserList'])) {
            if (!empty($map['PoolUserList'])) {
                $model->poolUserList = [];
                $n1 = 0;
                foreach ($map['PoolUserList'] as $item1) {
                    $model->poolUserList[$n1] = $item1;
                    ++$n1;
                }
            }
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
