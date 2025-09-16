<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class FlussInstance extends Model
{
    /**
     * @var ClusterState
     */
    public $clusterState;

    /**
     * @var string
     */
    public $clusterStatus;

    /**
     * @var string
     */
    public $consoleUrl;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $orderState;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceCreateTime;

    /**
     * @var int
     */
    public $resourceExpiredTime;

    /**
     * @var string
     */
    public $tabletServerModel;

    /**
     * @var int
     */
    public $tabletServerNum;

    /**
     * @var string
     */
    public $tabletServerType;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var FlussVswitch[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterState' => 'ClusterState',
        'clusterStatus' => 'ClusterStatus',
        'consoleUrl' => 'ConsoleUrl',
        'diskSize' => 'DiskSize',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'orderState' => 'OrderState',
        'regionId' => 'RegionId',
        'resourceCreateTime' => 'ResourceCreateTime',
        'resourceExpiredTime' => 'ResourceExpiredTime',
        'tabletServerModel' => 'TabletServerModel',
        'tabletServerNum' => 'TabletServerNum',
        'tabletServerType' => 'TabletServerType',
        'uid' => 'Uid',
        'vSwitches' => 'VSwitches',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->clusterState) {
            $this->clusterState->validate();
        }
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterState) {
            $res['ClusterState'] = null !== $this->clusterState ? $this->clusterState->toArray($noStream) : $this->clusterState;
        }

        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }

        if (null !== $this->consoleUrl) {
            $res['ConsoleUrl'] = $this->consoleUrl;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->orderState) {
            $res['OrderState'] = $this->orderState;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceCreateTime) {
            $res['ResourceCreateTime'] = $this->resourceCreateTime;
        }

        if (null !== $this->resourceExpiredTime) {
            $res['ResourceExpiredTime'] = $this->resourceExpiredTime;
        }

        if (null !== $this->tabletServerModel) {
            $res['TabletServerModel'] = $this->tabletServerModel;
        }

        if (null !== $this->tabletServerNum) {
            $res['TabletServerNum'] = $this->tabletServerNum;
        }

        if (null !== $this->tabletServerType) {
            $res['TabletServerType'] = $this->tabletServerType;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClusterState'])) {
            $model->clusterState = ClusterState::fromMap($map['ClusterState']);
        }

        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }

        if (isset($map['ConsoleUrl'])) {
            $model->consoleUrl = $map['ConsoleUrl'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['OrderState'])) {
            $model->orderState = $map['OrderState'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceCreateTime'])) {
            $model->resourceCreateTime = $map['ResourceCreateTime'];
        }

        if (isset($map['ResourceExpiredTime'])) {
            $model->resourceExpiredTime = $map['ResourceExpiredTime'];
        }

        if (isset($map['TabletServerModel'])) {
            $model->tabletServerModel = $map['TabletServerModel'];
        }

        if (isset($map['TabletServerNum'])) {
            $model->tabletServerNum = $map['TabletServerNum'];
        }

        if (isset($map['TabletServerType'])) {
            $model->tabletServerType = $map['TabletServerType'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1] = FlussVswitch::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
