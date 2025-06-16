<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceShrinkRequest\serviceInfo;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceShrinkRequest\tag;

class CreateServiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmMetadata;

    /**
     * @var string
     */
    public $approvalType;

    /**
     * @var string
     */
    public $buildParameters;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $complianceMetadataShrink;

    /**
     * @var string
     */
    public $deployMetadata;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var int
     */
    public $duration;

    /**
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
     * @var string
     */
    public $operationMetadata;

    /**
     * @var string
     */
    public $policyNames;

    /**
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
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfo[]
     */
    public $serviceInfo;

    /**
     * @var string
     */
    public $serviceType;

    /**
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
     * @var string
     */
    public $tenantType;

    /**
     * @var int
     */
    public $trialDuration;

    /**
     * @var string
     */
    public $upgradeMetadata;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'alarmMetadata' => 'AlarmMetadata',
        'approvalType' => 'ApprovalType',
        'buildParameters' => 'BuildParameters',
        'clientToken' => 'ClientToken',
        'complianceMetadataShrink' => 'ComplianceMetadata',
        'deployMetadata' => 'DeployMetadata',
        'deployType' => 'DeployType',
        'dryRun' => 'DryRun',
        'duration' => 'Duration',
        'isSupportOperated' => 'IsSupportOperated',
        'licenseMetadata' => 'LicenseMetadata',
        'logMetadata' => 'LogMetadata',
        'operationMetadata' => 'OperationMetadata',
        'policyNames' => 'PolicyNames',
        'regionId' => 'RegionId',
        'resellable' => 'Resellable',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceId' => 'ServiceId',
        'serviceInfo' => 'ServiceInfo',
        'serviceType' => 'ServiceType',
        'shareType' => 'ShareType',
        'sourceServiceId' => 'SourceServiceId',
        'sourceServiceVersion' => 'SourceServiceVersion',
        'tag' => 'Tag',
        'tenantType' => 'TenantType',
        'trialDuration' => 'TrialDuration',
        'upgradeMetadata' => 'UpgradeMetadata',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (\is_array($this->serviceInfo)) {
            Model::validateArray($this->serviceInfo);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmMetadata) {
            $res['AlarmMetadata'] = $this->alarmMetadata;
        }

        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->buildParameters) {
            $res['BuildParameters'] = $this->buildParameters;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->complianceMetadataShrink) {
            $res['ComplianceMetadata'] = $this->complianceMetadataShrink;
        }

        if (null !== $this->deployMetadata) {
            $res['DeployMetadata'] = $this->deployMetadata;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
            if (\is_array($this->serviceInfo)) {
                $res['ServiceInfo'] = [];
                $n1 = 0;
                foreach ($this->serviceInfo as $item1) {
                    $res['ServiceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmMetadata'])) {
            $model->alarmMetadata = $map['AlarmMetadata'];
        }

        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }

        if (isset($map['BuildParameters'])) {
            $model->buildParameters = $map['BuildParameters'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ComplianceMetadata'])) {
            $model->complianceMetadataShrink = $map['ComplianceMetadata'];
        }

        if (isset($map['DeployMetadata'])) {
            $model->deployMetadata = $map['DeployMetadata'];
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
                $n1 = 0;
                foreach ($map['ServiceInfo'] as $item1) {
                    $model->serviceInfo[$n1] = serviceInfo::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
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
