<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateInstanceRequest\tags;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $autoReissue;

    /**
     * @var string
     */
    public $certificateName;

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
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $generateCsrMethod;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $keyAlgorithm;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $validationMethod;
    protected $_name = [
        'autoReissue' => 'AutoReissue',
        'certificateName' => 'CertificateName',
        'city' => 'City',
        'companyId' => 'CompanyId',
        'contactIdList' => 'ContactIdList',
        'countryCode' => 'CountryCode',
        'csr' => 'Csr',
        'domain' => 'Domain',
        'generateCsrMethod' => 'GenerateCsrMethod',
        'instanceId' => 'InstanceId',
        'keyAlgorithm' => 'KeyAlgorithm',
        'province' => 'Province',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'validationMethod' => 'ValidationMethod',
    ];

    public function validate()
    {
        if (\is_array($this->contactIdList)) {
            Model::validateArray($this->contactIdList);
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

        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
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

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->generateCsrMethod) {
            $res['GenerateCsrMethod'] = $this->generateCsrMethod;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyAlgorithm) {
            $res['KeyAlgorithm'] = $this->keyAlgorithm;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
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

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['GenerateCsrMethod'])) {
            $model->generateCsrMethod = $map['GenerateCsrMethod'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyAlgorithm'])) {
            $model->keyAlgorithm = $map['KeyAlgorithm'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
