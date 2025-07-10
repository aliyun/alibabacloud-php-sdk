<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\complianceMetadata;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\instanceRoleInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\serviceDocumentInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\serviceInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\supportContacts;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\tags;

class GetServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $alarmMetadata;

    /**
     * @var string
     */
    public $categories;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @var complianceMetadata
     */
    public $complianceMetadata;

    /**
     * @var string
     */
    public $deployFrom;

    /**
     * @var string
     */
    public $deployMetadata;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var instanceRoleInfos[]
     */
    public $instanceRoleInfos;

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
    public $permission;

    /**
     * @var string
     */
    public $policyNames;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceDocumentInfos[]
     */
    public $serviceDocumentInfos;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @var string
     */
    public $serviceProductUrl;

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
    public $status;

    /**
     * @var string
     */
    public $supplierDesc;

    /**
     * @var string
     */
    public $supplierLogo;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var int
     */
    public $supplierUid;

    /**
     * @var string
     */
    public $supplierUrl;

    /**
     * @var supportContacts[]
     */
    public $supportContacts;

    /**
     * @var tags[]
     */
    public $tags;

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
    public $trialType;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'alarmMetadata' => 'AlarmMetadata',
        'categories' => 'Categories',
        'commodity' => 'Commodity',
        'complianceMetadata' => 'ComplianceMetadata',
        'deployFrom' => 'DeployFrom',
        'deployMetadata' => 'DeployMetadata',
        'deployType' => 'DeployType',
        'duration' => 'Duration',
        'instanceRoleInfos' => 'InstanceRoleInfos',
        'isSupportOperated' => 'IsSupportOperated',
        'licenseMetadata' => 'LicenseMetadata',
        'logMetadata' => 'LogMetadata',
        'operationMetadata' => 'OperationMetadata',
        'permission' => 'Permission',
        'policyNames' => 'PolicyNames',
        'publishTime' => 'PublishTime',
        'requestId' => 'RequestId',
        'serviceDocumentInfos' => 'ServiceDocumentInfos',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceProductUrl' => 'ServiceProductUrl',
        'serviceType' => 'ServiceType',
        'shareType' => 'ShareType',
        'status' => 'Status',
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierName' => 'SupplierName',
        'supplierUid' => 'SupplierUid',
        'supplierUrl' => 'SupplierUrl',
        'supportContacts' => 'SupportContacts',
        'tags' => 'Tags',
        'tenantType' => 'TenantType',
        'trialDuration' => 'TrialDuration',
        'trialType' => 'TrialType',
        'version' => 'Version',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        if (null !== $this->complianceMetadata) {
            $this->complianceMetadata->validate();
        }
        if (\is_array($this->instanceRoleInfos)) {
            Model::validateArray($this->instanceRoleInfos);
        }
        if (\is_array($this->serviceDocumentInfos)) {
            Model::validateArray($this->serviceDocumentInfos);
        }
        if (\is_array($this->serviceInfos)) {
            Model::validateArray($this->serviceInfos);
        }
        if (\is_array($this->supportContacts)) {
            Model::validateArray($this->supportContacts);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmMetadata) {
            $res['AlarmMetadata'] = $this->alarmMetadata;
        }

        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }

        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
        }

        if (null !== $this->complianceMetadata) {
            $res['ComplianceMetadata'] = null !== $this->complianceMetadata ? $this->complianceMetadata->toArray($noStream) : $this->complianceMetadata;
        }

        if (null !== $this->deployFrom) {
            $res['DeployFrom'] = $this->deployFrom;
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

        if (null !== $this->instanceRoleInfos) {
            if (\is_array($this->instanceRoleInfos)) {
                $res['InstanceRoleInfos'] = [];
                $n1 = 0;
                foreach ($this->instanceRoleInfos as $item1) {
                    $res['InstanceRoleInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceDocumentInfos) {
            if (\is_array($this->serviceDocumentInfos)) {
                $res['ServiceDocumentInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceDocumentInfos as $item1) {
                    $res['ServiceDocumentInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInfos) {
            if (\is_array($this->serviceInfos)) {
                $res['ServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceInfos as $item1) {
                    $res['ServiceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceProductUrl) {
            $res['ServiceProductUrl'] = $this->serviceProductUrl;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supplierDesc) {
            $res['SupplierDesc'] = $this->supplierDesc;
        }

        if (null !== $this->supplierLogo) {
            $res['SupplierLogo'] = $this->supplierLogo;
        }

        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }

        if (null !== $this->supplierUid) {
            $res['SupplierUid'] = $this->supplierUid;
        }

        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }

        if (null !== $this->supportContacts) {
            if (\is_array($this->supportContacts)) {
                $res['SupportContacts'] = [];
                $n1 = 0;
                foreach ($this->supportContacts as $item1) {
                    $res['SupportContacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['Categories'])) {
            $model->categories = $map['Categories'];
        }

        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }

        if (isset($map['ComplianceMetadata'])) {
            $model->complianceMetadata = complianceMetadata::fromMap($map['ComplianceMetadata']);
        }

        if (isset($map['DeployFrom'])) {
            $model->deployFrom = $map['DeployFrom'];
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

        if (isset($map['InstanceRoleInfos'])) {
            if (!empty($map['InstanceRoleInfos'])) {
                $model->instanceRoleInfos = [];
                $n1 = 0;
                foreach ($map['InstanceRoleInfos'] as $item1) {
                    $model->instanceRoleInfos[$n1] = instanceRoleInfos::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceDocumentInfos'])) {
            if (!empty($map['ServiceDocumentInfos'])) {
                $model->serviceDocumentInfos = [];
                $n1 = 0;
                foreach ($map['ServiceDocumentInfos'] as $item1) {
                    $model->serviceDocumentInfos[$n1] = serviceDocumentInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n1 = 0;
                foreach ($map['ServiceInfos'] as $item1) {
                    $model->serviceInfos[$n1] = serviceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceProductUrl'])) {
            $model->serviceProductUrl = $map['ServiceProductUrl'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupplierDesc'])) {
            $model->supplierDesc = $map['SupplierDesc'];
        }

        if (isset($map['SupplierLogo'])) {
            $model->supplierLogo = $map['SupplierLogo'];
        }

        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        if (isset($map['SupplierUid'])) {
            $model->supplierUid = $map['SupplierUid'];
        }

        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }

        if (isset($map['SupportContacts'])) {
            if (!empty($map['SupportContacts'])) {
                $model->supportContacts = [];
                $n1 = 0;
                foreach ($map['SupportContacts'] as $item1) {
                    $model->supportContacts[$n1] = supportContacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
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

        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
