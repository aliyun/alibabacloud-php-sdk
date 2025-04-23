<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\computes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\managers;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\totalResources;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\usedResources;

class clusterInfoSimple extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var computes
     */
    public $computes;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var bool
     */
    public $hasPlugin;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isComputeEss;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $loginNodes;

    /**
     * @var managers
     */
    public $managers;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodePrefix;

    /**
     * @var string
     */
    public $nodeSuffix;

    /**
     * @var string
     */
    public $osTag;

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
    public $schedulerType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var totalResources
     */
    public $totalResources;

    /**
     * @var usedResources
     */
    public $usedResources;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountType' => 'AccountType',
        'baseOsTag' => 'BaseOsTag',
        'clientVersion' => 'ClientVersion',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy' => 'ComputeSpotStrategy',
        'computes' => 'Computes',
        'count' => 'Count',
        'createTime' => 'CreateTime',
        'deployMode' => 'DeployMode',
        'description' => 'Description',
        'ehpcVersion' => 'EhpcVersion',
        'hasPlugin' => 'HasPlugin',
        'id' => 'Id',
        'imageId' => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceType' => 'InstanceType',
        'isComputeEss' => 'IsComputeEss',
        'location' => 'Location',
        'loginNodes' => 'LoginNodes',
        'managers' => 'Managers',
        'name' => 'Name',
        'nodePrefix' => 'NodePrefix',
        'nodeSuffix' => 'NodeSuffix',
        'osTag' => 'OsTag',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'schedulerType' => 'SchedulerType',
        'status' => 'Status',
        'totalResources' => 'TotalResources',
        'usedResources' => 'UsedResources',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->computes) {
            $this->computes->validate();
        }
        if (null !== $this->managers) {
            $this->managers->validate();
        }
        if (null !== $this->totalResources) {
            $this->totalResources->validate();
        }
        if (null !== $this->usedResources) {
            $this->usedResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }

        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }

        if (null !== $this->computes) {
            $res['Computes'] = null !== $this->computes ? $this->computes->toArray($noStream) : $this->computes;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }

        if (null !== $this->hasPlugin) {
            $res['HasPlugin'] = $this->hasPlugin;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isComputeEss) {
            $res['IsComputeEss'] = $this->isComputeEss;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->loginNodes) {
            $res['LoginNodes'] = $this->loginNodes;
        }

        if (null !== $this->managers) {
            $res['Managers'] = null !== $this->managers ? $this->managers->toArray($noStream) : $this->managers;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodePrefix) {
            $res['NodePrefix'] = $this->nodePrefix;
        }

        if (null !== $this->nodeSuffix) {
            $res['NodeSuffix'] = $this->nodeSuffix;
        }

        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toArray($noStream) : $this->totalResources;
        }

        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toArray($noStream) : $this->usedResources;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }

        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }

        if (isset($map['Computes'])) {
            $model->computes = computes::fromMap($map['Computes']);
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }

        if (isset($map['HasPlugin'])) {
            $model->hasPlugin = $map['HasPlugin'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsComputeEss'])) {
            $model->isComputeEss = $map['IsComputeEss'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['LoginNodes'])) {
            $model->loginNodes = $map['LoginNodes'];
        }

        if (isset($map['Managers'])) {
            $model->managers = managers::fromMap($map['Managers']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodePrefix'])) {
            $model->nodePrefix = $map['NodePrefix'];
        }

        if (isset($map['NodeSuffix'])) {
            $model->nodeSuffix = $map['NodeSuffix'];
        }

        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }

        if (isset($map['UsedResources'])) {
            $model->usedResources = usedResources::fromMap($map['UsedResources']);
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
