<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description Indicates whether risks are detected on the cloud asset. Valid values:
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
     * @description The instance ID of the cloud asset.
     *
     * @example 0
     *
     * @var string
     */
    public $assetSubType;

    /**
     * @description The security information about the cloud asset.
     *
     * @example SECURITY_GROUP
     *
     * @var string
     */
    public $assetSubTypeName;

    /**
     * @description The subtype of the cloud asset. The subtype of the cloud service. Valid values:
     *
     *   **0**: ECS
     * **0**: instance
     * **1**: disk (storage)
     * **2**: security group
     *   **1**: SLB
     * **0**: SLB
     * **1**: Application Load Balancer (ALB)
     *   **3**: ApsaraDB RDS
     * **0**: instance
     *   **4**: MongoDB
     * **0**: instance
     *   **5**: Redis
     * **0**: instance
     *   **6**: Container Registry
     * **1**: Enterprise Edition
     * **2**: Personal Edition
     *   **8**: ACK
     * **0**: cluster
     *   **9**: VPC
     * **0**: NAT gateway
     * **1**:EIP
     * **2**:VPN
     * **3**:FLOW_LOG
     *   **11**: ActionTrail
     * **0**: trail
     *   **12**: CDN
     * **0**: instance
     *   **13**: Certificate Management Service (formerly SSL Certificates Service)
     * **0**: certificate
     *   **14**: Apsara Devops
     * **0**: organization
     *   **16**: Anti-DDoS
     * **0**: instance
     *   **17**: WAF
     * **0**: domain name
     *   **18**: OSS
     * **0**:Bucket
     *   **19**: PolarDB
     * **0**: cluster
     *   **20**: ApsaraDB RDS for PostgreSQL
     * **0**: instance
     *   **21**: MSE
     * **0**: cluster
     *   **22**: NAS
     * **0**: file system
     *   **23**: DSC
     * **0**: instance
     *   **24**: EIP
     * **0**: Anycast EIP
     *   **25**: IDaaS EIAM
     * **0**: instance
     *   **26**: PolarDB-X
     * **0**: instance
     *   **27**: Elasticsearch
     * **0**: instance
     *
     * @example 0
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The subtype name of the cloud asset.
     *
     * @example ECS
     *
     * @var string
     */
    public $assetTypeName;

    /**
     * @description The public IP address of the instance.
     *
     * @example 1607365213000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The instance name of the cloud asset.
     *
     * @example d-uf60vevzkztnflx7cny5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the instance was created.
     *
     * @example yztest-l***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether alerts are generated for the cloud asset. Valid values:
     *
     *   **YES**
     *   **NO**
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The type of the cloud asset by source. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud
     *   **1**: a third-party cloud asset
     *   **2**: an asset in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a lightweight asset
     *
     * @example cn-hanghzou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type name of the cloud asset.
     *
     * @example NO
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @example {"seriousNum":0,"appNum":0,"baselineMedium":0,"remindNum":0,"imageVulNntf":0,"cveNum":0,"vul":0,"uuid":"yuejia-test","emgNum":0,"weakPWNum":0,"imageMaliciousFileRemind":0,"imageBaselineMedium":0,"laterVulCount":0,"cmsNum":0,"imageMaliciousFileSerious":0,"agentlessMalicious":0,"suspNum":0,"imageBaselineHigh":0,"asapVulCount":0,"imageVulLater":0,"agentlessAll":0,"sysNum":0,"containerLater":0,"containerSuspicious":0,"imageBaselineNum":0,"newSuspicious":0,"nntfVulCount":0,"scaNum":0,"containerNntf":0,"health":0,"trojan":0,"suspicious":0,"imageMaliciousFileSuspicious":0,"containerRemind":0,"baselineLow":0,"imageVulAsap":0,"imageBaselineLow":0,"containerAsap":0,"agentlessBaseline":0,"agentlessVulSca":0,"agentlessVulCve":0,"containerSerious":0,"baselineHigh":0,"account":0,"baselineNum":5}
     *
     * @var string
     */
    public $securityInfo;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **0**: Elastic Compute Service (ECS)
     *   **1**: Server Load Balancer (SLB)
     *   **3**: ApsaraDB RDS
     *   **4**: ApsaraDB for MongoDB (MongoDB)
     *   **5**: ApsaraDB for Redis (Redis)
     *   **6**: Container Registry
     *   **8**: Container Service for Kubernetes (ACK)
     *   **9**: Virtual Private Cloud (VPC)
     *   **11**: ActionTrail
     *   **12**: Alibaba Cloud CDN (CDN)
     *   **13**: Certificate Management Service (formerly SSL Certificates Service)
     *   **14**: Apsara Devops
     *   **16**: Anti-DDoS
     *   **17**: Web Application Firewall (WAF)
     *   **18**: Object Storage Service (OSS)
     *   **19**: PolarDB
     *   **20**: ApsaraDB RDS for PostgreSQL
     *   **21**: Microservices Engine (MSE)
     *   **22**: Apsara File Storage NAS (NAS)
     *   **23**: Data Security Center (DSC)
     *   **24**: Elastic IP Address (EIP)
     *   **25**: IDaaS EIAM
     *   **26**: PolarDB-X
     *   **27**: Elasticsearch
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'alarmStatus'      => 'AlarmStatus',
        'assetSubType'     => 'AssetSubType',
        'assetSubTypeName' => 'AssetSubTypeName',
        'assetType'        => 'AssetType',
        'assetTypeName'    => 'AssetTypeName',
        'createdTime'      => 'CreatedTime',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'internetIp'       => 'InternetIp',
        'regionId'         => 'RegionId',
        'riskStatus'       => 'RiskStatus',
        'securityInfo'     => 'SecurityInfo',
        'vendor'           => 'Vendor',
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
        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }
        if (null !== $this->assetSubTypeName) {
            $res['AssetSubTypeName'] = $this->assetSubTypeName;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->assetTypeName) {
            $res['AssetTypeName'] = $this->assetTypeName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->securityInfo) {
            $res['SecurityInfo'] = $this->securityInfo;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }
        if (isset($map['AssetSubTypeName'])) {
            $model->assetSubTypeName = $map['AssetSubTypeName'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['AssetTypeName'])) {
            $model->assetTypeName = $map['AssetTypeName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['SecurityInfo'])) {
            $model->securityInfo = $map['SecurityInfo'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
