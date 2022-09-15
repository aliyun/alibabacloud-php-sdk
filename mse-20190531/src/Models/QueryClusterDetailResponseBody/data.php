<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponseBody\data\instanceModels;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aclEntryList;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clusterAliasName;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterSpecification;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $clusterVersion;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var int
     */
    public $initCostTime;

    /**
     * @var string
     */
    public $initStatus;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var instanceModels[]
     */
    public $instanceModels;

    /**
     * @var string
     */
    public $internetAddress;

    /**
     * @var string
     */
    public $internetDomain;

    /**
     * @var string
     */
    public $internetPort;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $intranetDomain;

    /**
     * @var string
     */
    public $intranetPort;

    /**
     * @var int
     */
    public $memoryCapacity;

    /**
     * @var string
     */
    public $mseVersion;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $orderClusterVersion;

    /**
     * @var string
     */
    public $payInfo;

    /**
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
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
