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
    public $vpcId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $memoryCapacity;

    /**
     * @var string
     */
    public $clusterAliasName;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $intranetPort;

    /**
     * @var instanceModels[]
     */
    public $instanceModels;

    /**
     * @var string
     */
    public $intranetDomain;

    /**
     * @var string
     */
    public $internetDomain;

    /**
     * @var string
     */
    public $payInfo;

    /**
     * @var string
     */
    public $internetAddress;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $aclEntryList;

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
    public $regionId;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $initStatus;

    /**
     * @var string
     */
    public $internetPort;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $clusterVersion;

    /**
     * @var string
     */
    public $clusterSpecification;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $connectionType;
    protected $_name = [
        'vpcId'                => 'VpcId',
        'createTime'           => 'CreateTime',
        'intranetAddress'      => 'IntranetAddress',
        'diskType'             => 'DiskType',
        'pubNetworkFlow'       => 'PubNetworkFlow',
        'diskCapacity'         => 'DiskCapacity',
        'memoryCapacity'       => 'MemoryCapacity',
        'clusterAliasName'     => 'ClusterAliasName',
        'instanceCount'        => 'InstanceCount',
        'intranetPort'         => 'IntranetPort',
        'instanceModels'       => 'InstanceModels',
        'intranetDomain'       => 'IntranetDomain',
        'internetDomain'       => 'InternetDomain',
        'payInfo'              => 'PayInfo',
        'internetAddress'      => 'InternetAddress',
        'instanceId'           => 'InstanceId',
        'aclEntryList'         => 'AclEntryList',
        'healthStatus'         => 'HealthStatus',
        'initCostTime'         => 'InitCostTime',
        'regionId'             => 'RegionId',
        'aclId'                => 'AclId',
        'cpu'                  => 'Cpu',
        'clusterType'          => 'ClusterType',
        'clusterName'          => 'ClusterName',
        'initStatus'           => 'InitStatus',
        'internetPort'         => 'InternetPort',
        'appVersion'           => 'AppVersion',
        'netType'              => 'NetType',
        'clusterVersion'       => 'ClusterVersion',
        'clusterSpecification' => 'ClusterSpecification',
        'vSwitchId'            => 'VSwitchId',
        'connectionType'       => 'ConnectionType',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->pubNetworkFlow) {
            $res['PubNetworkFlow'] = $this->pubNetworkFlow;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->memoryCapacity) {
            $res['MemoryCapacity'] = $this->memoryCapacity;
        }
        if (null !== $this->clusterAliasName) {
            $res['ClusterAliasName'] = $this->clusterAliasName;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->intranetPort) {
            $res['IntranetPort'] = $this->intranetPort;
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
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->internetDomain) {
            $res['InternetDomain'] = $this->internetDomain;
        }
        if (null !== $this->payInfo) {
            $res['PayInfo'] = $this->payInfo;
        }
        if (null !== $this->internetAddress) {
            $res['InternetAddress'] = $this->internetAddress;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->aclEntryList) {
            $res['AclEntryList'] = $this->aclEntryList;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->initCostTime) {
            $res['InitCostTime'] = $this->initCostTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->initStatus) {
            $res['InitStatus'] = $this->initStatus;
        }
        if (null !== $this->internetPort) {
            $res['InternetPort'] = $this->internetPort;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }
        if (null !== $this->clusterSpecification) {
            $res['ClusterSpecification'] = $this->clusterSpecification;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['PubNetworkFlow'])) {
            $model->pubNetworkFlow = $map['PubNetworkFlow'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['MemoryCapacity'])) {
            $model->memoryCapacity = $map['MemoryCapacity'];
        }
        if (isset($map['ClusterAliasName'])) {
            $model->clusterAliasName = $map['ClusterAliasName'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['IntranetPort'])) {
            $model->intranetPort = $map['IntranetPort'];
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
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['InternetDomain'])) {
            $model->internetDomain = $map['InternetDomain'];
        }
        if (isset($map['PayInfo'])) {
            $model->payInfo = $map['PayInfo'];
        }
        if (isset($map['InternetAddress'])) {
            $model->internetAddress = $map['InternetAddress'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AclEntryList'])) {
            $model->aclEntryList = $map['AclEntryList'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InitCostTime'])) {
            $model->initCostTime = $map['InitCostTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['InitStatus'])) {
            $model->initStatus = $map['InitStatus'];
        }
        if (isset($map['InternetPort'])) {
            $model->internetPort = $map['InternetPort'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }
        if (isset($map['ClusterSpecification'])) {
            $model->clusterSpecification = $map['ClusterSpecification'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }

        return $model;
    }
}
