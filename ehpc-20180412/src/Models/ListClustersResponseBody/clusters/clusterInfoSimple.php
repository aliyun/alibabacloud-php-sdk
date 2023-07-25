<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\computes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\managers;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\totalResources;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple\usedResources;
use AlibabaCloud\Tea\Model;

class clusterInfoSimple extends Model
{
    /**
     * @description The server type of the account. Valid values:
     *
     *   nis
     *   ldap
     *
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The operating system tag of the base image. The tag was used only by the management node.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $baseOsTag;

    /**
     * @description The version of the client.
     *
     * @example 1.0.64
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The maximum hourly price for the ECS instance under the compute node. The return value can be accurate to three decimal places.
     *
     * @example 0.034
     *
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @description The bidding method of the compute nodes. Valid values:
     *
     *   NoSpot: The instances of the compute node are pay-as-you-go instances.
     *   SpotWithPriceLimit: The instances of the compute node are preemptible instances. These types of instances have a specified maximum hourly price.
     *   SpotAsPriceGo: The instances of the compute node are preemptible instances. The price of these instances is based on the current market price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The information about compute nodes.
     *
     * @var computes
     */
    public $computes;

    /**
     * @description The number of compute nodes in the cluster.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The time when the instance was created.
     *
     * @example 2020-10-30T07:39:20.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The mode in which the cluster was deployed. Valid values:
     *
     *   Standard: An account node, a scheduling node, a logon node, and multiple compute nodes are separately deployed.
     *   Advanced: Two high availability (HA) account nodes, two HA scheduler nodes, one logon node, and multiple compute nodes are separately deployed.
     *   Simple: A management node, a logon node, and multiple compute nodes are deployed. The management node consists of an account node and a scheduling node. The logon node and compute nodes are separately deployed.
     *   Tiny: A management node and multiple compute nodes are deployed. The management node consists of an account node, a scheduling node, and a logon node. The compute nodes are separately deployed.
     *
     * @example Standard
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The description of the cluster.
     *
     * @example clusterdescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The version of E-HPC.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @description Indicates whether plug-ins were used in the cluster. Valid values:
     *
     *   true: Plug-ins are used.
     *   false: Plug-ins are not used.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $hasPlugin;

    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the image.
     *
     * @example wi_1607_x64_dtc_zh_40G_alibase****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *   marketplace: Alibaba Cloud Marketplace image
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The billing method of the nodes in the cluster. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance type of the compute nodes.
     *
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether a scaling group was enabled. Valid values:
     *
     *   true: A scaling group is enabled.
     *   false: No scaling group is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $isComputeEss;

    /**
     * @description The location where the cluster was deployed. Valid values:
     *
     *   OnPremise: The cluster is deployed on a hybrid cloud.
     *   PublicCloud: The cluster is deployed on a public cloud.
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The list of logon nodes.
     *
     * @example {"Id": "i-bp13x4is8pvdhws7e****"}
     *
     * @var string
     */
    public $loginNodes;

    /**
     * @description The list of management nodes.
     *
     * @var managers
     */
    public $managers;

    /**
     * @description The name of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The prefix of the node.
     *
     * @example test
     *
     * @var string
     */
    public $nodePrefix;

    /**
     * @description The suffix of the node.
     *
     * @example name
     *
     * @var string
     */
    public $nodeSuffix;

    /**
     * @description The operating system tag of the image.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   uninit: The cluster is not initialized.
     *   creating: The cluster is being created.
     *   init: The cluster is being initialized.
     *   running: The cluster is running.
     *   exception: The cluster encounters an exception.
     *   releasing: The cluster is being released.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The statistics of all resources in the cluster.
     *
     * @var totalResources
     */
    public $totalResources;

    /**
     * @description The number of consumed resources in the cluster.
     *
     * @var usedResources
     */
    public $usedResources;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-b3f3edefefeep0760yju****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountType'           => 'AccountType',
        'baseOsTag'             => 'BaseOsTag',
        'clientVersion'         => 'ClientVersion',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'   => 'ComputeSpotStrategy',
        'computes'              => 'Computes',
        'count'                 => 'Count',
        'createTime'            => 'CreateTime',
        'deployMode'            => 'DeployMode',
        'description'           => 'Description',
        'ehpcVersion'           => 'EhpcVersion',
        'hasPlugin'             => 'HasPlugin',
        'id'                    => 'Id',
        'imageId'               => 'ImageId',
        'imageOwnerAlias'       => 'ImageOwnerAlias',
        'instanceChargeType'    => 'InstanceChargeType',
        'instanceType'          => 'InstanceType',
        'isComputeEss'          => 'IsComputeEss',
        'location'              => 'Location',
        'loginNodes'            => 'LoginNodes',
        'managers'              => 'Managers',
        'name'                  => 'Name',
        'nodePrefix'            => 'NodePrefix',
        'nodeSuffix'            => 'NodeSuffix',
        'osTag'                 => 'OsTag',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'schedulerType'         => 'SchedulerType',
        'status'                => 'Status',
        'totalResources'        => 'TotalResources',
        'usedResources'         => 'UsedResources',
        'vSwitchId'             => 'VSwitchId',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Computes'] = null !== $this->computes ? $this->computes->toMap() : null;
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
            $res['Managers'] = null !== $this->managers ? $this->managers->toMap() : null;
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
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return clusterInfoSimple
     */
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
