<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\computes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\managers;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\totalResources;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\usedResources;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var usedResources
     */
    public $usedResources;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $nodeSuffix;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $nodePrefix;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var managers
     */
    public $managers;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var totalResources
     */
    public $totalResources;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var computes
     */
    public $computes;

    /**
     * @var string
     */
    public $loginNodes;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $clientVersion;
    protected $_name = [
        'vpcId'                 => 'VpcId',
        'status'                => 'Status',
        'createTime'            => 'CreateTime',
        'usedResources'         => 'UsedResources',
        'computeSpotStrategy'   => 'ComputeSpotStrategy',
        'accountType'           => 'AccountType',
        'count'                 => 'Count',
        'ehpcVersion'           => 'EhpcVersion',
        'description'           => 'Description',
        'baseOsTag'             => 'BaseOsTag',
        'name'                  => 'Name',
        'imageId'               => 'ImageId',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'schedulerType'         => 'SchedulerType',
        'nodeSuffix'            => 'NodeSuffix',
        'deployMode'            => 'DeployMode',
        'imageOwnerAlias'       => 'ImageOwnerAlias',
        'osTag'                 => 'OsTag',
        'nodePrefix'            => 'NodePrefix',
        'instanceType'          => 'InstanceType',
        'managers'              => 'Managers',
        'instanceChargeType'    => 'InstanceChargeType',
        'regionId'              => 'RegionId',
        'vSwitchId'             => 'VSwitchId',
        'totalResources'        => 'TotalResources',
        'zoneId'                => 'ZoneId',
        'computes'              => 'Computes',
        'loginNodes'            => 'LoginNodes',
        'id'                    => 'Id',
        'location'              => 'Location',
        'clientVersion'         => 'ClientVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toMap() : null;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->nodeSuffix) {
            $res['NodeSuffix'] = $this->nodeSuffix;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->nodePrefix) {
            $res['NodePrefix'] = $this->nodePrefix;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->managers) {
            $res['Managers'] = null !== $this->managers ? $this->managers->toMap() : null;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->computes) {
            $res['Computes'] = null !== $this->computes ? $this->computes->toMap() : null;
        }
        if (null !== $this->loginNodes) {
            $res['LoginNodes'] = $this->loginNodes;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UsedResources'])) {
            $model->usedResources = usedResources::fromMap($map['UsedResources']);
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['NodeSuffix'])) {
            $model->nodeSuffix = $map['NodeSuffix'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['NodePrefix'])) {
            $model->nodePrefix = $map['NodePrefix'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Managers'])) {
            $model->managers = managers::fromMap($map['Managers']);
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Computes'])) {
            $model->computes = computes::fromMap($map['Computes']);
        }
        if (isset($map['LoginNodes'])) {
            $model->loginNodes = $map['LoginNodes'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        return $model;
    }
}
