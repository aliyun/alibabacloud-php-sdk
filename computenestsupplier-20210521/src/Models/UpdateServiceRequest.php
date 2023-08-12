<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\serviceInfo;
use AlibabaCloud\Tea\Model;

class UpdateServiceRequest extends Model
{
    /**
     * @example {\"CmsTemplateId\":1162921,\"TemplateUrl\":\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1760465342xxxxxx/template/c072ef50-6c03-4d9c-8f0e-d1c440xxxxxx.json\"}
     *
     * @var string
     */
    public $alarmMetadata;

    /**
     * @example 788E7CP0EN9D51P
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example {\"EstimateTime\":null,\"SupplierDeployMetadata\":{\"DeployTimeout\":7200},\"EnableVnc\":false}
     *
     * @var string
     */
    public $deployMetadata;

    /**
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @example 259200
     *
     * @var int
     */
    public $duration;

    /**
     * @example false
     *
     * @var bool
     */
    public $isSupportOperated;

    /**
     * @var string
     */
    public $licenseMetadata;

    /**
     * @var string
     */
    public $logMetadata;

    /**
     * @example {\"PrometheusConfigMap\":{\"Custom_Image_Ecs\":{\"EnablePrometheus\":false}}}
     *
     * @var string
     */
    public $operationMetadata;

    /**
     * @example policyName1, policyName2
     *
     * @var string
     */
    public $policyNames;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example service-1dda29c3eca648xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfo[]
     */
    public $serviceInfo;

    /**
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @example SingleTenant
     *
     * @var string
     */
    public $tenantType;

    /**
     * @example 7
     *
     * @var int
     */
    public $trialDuration;

    /**
     * @example {\"Description\":\"xxx\",\"SupportRollback\":true,\"SupportUpgradeFromVersions\":[],\"UpgradeComponents\":[\"Configuration\"]}
     *
     * @var string
     */
    public $upgradeMetadata;

    /**
     * @example Draft
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'alarmMetadata'     => 'AlarmMetadata',
        'clientToken'       => 'ClientToken',
        'deployMetadata'    => 'DeployMetadata',
        'deployType'        => 'DeployType',
        'duration'          => 'Duration',
        'isSupportOperated' => 'IsSupportOperated',
        'licenseMetadata'   => 'LicenseMetadata',
        'logMetadata'       => 'LogMetadata',
        'operationMetadata' => 'OperationMetadata',
        'policyNames'       => 'PolicyNames',
        'regionId'          => 'RegionId',
        'serviceId'         => 'ServiceId',
        'serviceInfo'       => 'ServiceInfo',
        'serviceType'       => 'ServiceType',
        'serviceVersion'    => 'ServiceVersion',
        'tenantType'        => 'TenantType',
        'trialDuration'     => 'TrialDuration',
        'upgradeMetadata'   => 'UpgradeMetadata',
        'versionName'       => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmMetadata) {
            $res['AlarmMetadata'] = $this->alarmMetadata;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deployMetadata) {
            $res['DeployMetadata'] = $this->deployMetadata;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->isSupportOperated) {
            $res['IsSupportOperated'] = $this->isSupportOperated;
        }
        if (null !== $this->licenseMetadata) {
            $res['LicenseMetadata'] = $this->licenseMetadata;
        }
        if (null !== $this->logMetadata) {
            $res['LogMetadata'] = $this->logMetadata;
        }
        if (null !== $this->operationMetadata) {
            $res['OperationMetadata'] = $this->operationMetadata;
        }
        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInfo) {
            $res['ServiceInfo'] = [];
            if (null !== $this->serviceInfo && \is_array($this->serviceInfo)) {
                $n = 0;
                foreach ($this->serviceInfo as $item) {
                    $res['ServiceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->tenantType) {
            $res['TenantType'] = $this->tenantType;
        }
        if (null !== $this->trialDuration) {
            $res['TrialDuration'] = $this->trialDuration;
        }
        if (null !== $this->upgradeMetadata) {
            $res['UpgradeMetadata'] = $this->upgradeMetadata;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmMetadata'])) {
            $model->alarmMetadata = $map['AlarmMetadata'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeployMetadata'])) {
            $model->deployMetadata = $map['DeployMetadata'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IsSupportOperated'])) {
            $model->isSupportOperated = $map['IsSupportOperated'];
        }
        if (isset($map['LicenseMetadata'])) {
            $model->licenseMetadata = $map['LicenseMetadata'];
        }
        if (isset($map['LogMetadata'])) {
            $model->logMetadata = $map['LogMetadata'];
        }
        if (isset($map['OperationMetadata'])) {
            $model->operationMetadata = $map['OperationMetadata'];
        }
        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInfo'])) {
            if (!empty($map['ServiceInfo'])) {
                $model->serviceInfo = [];
                $n                  = 0;
                foreach ($map['ServiceInfo'] as $item) {
                    $model->serviceInfo[$n++] = null !== $item ? serviceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['TenantType'])) {
            $model->tenantType = $map['TenantType'];
        }
        if (isset($map['TrialDuration'])) {
            $model->trialDuration = $map['TrialDuration'];
        }
        if (isset($map['UpgradeMetadata'])) {
            $model->upgradeMetadata = $map['UpgradeMetadata'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
