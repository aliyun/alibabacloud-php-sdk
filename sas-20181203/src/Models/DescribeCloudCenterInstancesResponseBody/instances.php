<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudCenterInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $assetTypeName;

    /**
     * @var int
     */
    public $authModifyTime;

    /**
     * @var int
     */
    public $authVersion;

    /**
     * @var string
     */
    public $authVersionName;

    /**
     * @var bool
     */
    public $bind;

    /**
     * @var string
     */
    public $bindFileProtectType;

    /**
     * @var string
     */
    public $clientStatus;

    /**
     * @var string
     */
    public $clientSubStatus;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $cpuInfo;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var int
     */
    public $exposedStatus;

    /**
     * @var int
     */
    public $flag;

    /**
     * @var string
     */
    public $flagName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupTrace;

    /**
     * @var string
     */
    public $hasContainer;

    /**
     * @var string
     */
    public $hcStatus;

    /**
     * @var int
     */
    public $healthCheckCount;

    /**
     * @var int
     */
    public $importance;

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
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $ipListString;

    /**
     * @var string
     */
    public $kernel;

    /**
     * @var int
     */
    public $lastLoginTimestamp;

    /**
     * @var string
     */
    public $macListString;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var int
     */
    public $postPaidFlag;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $riskCount;

    /**
     * @var string
     */
    public $riskStatus;

    /**
     * @var int
     */
    public $safeEventCount;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $tagResources;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $vendor;

    /**
     * @var string
     */
    public $vendorName;

    /**
     * @var string
     */
    public $vendorUid;

    /**
     * @var string
     */
    public $vendorUserName;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var int
     */
    public $vulCount;

    /**
     * @var string
     */
    public $vulStatus;
    protected $_name = [
        'alarmStatus' => 'AlarmStatus',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'assetType' => 'AssetType',
        'assetTypeName' => 'AssetTypeName',
        'authModifyTime' => 'AuthModifyTime',
        'authVersion' => 'AuthVersion',
        'authVersionName' => 'AuthVersionName',
        'bind' => 'Bind',
        'bindFileProtectType' => 'BindFileProtectType',
        'clientStatus' => 'ClientStatus',
        'clientSubStatus' => 'ClientSubStatus',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'cores' => 'Cores',
        'cpuInfo' => 'CpuInfo',
        'createdTime' => 'CreatedTime',
        'exposedStatus' => 'ExposedStatus',
        'flag' => 'Flag',
        'flagName' => 'FlagName',
        'groupId' => 'GroupId',
        'groupTrace' => 'GroupTrace',
        'hasContainer' => 'HasContainer',
        'hcStatus' => 'HcStatus',
        'healthCheckCount' => 'HealthCheckCount',
        'importance' => 'Importance',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'ip' => 'Ip',
        'ipListString' => 'IpListString',
        'kernel' => 'Kernel',
        'lastLoginTimestamp' => 'LastLoginTimestamp',
        'macListString' => 'MacListString',
        'mem' => 'Mem',
        'namespace' => 'Namespace',
        'os' => 'Os',
        'osName' => 'OsName',
        'podCount' => 'PodCount',
        'postPaidFlag' => 'PostPaidFlag',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
        'riskCount' => 'RiskCount',
        'riskStatus' => 'RiskStatus',
        'safeEventCount' => 'SafeEventCount',
        'serviceId' => 'ServiceId',
        'status' => 'Status',
        'tag' => 'Tag',
        'tagId' => 'TagId',
        'tagResources' => 'TagResources',
        'uuid' => 'Uuid',
        'vendor' => 'Vendor',
        'vendorName' => 'VendorName',
        'vendorUid' => 'VendorUid',
        'vendorUserName' => 'VendorUserName',
        'vpcInstanceId' => 'VpcInstanceId',
        'vulCount' => 'VulCount',
        'vulStatus' => 'VulStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->assetTypeName) {
            $res['AssetTypeName'] = $this->assetTypeName;
        }

        if (null !== $this->authModifyTime) {
            $res['AuthModifyTime'] = $this->authModifyTime;
        }

        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }

        if (null !== $this->authVersionName) {
            $res['AuthVersionName'] = $this->authVersionName;
        }

        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }

        if (null !== $this->bindFileProtectType) {
            $res['BindFileProtectType'] = $this->bindFileProtectType;
        }

        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }

        if (null !== $this->clientSubStatus) {
            $res['ClientSubStatus'] = $this->clientSubStatus;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

        if (null !== $this->cpuInfo) {
            $res['CpuInfo'] = $this->cpuInfo;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->exposedStatus) {
            $res['ExposedStatus'] = $this->exposedStatus;
        }

        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }

        if (null !== $this->flagName) {
            $res['FlagName'] = $this->flagName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupTrace) {
            $res['GroupTrace'] = $this->groupTrace;
        }

        if (null !== $this->hasContainer) {
            $res['HasContainer'] = $this->hasContainer;
        }

        if (null !== $this->hcStatus) {
            $res['HcStatus'] = $this->hcStatus;
        }

        if (null !== $this->healthCheckCount) {
            $res['HealthCheckCount'] = $this->healthCheckCount;
        }

        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipListString) {
            $res['IpListString'] = $this->ipListString;
        }

        if (null !== $this->kernel) {
            $res['Kernel'] = $this->kernel;
        }

        if (null !== $this->lastLoginTimestamp) {
            $res['LastLoginTimestamp'] = $this->lastLoginTimestamp;
        }

        if (null !== $this->macListString) {
            $res['MacListString'] = $this->macListString;
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }

        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }

        if (null !== $this->postPaidFlag) {
            $res['PostPaidFlag'] = $this->postPaidFlag;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }

        if (null !== $this->safeEventCount) {
            $res['SafeEventCount'] = $this->safeEventCount;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        if (null !== $this->tagResources) {
            $res['TagResources'] = $this->tagResources;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
        }

        if (null !== $this->vendorUid) {
            $res['VendorUid'] = $this->vendorUid;
        }

        if (null !== $this->vendorUserName) {
            $res['VendorUserName'] = $this->vendorUserName;
        }

        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        if (null !== $this->vulStatus) {
            $res['VulStatus'] = $this->vulStatus;
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
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['AssetTypeName'])) {
            $model->assetTypeName = $map['AssetTypeName'];
        }

        if (isset($map['AuthModifyTime'])) {
            $model->authModifyTime = $map['AuthModifyTime'];
        }

        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }

        if (isset($map['AuthVersionName'])) {
            $model->authVersionName = $map['AuthVersionName'];
        }

        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }

        if (isset($map['BindFileProtectType'])) {
            $model->bindFileProtectType = $map['BindFileProtectType'];
        }

        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }

        if (isset($map['ClientSubStatus'])) {
            $model->clientSubStatus = $map['ClientSubStatus'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

        if (isset($map['CpuInfo'])) {
            $model->cpuInfo = $map['CpuInfo'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['ExposedStatus'])) {
            $model->exposedStatus = $map['ExposedStatus'];
        }

        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }

        if (isset($map['FlagName'])) {
            $model->flagName = $map['FlagName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupTrace'])) {
            $model->groupTrace = $map['GroupTrace'];
        }

        if (isset($map['HasContainer'])) {
            $model->hasContainer = $map['HasContainer'];
        }

        if (isset($map['HcStatus'])) {
            $model->hcStatus = $map['HcStatus'];
        }

        if (isset($map['HealthCheckCount'])) {
            $model->healthCheckCount = $map['HealthCheckCount'];
        }

        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IpListString'])) {
            $model->ipListString = $map['IpListString'];
        }

        if (isset($map['Kernel'])) {
            $model->kernel = $map['Kernel'];
        }

        if (isset($map['LastLoginTimestamp'])) {
            $model->lastLoginTimestamp = $map['LastLoginTimestamp'];
        }

        if (isset($map['MacListString'])) {
            $model->macListString = $map['MacListString'];
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }

        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }

        if (isset($map['PostPaidFlag'])) {
            $model->postPaidFlag = $map['PostPaidFlag'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }

        if (isset($map['SafeEventCount'])) {
            $model->safeEventCount = $map['SafeEventCount'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        if (isset($map['TagResources'])) {
            $model->tagResources = $map['TagResources'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        if (isset($map['VendorUid'])) {
            $model->vendorUid = $map['VendorUid'];
        }

        if (isset($map['VendorUserName'])) {
            $model->vendorUserName = $map['VendorUserName'];
        }

        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        if (isset($map['VulStatus'])) {
            $model->vulStatus = $map['VulStatus'];
        }

        return $model;
    }
}
