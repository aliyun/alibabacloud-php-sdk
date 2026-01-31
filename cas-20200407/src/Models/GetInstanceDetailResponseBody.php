<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceDetailResponseBody\dingGroupList;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceDetailResponseBody\domainValidationList;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceDetailResponseBody\tags;

class GetInstanceDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $autoReissue;

    /**
     * @var string
     */
    public $averageWaitingTime;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var int
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var int
     */
    public $certificateNotAfter;

    /**
     * @var int
     */
    public $certificateRevokeTime;

    /**
     * @var string
     */
    public $certificateStatus;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int[]
     */
    public $contactIdList;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var dingGroupList[]
     */
    public $dingGroupList;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var domainValidationList[]
     */
    public $domainValidationList;

    /**
     * @var int
     */
    public $fullDomainCount;

    /**
     * @var string
     */
    public $generateCsrMethod;

    /**
     * @var int
     */
    public $instanceEndTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceStartTime;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $keyAlgorithm;

    /**
     * @var int
     */
    public $orderEndTime;

    /**
     * @var int
     */
    public $orderStartTime;

    /**
     * @var string
     */
    public $pendingResult;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $validationMethod;

    /**
     * @var int
     */
    public $wildcardDomainCount;
    protected $_name = [
        'autoReissue' => 'AutoReissue',
        'averageWaitingTime' => 'AverageWaitingTime',
        'brand' => 'Brand',
        'certIdentifier' => 'CertIdentifier',
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'certificateNotAfter' => 'CertificateNotAfter',
        'certificateRevokeTime' => 'CertificateRevokeTime',
        'certificateStatus' => 'CertificateStatus',
        'certificateType' => 'CertificateType',
        'city' => 'City',
        'companyId' => 'CompanyId',
        'contactIdList' => 'ContactIdList',
        'countryCode' => 'CountryCode',
        'csr' => 'Csr',
        'dingGroupList' => 'DingGroupList',
        'domain' => 'Domain',
        'domainValidationList' => 'DomainValidationList',
        'fullDomainCount' => 'FullDomainCount',
        'generateCsrMethod' => 'GenerateCsrMethod',
        'instanceEndTime' => 'InstanceEndTime',
        'instanceId' => 'InstanceId',
        'instanceStartTime' => 'InstanceStartTime',
        'instanceType' => 'InstanceType',
        'keyAlgorithm' => 'KeyAlgorithm',
        'orderEndTime' => 'OrderEndTime',
        'orderStartTime' => 'OrderStartTime',
        'pendingResult' => 'PendingResult',
        'province' => 'Province',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'spec' => 'Spec',
        'status' => 'Status',
        'tags' => 'Tags',
        'validationMethod' => 'ValidationMethod',
        'wildcardDomainCount' => 'WildcardDomainCount',
    ];

    public function validate()
    {
        if (\is_array($this->contactIdList)) {
            Model::validateArray($this->contactIdList);
        }
        if (\is_array($this->dingGroupList)) {
            Model::validateArray($this->dingGroupList);
        }
        if (\is_array($this->domainValidationList)) {
            Model::validateArray($this->domainValidationList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoReissue) {
            $res['AutoReissue'] = $this->autoReissue;
        }

        if (null !== $this->averageWaitingTime) {
            $res['AverageWaitingTime'] = $this->averageWaitingTime;
        }

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        if (null !== $this->certificateNotAfter) {
            $res['CertificateNotAfter'] = $this->certificateNotAfter;
        }

        if (null !== $this->certificateRevokeTime) {
            $res['CertificateRevokeTime'] = $this->certificateRevokeTime;
        }

        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = $this->certificateStatus;
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }

        if (null !== $this->contactIdList) {
            if (\is_array($this->contactIdList)) {
                $res['ContactIdList'] = [];
                $n1 = 0;
                foreach ($this->contactIdList as $item1) {
                    $res['ContactIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }

        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }

        if (null !== $this->dingGroupList) {
            if (\is_array($this->dingGroupList)) {
                $res['DingGroupList'] = [];
                $n1 = 0;
                foreach ($this->dingGroupList as $item1) {
                    $res['DingGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainValidationList) {
            if (\is_array($this->domainValidationList)) {
                $res['DomainValidationList'] = [];
                $n1 = 0;
                foreach ($this->domainValidationList as $item1) {
                    $res['DomainValidationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fullDomainCount) {
            $res['FullDomainCount'] = $this->fullDomainCount;
        }

        if (null !== $this->generateCsrMethod) {
            $res['GenerateCsrMethod'] = $this->generateCsrMethod;
        }

        if (null !== $this->instanceEndTime) {
            $res['InstanceEndTime'] = $this->instanceEndTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStartTime) {
            $res['InstanceStartTime'] = $this->instanceStartTime;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->keyAlgorithm) {
            $res['KeyAlgorithm'] = $this->keyAlgorithm;
        }

        if (null !== $this->orderEndTime) {
            $res['OrderEndTime'] = $this->orderEndTime;
        }

        if (null !== $this->orderStartTime) {
            $res['OrderStartTime'] = $this->orderStartTime;
        }

        if (null !== $this->pendingResult) {
            $res['PendingResult'] = $this->pendingResult;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (null !== $this->validationMethod) {
            $res['ValidationMethod'] = $this->validationMethod;
        }

        if (null !== $this->wildcardDomainCount) {
            $res['WildcardDomainCount'] = $this->wildcardDomainCount;
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
        if (isset($map['AutoReissue'])) {
            $model->autoReissue = $map['AutoReissue'];
        }

        if (isset($map['AverageWaitingTime'])) {
            $model->averageWaitingTime = $map['AverageWaitingTime'];
        }

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        if (isset($map['CertificateNotAfter'])) {
            $model->certificateNotAfter = $map['CertificateNotAfter'];
        }

        if (isset($map['CertificateRevokeTime'])) {
            $model->certificateRevokeTime = $map['CertificateRevokeTime'];
        }

        if (isset($map['CertificateStatus'])) {
            $model->certificateStatus = $map['CertificateStatus'];
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }

        if (isset($map['ContactIdList'])) {
            if (!empty($map['ContactIdList'])) {
                $model->contactIdList = [];
                $n1 = 0;
                foreach ($map['ContactIdList'] as $item1) {
                    $model->contactIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }

        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }

        if (isset($map['DingGroupList'])) {
            if (!empty($map['DingGroupList'])) {
                $model->dingGroupList = [];
                $n1 = 0;
                foreach ($map['DingGroupList'] as $item1) {
                    $model->dingGroupList[$n1] = dingGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DomainValidationList'])) {
            if (!empty($map['DomainValidationList'])) {
                $model->domainValidationList = [];
                $n1 = 0;
                foreach ($map['DomainValidationList'] as $item1) {
                    $model->domainValidationList[$n1] = domainValidationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FullDomainCount'])) {
            $model->fullDomainCount = $map['FullDomainCount'];
        }

        if (isset($map['GenerateCsrMethod'])) {
            $model->generateCsrMethod = $map['GenerateCsrMethod'];
        }

        if (isset($map['InstanceEndTime'])) {
            $model->instanceEndTime = $map['InstanceEndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStartTime'])) {
            $model->instanceStartTime = $map['InstanceStartTime'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['KeyAlgorithm'])) {
            $model->keyAlgorithm = $map['KeyAlgorithm'];
        }

        if (isset($map['OrderEndTime'])) {
            $model->orderEndTime = $map['OrderEndTime'];
        }

        if (isset($map['OrderStartTime'])) {
            $model->orderStartTime = $map['OrderStartTime'];
        }

        if (isset($map['PendingResult'])) {
            $model->pendingResult = $map['PendingResult'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        if (isset($map['ValidationMethod'])) {
            $model->validationMethod = $map['ValidationMethod'];
        }

        if (isset($map['WildcardDomainCount'])) {
            $model->wildcardDomainCount = $map['WildcardDomainCount'];
        }

        return $model;
    }
}
