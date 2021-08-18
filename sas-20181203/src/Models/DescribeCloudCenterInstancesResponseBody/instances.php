<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudCenterInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $cpuInfo;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $kernel;

    /**
     * @var bool
     */
    public $bind;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $clientStatus;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var string
     */
    public $tagId;

    /**
     * @var int
     */
    public $flag;

    /**
     * @var int
     */
    public $authVersion;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var int
     */
    public $vulCount;

    /**
     * @var string
     */
    public $hcStatus;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $groupTrace;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $riskStatus;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $vulStatus;

    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $macListString;

    /**
     * @var int
     */
    public $importance;

    /**
     * @var int
     */
    public $healthCheckCount;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $os;

    /**
     * @var int
     */
    public $authModifyTime;

    /**
     * @var int
     */
    public $safeEventCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $vendor;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $vendorName;

    /**
     * @var string
     */
    public $authVersionName;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $exposedStatus;

    /**
     * @var string
     */
    public $riskCount;

    /**
     * @var string
     */
    public $ipListString;
    protected $_name = [
        'status'           => 'Status',
        'cpuInfo'          => 'CpuInfo',
        'internetIp'       => 'InternetIp',
        'kernel'           => 'Kernel',
        'bind'             => 'Bind',
        'osName'           => 'OsName',
        'tag'              => 'Tag',
        'clientStatus'     => 'ClientStatus',
        'mem'              => 'Mem',
        'vpcInstanceId'    => 'VpcInstanceId',
        'tagId'            => 'TagId',
        'flag'             => 'Flag',
        'authVersion'      => 'AuthVersion',
        'region'           => 'Region',
        'instanceName'     => 'InstanceName',
        'podCount'         => 'PodCount',
        'vulCount'         => 'VulCount',
        'hcStatus'         => 'HcStatus',
        'createdTime'      => 'CreatedTime',
        'groupTrace'       => 'GroupTrace',
        'clusterId'        => 'ClusterId',
        'riskStatus'       => 'RiskStatus',
        'cores'            => 'Cores',
        'vulStatus'        => 'VulStatus',
        'alarmStatus'      => 'AlarmStatus',
        'macListString'    => 'MacListString',
        'importance'       => 'Importance',
        'healthCheckCount' => 'HealthCheckCount',
        'ip'               => 'Ip',
        'os'               => 'Os',
        'authModifyTime'   => 'AuthModifyTime',
        'safeEventCount'   => 'SafeEventCount',
        'instanceId'       => 'InstanceId',
        'assetType'        => 'AssetType',
        'intranetIp'       => 'IntranetIp',
        'vendor'           => 'Vendor',
        'regionId'         => 'RegionId',
        'uuid'             => 'Uuid',
        'groupId'          => 'GroupId',
        'regionName'       => 'RegionName',
        'vendorName'       => 'VendorName',
        'authVersionName'  => 'AuthVersionName',
        'clusterName'      => 'ClusterName',
        'exposedStatus'    => 'ExposedStatus',
        'riskCount'        => 'RiskCount',
        'ipListString'     => 'IpListString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->cpuInfo) {
            $res['CpuInfo'] = $this->cpuInfo;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->kernel) {
            $res['Kernel'] = $this->kernel;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }
        if (null !== $this->hcStatus) {
            $res['HcStatus'] = $this->hcStatus;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->groupTrace) {
            $res['GroupTrace'] = $this->groupTrace;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->vulStatus) {
            $res['VulStatus'] = $this->vulStatus;
        }
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->macListString) {
            $res['MacListString'] = $this->macListString;
        }
        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }
        if (null !== $this->healthCheckCount) {
            $res['HealthCheckCount'] = $this->healthCheckCount;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->authModifyTime) {
            $res['AuthModifyTime'] = $this->authModifyTime;
        }
        if (null !== $this->safeEventCount) {
            $res['SafeEventCount'] = $this->safeEventCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
        }
        if (null !== $this->authVersionName) {
            $res['AuthVersionName'] = $this->authVersionName;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->exposedStatus) {
            $res['ExposedStatus'] = $this->exposedStatus;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->ipListString) {
            $res['IpListString'] = $this->ipListString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CpuInfo'])) {
            $model->cpuInfo = $map['CpuInfo'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Kernel'])) {
            $model->kernel = $map['Kernel'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }
        if (isset($map['HcStatus'])) {
            $model->hcStatus = $map['HcStatus'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['GroupTrace'])) {
            $model->groupTrace = $map['GroupTrace'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['VulStatus'])) {
            $model->vulStatus = $map['VulStatus'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['MacListString'])) {
            $model->macListString = $map['MacListString'];
        }
        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }
        if (isset($map['HealthCheckCount'])) {
            $model->healthCheckCount = $map['HealthCheckCount'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['AuthModifyTime'])) {
            $model->authModifyTime = $map['AuthModifyTime'];
        }
        if (isset($map['SafeEventCount'])) {
            $model->safeEventCount = $map['SafeEventCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }
        if (isset($map['AuthVersionName'])) {
            $model->authVersionName = $map['AuthVersionName'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ExposedStatus'])) {
            $model->exposedStatus = $map['ExposedStatus'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['IpListString'])) {
            $model->ipListString = $map['IpListString'];
        }

        return $model;
    }
}
