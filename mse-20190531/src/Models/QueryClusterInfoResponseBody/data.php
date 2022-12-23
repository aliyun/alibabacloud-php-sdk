<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponseBody\data\instanceModels;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ["127.0.0.0/32"]
     *
     * @var string
     */
    public $aclEntryList;

    /**
     * @example acl-bp144q24cgqvzckmxxxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @example 2.1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clusterAliasName;

    /**
     * @example mse-74355150-xxxxxxx
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example MSE_SC_2_4_60_c
     *
     * @var string
     */
    public $clusterSpecification;

    /**
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example NACOS_2_0_0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @example null
     *
     * @var string
     */
    public $connectionType;

    /**
     * @example null
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 2022-12-15 10:02:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @example null
     *
     * @var int
     */
    public $diskCapacity;

    /**
     * @example null
     *
     * @var string
     */
    public $diskType;

    /**
     * @example INIT_SUCCESS
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @example 53353
     *
     * @var int
     */
    public $initCostTime;

    /**
     * @example INIT_SUCCESS
     *
     * @var string
     */
    public $initStatus;

    /**
     * @example 3
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var instanceModels[]
     */
    public $instanceModels;

    /**
     * @example null
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @example mse-xxxxxx-p.nacos-ans.mse.aliyuncs.com
     *
     * @var string
     */
    public $internetDomain;

    /**
     * @example 8848,6443,9848,8761
     *
     * @var string
     */
    public $internetPort;

    /**
     * @example null
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @example mse-xxxxx-nacos-ans.mse.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @example 8848,6443,9848,8761
     *
     * @var string
     */
    public $intranetPort;

    /**
     * @example null
     *
     * @var int
     */
    public $memoryCapacity;

    /**
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @example privatenet
     *
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $payInfo;

    /**
     * @example 1
     *
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @example vsw-bp1egfakxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1v5nbauzh8xxxxxxx
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
        'payInfo'              => 'PayInfo',
        'pubNetworkFlow'       => 'PubNetworkFlow',
        'regionId'             => 'RegionId',
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
        if (null !== $this->payInfo) {
            $res['PayInfo'] = $this->payInfo;
        }
        if (null !== $this->pubNetworkFlow) {
            $res['PubNetworkFlow'] = $this->pubNetworkFlow;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['PayInfo'])) {
            $model->payInfo = $map['PayInfo'];
        }
        if (isset($map['PubNetworkFlow'])) {
            $model->pubNetworkFlow = $map['PubNetworkFlow'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
