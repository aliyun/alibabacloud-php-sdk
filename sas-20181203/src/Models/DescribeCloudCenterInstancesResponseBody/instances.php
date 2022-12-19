<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudCenterInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description Indicates whether alerts are generated on the asset. Valid values:
     *
     *   **YES**
     *   **NO**
     *
     * @example NO
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **0**: an ECS instance
     *   **1**: a Server Load Balancer (SLB) instance
     *   **2**: a NAT gateway
     *   **3**: an ApsaraDB RDS instance
     *   **4**: an ApsaraDB for MongoDB instance
     *   **5**: an ApsaraDB for Redis instance
     *   **6**: a container image
     *   **7**: a container
     *
     * @example 0
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The timestamp when Security Center is authorized to scan the asset.
     *
     * @example 1627974044000
     *
     * @var int
     */
    public $authModifyTime;

    /**
     * @description The edition of Security Center that is authorized to protect the asset. Valid values:
     *
     *   **1**: Basic edition
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *
     * @example 1
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description The name of the Security Center edition that is authorized to scan the asset. Valid values:
     *
     *   Basic edition
     *   Anti-virus edition
     *   Advanced edition
     *   Enterprise edition
     *   Ultimate edition
     *   Value-added Plan edition
     *
     * @example Ultimate Edition
     *
     * @var string
     */
    public $authVersionName;

    /**
     * @description Indicates whether Security Center is authorized to scan the asset. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @description The status of the Security Center agent installed on the asset. Valid values:
     *
     *   **online**: The Security Center agent is **enabled**.
     *   **offline**: The Security Center agent is **disabled**.
     *   **pause**: The Security Center agent is **suspended**.
     *
     * @example online
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The ID of the cluster.
     *
     * @example c690a0789419f4284a4e0a29e12fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example cluster1
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The number of the CPU cores used by the asset.
     *
     * @example 4
     *
     * @var int
     */
    public $cores;

    /**
     * @description The CPU information about the asset.
     *
     * @example Intel(R) Xeon(R) Platinum 8269CY CPU @ 2.50GHz
     *
     * @var string
     */
    public $cpuInfo;

    /**
     * @description The timestamp when the cluster was created. Unit: milliseconds.
     *
     * @example 1607365213000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description Indicates whether the asset is exposed. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $exposedStatus;

    /**
     * @description Indicates whether the asset is an Alibaba Cloud asset. Valid values:
     *
     *   **0**: yes
     *   **1**: no
     *
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @description The ID of the asset group to which the asset belongs.
     *
     * @example 4120080
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the group to which the asset belongs.
     *
     * @example default
     *
     * @var string
     */
    public $groupTrace;

    /**
     * @description Indicates whether baseline risks are detected on the asset. Valid values:
     *
     *   **YES**
     *   **NO**
     *
     * @example YES
     *
     * @var string
     */
    public $hcStatus;

    /**
     * @description The number of baseline risks that are detected on the asset.
     *
     * @example 1
     *
     * @var int
     */
    public $healthCheckCount;

    /**
     * @description The importance of the asset. Valid values:
     *
     *   **2**: an important asset
     *   **1**: a common asset
     *   **0**: a test asset
     *
     * @example 2
     *
     * @var int
     */
    public $importance;

    /**
     * @description The ID of the asset.
     *
     * @example i-m5***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the asset.
     *
     * @example yztest-l***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The public IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP addresses of the system.
     *
     * @example 172.31.XX.XX,172.171.XX.XX
     *
     * @var string
     */
    public $ipListString;

    /**
     * @description The version of the kernel.
     *
     * @example 3.10.0-1127.19.1.el7.x86_64
     *
     * @var string
     */
    public $kernel;

    /**
     * @description The timestamp when the Security Center agent was last online. Unit: milliseconds.
     *
     * @example 1637592907000
     *
     * @var int
     */
    public $lastLoginTimestamp;

    /**
     * @description The MAC address of the system.
     *
     * @example 00:13:3e:31:13:39,02:12:67:b8:**:**
     *
     * @var string
     */
    public $macListString;

    /**
     * @description The size of the memory. Unit: MB.
     *
     * @example 1024
     *
     * @var int
     */
    public $mem;

    /**
     * @description The operating system of the asset.
     *
     * @example Linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The kernel version of the asset.
     *
     * @example -
     *
     * @var string
     */
    public $osName;

    /**
     * @description The number of pods.
     *
     * @example 1
     *
     * @var int
     */
    public $podCount;

    /**
     * @description The region ID of the asset.
     *
     * @example cn-hangzhou-cm***-***
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the region in which the asset resides.
     *
     * @example cn-hanghzou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region in which the asset resides.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The total number of baseline risks that are detected on the asset. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **account**: the number of accounts that are used to log on from unapproved logon locations and whose passwords are cracked
     *   **appNum**: the number of scanners
     *   **asapVulCount**: the total number of high-risk vulnerabilities
     *   **baselineHigh**: the number of high-risk baseline risks
     *   **baselineLow**: the number of low-risk baseline risks
     *   **baselineMedium**: the number of medium-risk baseline risks
     *   **baselineNum**: the total number of baseline risks
     *   **cmsNum**: the number of Web-CMS vulnerabilities
     *   **containerAsap**: the number of high-risk vulnerabilities that are detected on containers
     *   **containerLater**: the number of medium-risk vulnerabilities that are detected on containers
     *   **containerNntf**: the number of low-risk vulnerabilities that are detected on containers
     *   **containerRemind**: the number of alerts whose Emergency level is Reminder on containers
     *   **containerSerious**: the number of alerts whose Emergency level is Urgent on containers
     *   **containerSuspicious**: the number of alerts whose Emergency level is Suspicious on containers
     *   **cveNum**: the number of Linux software vulnerabilities
     *   **emgNum**: the number of urgent vulnerabilities
     *   **health**: the number of baseline alerts that are unhandled
     *   **imageBaselineHigh**: the number of high-risk baseline risks that are detected on images
     *   **imageBaselineLow**: the number of low-risk baseline risks that are detected on images
     *   **imageBaselineMedium**: the number of medium-risk baseline risks that are detected on images
     *   **imageBaselineNum**: the total number of baseline risks that are detected on images
     *   **imageMaliciousFileRemind**: the number of malicious files that are detected on images and have the Emergency level of Reminder
     *   **imageMaliciousFileSerious**: the number of malicious files that are detected on images and have the Emergency level of Urgent
     *   **imageMaliciousFileSuspicious**: the number of malicious files that are detected on images and have the Emergency level of Suspicious
     *   **imageVulAsap**: the number of high-risk vulnerabilities that are detected on images
     *   **imageVulLater**: the number of medium-risk vulnerabilities that are detected on an image
     *   **imageVulNntf**: the number of low-risk vulnerabilities that are detected on an image
     *   **laterVulCount**: the number of medium-risk vulnerabilities
     *   **newSuspicious**: the number of alerts
     *   **nntfVulCount**: the number of low-risk vulnerabilities.
     *   **remindNum**: the number of alerts whose Emergency level is Reminder
     *   **scaNum**: the number of vulnerabilities that are detected based on software component analysis
     *   **seriousNum**: the number of alerts whose Emergency level is Urgent
     *   **suspNum**: the number of alerts whose Emergency level is Suspicious
     *   **suspicious**: the total number of alerts
     *   **sysNum**: the number of Windows system vulnerabilities
     *   **trojan**: the number of trojans
     *   **uuid**: the UUIDs of assets
     *   **vul**: the number of vulnerabilities
     *   **weakPWNum**: the number of weak passwords
     *
     * @example {"account":0,"appNum":0,"asapVulCount":0,"baselineHigh":0,"baselineLow":0,"baselineMedium":0,"baselineNum":0,"cmsNum":0,"containerAsap":0,"containerLater":0,"containerNntf":0,"containerRemind":0,"containerSerious":0,"containerSuspicious":0,"cveNum":0,"emgNum":0,"health":0,"imageBaselineHigh":0,"imageBaselineLow":0,"imageBaselineMedium":0,"imageBaselineNum":0,"imageMaliciousFileRemind":0,"imageMaliciousFileSerious":0,"imageMaliciousFileSuspicious":0,"imageVulAsap":0,"imageVulLater":0,"imageVulNntf":0,"laterVulCount":0,"newSuspicious":0,"nntfVulCount":0,"remindNum":0,"scaNum":0,"seriousNum":0,"suspNum":0,"suspicious":0,"sysNum":0,"trojan":0,"uuid":"inet-37316411-37fe-4b72-b245-346a2721d4b6","vul":0,"weakPWNum":0}
     *
     * @var string
     */
    public $riskCount;

    /**
     * @description Indicates whether risks are detected on the asset. Valid values:
     *
     *   **YES**
     *   **NO**
     *
     * @example NO
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @description The number of alerts that are generated on the asset.
     *
     * @example 5
     *
     * @var int
     */
    public $safeEventCount;

    /**
     * @description The status of the asset. Valid values:
     *
     *   **Running**: running
     *   **notRunning**: stopped
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the asset tag.
     *
     * @example InternetIp,test
     *
     * @var string
     */
    public $tag;

    /**
     * @description The ID of the asset tag.
     *
     * @example 121313,41412
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The UUID of the asset.
     *
     * @example c9107c04-942f-40c1-981a-f1c1***
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The type of the asset by source. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud.
     *   **1**: a third-party cloud server
     *   **2**: a server in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a lightweight asset
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;

    /**
     * @description The name of the service provider (SP) for the asset.
     *
     * Valid values:
     *
     *   **ALIYUN**: Alibaba Cloud
     *   **OUT**: a third-party service provider
     *   **IDC**: a data center
     *   **TENCENT**: Tencent Cloud
     *   **HUAWEICLOUD**: Huawei Cloud
     *   **Microsoft**: Microsoft
     *   **AWS**: Amazon Web Services (AWS)
     *   **TRIPARTITE**: a lightweight server
     *
     * @example IDC
     *
     * @var string
     */
    public $vendorName;

    /**
     * @description The ID of the VPC to which the asset belongs.
     *
     * @example vpc-uf60agqq65bs98zoo****
     *
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @description The number of vulnerabilities that are detected on the asset.
     *
     * @example 2
     *
     * @var int
     */
    public $vulCount;

    /**
     * @description Indicates whether vulnerabilities are detected on the asset. Valid values:
     *
     *   **YES**
     *   **NO**
     *
     * @example YES
     *
     * @var string
     */
    public $vulStatus;
    protected $_name = [
        'alarmStatus'        => 'AlarmStatus',
        'assetType'          => 'AssetType',
        'authModifyTime'     => 'AuthModifyTime',
        'authVersion'        => 'AuthVersion',
        'authVersionName'    => 'AuthVersionName',
        'bind'               => 'Bind',
        'clientStatus'       => 'ClientStatus',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'cores'              => 'Cores',
        'cpuInfo'            => 'CpuInfo',
        'createdTime'        => 'CreatedTime',
        'exposedStatus'      => 'ExposedStatus',
        'flag'               => 'Flag',
        'groupId'            => 'GroupId',
        'groupTrace'         => 'GroupTrace',
        'hcStatus'           => 'HcStatus',
        'healthCheckCount'   => 'HealthCheckCount',
        'importance'         => 'Importance',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'internetIp'         => 'InternetIp',
        'intranetIp'         => 'IntranetIp',
        'ip'                 => 'Ip',
        'ipListString'       => 'IpListString',
        'kernel'             => 'Kernel',
        'lastLoginTimestamp' => 'LastLoginTimestamp',
        'macListString'      => 'MacListString',
        'mem'                => 'Mem',
        'os'                 => 'Os',
        'osName'             => 'OsName',
        'podCount'           => 'PodCount',
        'region'             => 'Region',
        'regionId'           => 'RegionId',
        'regionName'         => 'RegionName',
        'riskCount'          => 'RiskCount',
        'riskStatus'         => 'RiskStatus',
        'safeEventCount'     => 'SafeEventCount',
        'status'             => 'Status',
        'tag'                => 'Tag',
        'tagId'              => 'TagId',
        'uuid'               => 'Uuid',
        'vendor'             => 'Vendor',
        'vendorName'         => 'VendorName',
        'vpcInstanceId'      => 'VpcInstanceId',
        'vulCount'           => 'VulCount',
        'vulStatus'          => 'VulStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
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
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupTrace) {
            $res['GroupTrace'] = $this->groupTrace;
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
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
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
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupTrace'])) {
            $model->groupTrace = $map['GroupTrace'];
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
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
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
