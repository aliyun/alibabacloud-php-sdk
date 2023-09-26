<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description Indicates whether alerts are generated for the current cloud asset. Valid values:
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
     * @description The subtype of the cloud asset.
     *
     * @example 0
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @description The name of the cloud asset subtype.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $assetSubTypeName;

    /**
     * @description The type of the cloud asset. Valid values:
     *
     *   **0**: ECS.
     *   **1**: SLB.
     *   **3**: ApsaraDB RDS.
     *   **4**: ApsaraDB for MongoDB.
     *   **5**: ApsaraDB for Redis.
     *   **6**: Container Registry.
     *   **8**: Container Service for Kubernetes.
     *   **9**: VPC.
     *   **11**: ActionTrail.
     *   **12**: CDN.
     *   **13**: Certificate Management Service.
     *   **14**: Apsara Devops.
     *   **15**: RAM.
     *   **16**: Anti-DDoS.
     *   **17**: WAF.
     *   **18**: OSS.
     *   **19**: PolarDB.
     *   **20**: ApsaraDB RDS for PostgreSQL.
     *   **21**: MSE.
     *   **22**: NAS.
     *   **23**: DSC.
     *   **24**: EIP.
     *   **25**: IDaaS-EIAM.
     *   **26**: PolarDB-X.
     *   **27**: Elasticsearch.
     *
     * @example 3
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The name of the cloud asset type.
     *
     * @example RDS
     *
     * @var string
     */
    public $assetTypeName;

    /**
     * @description The time when the instance was created. The value is a timestamp.
     *
     * @example 1607365213000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The detailed address of the cloud asset.
     *
     * @example https://rdsnext.console.aliyun.com/detail/rm-uf6t6u05n6g48****\/basicInfo?region=cn-shanghai
     *
     * @var string
     */
    public $detailLink;

    /**
     * @description The instance ID of the cloud asset.
     *
     * @example rm-uf6t6u05n6g48****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the cloud asset.
     *
     * @example yztest-l***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the instance.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The region in which the cloud asset resides.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hanghzou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether risks are detected on the current cloud asset. Valid values:
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
     * @description The security information about the cloud asset.
     *
     * @example {\"seriousNum\":0,\"appNum\":0,\"baselineMedium\":0,\"remindNum\":0,\"imageVulNntf\":0,\"cveNum\":0,\"vul\":0,\"uuid\":\"rm-uf6t6u05n6g485o70\",\"emgNum\":0,\"weakPWNum\":0,\"imageMaliciousFileRemind\":0,\"imageBaselineMedium\":0,\"laterVulCount\":0,\"cmsNum\":0,\"imageMaliciousFileSerious\":0,\"agentlessMalicious\":0,\"suspNum\":0,\"imageBaselineHigh\":0,\"asapVulCount\":0,\"imageVulLater\":0,\"agentlessAll\":0,\"sysNum\":0,\"containerLater\":0,\"containerSuspicious\":0,\"imageBaselineNum\":0,\"newSuspicious\":0,\"nntfVulCount\":0,\"scaNum\":0,\"containerNntf\":0,\"health\":0,\"trojan\":0,\"suspicious\":0,\"imageMaliciousFileSuspicious\":0,\"containerRemind\":0,\"baselineLow\":0,\"imageVulAsap\":0,\"imageBaselineLow\":0,\"containerAsap\":0,\"agentlessBaseline\":0,\"agentlessVulSca\":0,\"agentlessVulCve\":0,\"containerSerious\":0,\"baselineHigh\":0,\"account\":0,\"baselineNum\":6}
     *
     * @var string
     */
    public $securityInfo;

    /**
     * @description The service provider of the cloud asset. Valid values:
     *
     *   **0**: Alibaba Cloud.
     *   **1**: service provider that is unrecognized.
     *   **2**: data center.
     *   **3**, **4**, **5**, and **7**: third-party service provider.
     *   **8**: simple application server.
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
        'detailLink'       => 'DetailLink',
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
        if (null !== $this->detailLink) {
            $res['DetailLink'] = $this->detailLink;
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
        if (isset($map['DetailLink'])) {
            $model->detailLink = $map['DetailLink'];
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
