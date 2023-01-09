<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponseBody\data\instanceModels;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The whitelist.
     *
     * @example []
     *
     * @var string
     */
    public $aclEntryList;

    /**
     * @description The ID of the whitelist.
     *
     * @example acl-bp17020kiqvzutwwj****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The application version.
     *
     * @example 1.2.1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description The billing method, such as subscription or pay-as-you-go.
     *
     * @example Pay-as-you-go
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The alias of the instance.
     *
     * @example mse-7413****
     *
     * @var string
     */
    public $clusterAliasName;

    /**
     * @description The name of the instance.
     *
     * @example mse-bc1a29b0-160230875****
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The engine specifications.
     *
     * @example MSE_SC_1_2_200_c
     *
     * @var string
     */
    public $clusterSpecification;

    /**
     * @description The type of the instance. Valid values: ZooKeeper, Nacos-Ans, and Eureka.
     *
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The version of the instance.
     *
     * @example 1.2.1
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description The network connection type. Valid values:
     *
     *   slb
     *   eni
     *
     * @example slb
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description The number of vCPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the instance was created.
     *
     * @example 2020-07-31 11:36:08
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The capacity of the disk. Unit: GB.
     *
     * @example 60
     *
     * @var int
     */
    public $diskCapacity;

    /**
     * @description The type of the disk.
     *
     * @example alicloud-disk-ssd-multi-zone
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The health status of the instance.
     *
     * @example RESTART_SUCCESS
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The amount of time taken to create the instance. Unit: milliseconds.
     *
     * @example 98408
     *
     * @var int
     */
    public $initCostTime;

    /**
     * @description The creation status of the instance.
     *
     * @example RESTART_SUCCESS
     *
     * @var string
     */
    public $initStatus;

    /**
     * @description The number of instance nodes.
     *
     * @example 3
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The list of instance nodes.
     *
     * @var instanceModels[]
     */
    public $instanceModels;

    /**
     * @description The public IP address of the instance.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @description The public endpoint of the instance.
     *
     * @example mse-7413****-p.eureka.mse.aliyuncs.com
     *
     * @var string
     */
    public $internetDomain;

    /**
     * @description The private port number.
     *
     * @example 8761
     *
     * @var string
     */
    public $internetPort;

    /**
     * @description The internal IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The internal endpoint of the instance.
     *
     * @example mse-7413****-eureka.mse.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description The private port number.
     *
     * @example 8761
     *
     * @var string
     */
    public $intranetPort;

    /**
     * @description The size of the memory. Unit: GB.
     *
     * @example 2
     *
     * @var int
     */
    public $memoryCapacity;

    /**
     * @description The edition of Microservices Engine (MSE).
     *
     * @example mse_basic
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   `privatenet`: VPC
     *   `pubnet`: Internet
     *
     * @example privatenet
     *
     * @var string
     */
    public $netType;

    /**
     * @description The version number of the original order.
     *
     * @example 1.2.0
     *
     * @var string
     */
    public $orderClusterVersion;

    /**
     * @description The billing method, such as subscription or pay-as-you-go.
     *
     * @example Pay-as-you-go
     *
     * @var string
     */
    public $payInfo;

    /**
     * @description The public bandwidth. Unit: Mbit/s.\
     * Valid values: 0 to 5000. The value 0 indicates no access to the Internet.
     * @example 3
     *
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2dhgysj*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags that are attached to the instance.
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-xxx-xxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1hcg467ekqsv0zr****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aclEntryList'         => 'AclEntryList',
        'aclId'                => 'AclId',
        'appVersion'           => 'AppVersion',
        'chargeType'           => 'ChargeType',
        'clusterAliasName'     => 'ClusterAliasName',
        'clusterName'          => 'ClusterName',
        'clusterSpecification' => 'ClusterSpecification',
        'clusterType'          => 'ClusterType',
        'clusterVersion'       => 'ClusterVersion',
        'connectionType'       => 'ConnectionType',
        'cpu'                  => 'Cpu',
        'createTime'           => 'CreateTime',
        'diskCapacity'         => 'DiskCapacity',
        'diskType'             => 'DiskType',
        'healthStatus'         => 'HealthStatus',
        'initCostTime'         => 'InitCostTime',
        'initStatus'           => 'InitStatus',
        'instanceCount'        => 'InstanceCount',
        'instanceId'           => 'InstanceId',
        'instanceModels'       => 'InstanceModels',
        'internetAddress'      => 'InternetAddress',
        'internetDomain'       => 'InternetDomain',
        'internetPort'         => 'InternetPort',
        'intranetAddress'      => 'IntranetAddress',
        'intranetDomain'       => 'IntranetDomain',
        'intranetPort'         => 'IntranetPort',
        'memoryCapacity'       => 'MemoryCapacity',
        'mseVersion'           => 'MseVersion',
        'netType'              => 'NetType',
        'orderClusterVersion'  => 'OrderClusterVersion',
        'payInfo'              => 'PayInfo',
        'pubNetworkFlow'       => 'PubNetworkFlow',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntryList) {
            $res['AclEntryList'] = $this->aclEntryList;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterAliasName) {
            $res['ClusterAliasName'] = $this->clusterAliasName;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterSpecification) {
            $res['ClusterSpecification'] = $this->clusterSpecification;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->initCostTime) {
            $res['InitCostTime'] = $this->initCostTime;
        }
        if (null !== $this->initStatus) {
            $res['InitStatus'] = $this->initStatus;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceModels) {
            $res['InstanceModels'] = [];
            if (null !== $this->instanceModels && \is_array($this->instanceModels)) {
                $n = 0;
                foreach ($this->instanceModels as $item) {
                    $res['InstanceModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->internetAddress) {
            $res['InternetAddress'] = $this->internetAddress;
        }
        if (null !== $this->internetDomain) {
            $res['InternetDomain'] = $this->internetDomain;
        }
        if (null !== $this->internetPort) {
            $res['InternetPort'] = $this->internetPort;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->intranetPort) {
            $res['IntranetPort'] = $this->intranetPort;
        }
        if (null !== $this->memoryCapacity) {
            $res['MemoryCapacity'] = $this->memoryCapacity;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->orderClusterVersion) {
            $res['OrderClusterVersion'] = $this->orderClusterVersion;
        }
        if (null !== $this->payInfo) {
            $res['PayInfo'] = $this->payInfo;
        }
        if (null !== $this->pubNetworkFlow) {
            $res['PubNetworkFlow'] = $this->pubNetworkFlow;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntryList'])) {
            $model->aclEntryList = $map['AclEntryList'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterAliasName'])) {
            $model->clusterAliasName = $map['ClusterAliasName'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterSpecification'])) {
            $model->clusterSpecification = $map['ClusterSpecification'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InitCostTime'])) {
            $model->initCostTime = $map['InitCostTime'];
        }
        if (isset($map['InitStatus'])) {
            $model->initStatus = $map['InitStatus'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceModels'])) {
            if (!empty($map['InstanceModels'])) {
                $model->instanceModels = [];
                $n                     = 0;
                foreach ($map['InstanceModels'] as $item) {
                    $model->instanceModels[$n++] = null !== $item ? instanceModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InternetAddress'])) {
            $model->internetAddress = $map['InternetAddress'];
        }
        if (isset($map['InternetDomain'])) {
            $model->internetDomain = $map['InternetDomain'];
        }
        if (isset($map['InternetPort'])) {
            $model->internetPort = $map['InternetPort'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['IntranetPort'])) {
            $model->intranetPort = $map['IntranetPort'];
        }
        if (isset($map['MemoryCapacity'])) {
            $model->memoryCapacity = $map['MemoryCapacity'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OrderClusterVersion'])) {
            $model->orderClusterVersion = $map['OrderClusterVersion'];
        }
        if (isset($map['PayInfo'])) {
            $model->payInfo = $map['PayInfo'];
        }
        if (isset($map['PubNetworkFlow'])) {
            $model->pubNetworkFlow = $map['PubNetworkFlow'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
