<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponseBody\data\instanceModels;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponseBody\data\maintenancePeriod;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The public IP address whitelist.
     *
     * @example ["127.0.0.0/32"]
     *
     * @var string
     */
    public $aclEntryList;

    /**
     * @description The ID of the instance in the public IP address whitelist.
     *
     * @example acl-bp144q24cgqvzckmxxxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The version of the instance.
     *
     * @example 2.1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @var bool
     */
    public $canUpdate;

    /**
     * @description The billing method, such as subscription or pay-as-you-go.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The alias of the instance.
     *
     * @example Development environment
     *
     * @var string
     */
    public $clusterAliasName;

    /**
     * @description The full name of the instance.
     *
     * @example mse-74355150-xxxxxxx
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The engine specifications.
     *
     * @example MSE_SC_2_4_60_c
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
     * @description The version of the order.
     *
     * @example NACOS_2_0_0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description A deprecated parameter.
     *
     * @example null
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description A deprecated parameter.
     *
     * @example null
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the instance was created.
     *
     * @example 2022-12-15 10:02:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @description A deprecated parameter.
     *
     * @example null
     *
     * @var int
     */
    public $diskCapacity;

    /**
     * @description A deprecated parameter.
     *
     * @example null
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The ID of the instance that is associated with the Elastic IP Address (EIP).
     *
     * @example eip-bp1uujshd5funmyy8rcl9
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description The time when the subscription instance expires.
     *
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The zones to which the current cluster can be distributed.
     *
     * @var string[]
     */
    public $expectZones;

    /**
     * @description The status of the instance.
     *
     * @example INIT_SUCCESS
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The time that is required to initialize the instance. Unit: milliseconds.
     *
     * @example 53353
     *
     * @var int
     */
    public $initCostTime;

    /**
     * @description The initial status of the instance.
     *
     * @example INIT_SUCCESS
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
     * @description The ID of the instance
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The reserved structure.
     *
     * @var instanceModels[]
     */
    public $instanceModels;

    /**
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @description The public endpoint.
     *
     * @example mse-xxxxxx-p.nacos-ans.mse.aliyuncs.com
     *
     * @var string
     */
    public $internetDomain;

    /**
     * @description The instance ports that are accessible over the Internet.
     *
     * @example 8848,6443,9848,8761
     *
     * @var string
     */
    public $internetPort;

    /**
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The internal endpoint.
     *
     * @example mse-xxxxx-nacos-ans.mse.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description The instance ports that are accessible over an internal network.
     *
     * @example 8848,6443,9848,8761
     *
     * @var string
     */
    public $intranetPort;

    /**
     * @description The O\&M time window.
     *
     * @var maintenancePeriod
     */
    public $maintenancePeriod;

    /**
     * @description A deprecated parameter.
     *
     * @example null
     *
     * @var int
     */
    public $memoryCapacity;

    /**
     * @description The version of the instance.
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description The network connection type of the instance.
     *
     * @example privatenet
     *
     * @var string
     */
    public $netType;

    /**
     * @description The billing method.
     *
     * @example Pay-as-you-go
     *
     * @var string
     */
    public $payInfo;

    /**
     * @description The public bandwidth. Unit: Mbit/s.\
     * Valid values: 0 to 5000. The value 0 indicates no access to the Internet.
     * @example 1
     *
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group to which the elastic network interface (ENI) is connected.
     *
     * @example sg-uf6hgwe067prhg68agfa
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The type of the security group to which the ENI is connected.
     *
     * @example enterprise
     *
     * @var string
     */
    public $securityGroupType;

    /**
     * @description The tag.
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1egfakxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @description The ID of the VPC where the instance resides.
     *
     * @example vpc-bp1v5nbauzh8xxxxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aclEntryList'         => 'AclEntryList',
        'aclId'                => 'AclId',
        'appVersion'           => 'AppVersion',
        'canUpdate'            => 'CanUpdate',
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
        'eipInstanceId'        => 'EipInstanceId',
        'endDate'              => 'EndDate',
        'expectZones'          => 'ExpectZones',
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
        'maintenancePeriod'    => 'MaintenancePeriod',
        'memoryCapacity'       => 'MemoryCapacity',
        'mseVersion'           => 'MseVersion',
        'netType'              => 'NetType',
        'payInfo'              => 'PayInfo',
        'pubNetworkFlow'       => 'PubNetworkFlow',
        'regionId'             => 'RegionId',
        'securityGroupId'      => 'SecurityGroupId',
        'securityGroupType'    => 'SecurityGroupType',
        'tags'                 => 'Tags',
        'vSwitchId'            => 'VSwitchId',
        'versionCode'          => 'VersionCode',
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
        if (null !== $this->canUpdate) {
            $res['CanUpdate'] = $this->canUpdate;
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
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->expectZones) {
            $res['ExpectZones'] = $this->expectZones;
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
        if (null !== $this->maintenancePeriod) {
            $res['MaintenancePeriod'] = null !== $this->maintenancePeriod ? $this->maintenancePeriod->toMap() : null;
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
        if (null !== $this->payInfo) {
            $res['PayInfo'] = $this->payInfo;
        }
        if (null !== $this->pubNetworkFlow) {
            $res['PubNetworkFlow'] = $this->pubNetworkFlow;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupType) {
            $res['SecurityGroupType'] = $this->securityGroupType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
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
        if (isset($map['CanUpdate'])) {
            $model->canUpdate = $map['CanUpdate'];
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
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExpectZones'])) {
            if (!empty($map['ExpectZones'])) {
                $model->expectZones = $map['ExpectZones'];
            }
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
        if (isset($map['MaintenancePeriod'])) {
            $model->maintenancePeriod = maintenancePeriod::fromMap($map['MaintenancePeriod']);
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
        if (isset($map['PayInfo'])) {
            $model->payInfo = $map['PayInfo'];
        }
        if (isset($map['PubNetworkFlow'])) {
            $model->pubNetworkFlow = $map['PubNetworkFlow'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupType'])) {
            $model->securityGroupType = $map['SecurityGroupType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
