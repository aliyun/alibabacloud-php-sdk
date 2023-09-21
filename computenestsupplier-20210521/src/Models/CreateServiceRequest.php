<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest\serviceInfo;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
{
    /**
     * @var string
     */
    public $alarmMetadata;

    /**
     * @example Manual
     *
     * @var string
     */
    public $approvalType;

    /**
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
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
     * @example 0
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
     * @example {\"PrometheusConfigMap\":{\"New_Vpc_Ack_And_Jumpserver\":{}}}
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
     * @var bool
     */
    public $resellable;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example service-0e6fca6a51a544xxxxxx
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
     * @example Public
     *
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $sourceServiceId;

    /**
     * @var string
     */
    public $sourceServiceVersion;

    /**
     * @var tag[]
     */
    public $tag;

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
        'alarmMetadata'        => 'AlarmMetadata',
        'approvalType'         => 'ApprovalType',
        'clientToken'          => 'ClientToken',
        'deployMetadata'       => 'DeployMetadata',
        'deployType'           => 'DeployType',
        'duration'             => 'Duration',
        'isSupportOperated'    => 'IsSupportOperated',
        'licenseMetadata'      => 'LicenseMetadata',
        'logMetadata'          => 'LogMetadata',
        'operationMetadata'    => 'OperationMetadata',
        'policyNames'          => 'PolicyNames',
        'regionId'             => 'RegionId',
        'resellable'           => 'Resellable',
        'resourceGroupId'      => 'ResourceGroupId',
        'serviceId'            => 'ServiceId',
        'serviceInfo'          => 'ServiceInfo',
        'serviceType'          => 'ServiceType',
        'shareType'            => 'ShareType',
        'sourceServiceId'      => 'SourceServiceId',
        'sourceServiceVersion' => 'SourceServiceVersion',
        'tag'                  => 'Tag',
        'tenantType'           => 'TenantType',
        'trialDuration'        => 'TrialDuration',
        'upgradeMetadata'      => 'UpgradeMetadata',
        'versionName'          => 'VersionName',
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
        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
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
        if (null !== $this->resellable) {
            $res['Resellable'] = $this->resellable;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->sourceServiceId) {
            $res['SourceServiceId'] = $this->sourceServiceId;
        }
        if (null !== $this->sourceServiceVersion) {
            $res['SourceServiceVersion'] = $this->sourceServiceVersion;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmMetadata'])) {
            $model->alarmMetadata = $map['AlarmMetadata'];
        }
        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
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
        if (isset($map['Resellable'])) {
            $model->resellable = $map['Resellable'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['SourceServiceId'])) {
            $model->sourceServiceId = $map['SourceServiceId'];
        }
        if (isset($map['SourceServiceVersion'])) {
            $model->sourceServiceVersion = $map['SourceServiceVersion'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
