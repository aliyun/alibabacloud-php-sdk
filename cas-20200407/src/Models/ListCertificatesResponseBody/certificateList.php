<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCertificatesResponseBody;

use AlibabaCloud\Dara\Model;

class certificateList extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificateSource;

    /**
     * @var string
     */
    public $certificateStatus;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $existPrivateKey;

    /**
     * @var string
     */
    public $fingerPrint;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var int
     */
    public $keySize;

    /**
     * @var int
     */
    public $notAfter;

    /**
     * @var int
     */
    public $notBefore;

    /**
     * @var string
     */
    public $serial;

    /**
     * @var string[]
     */
    public $subjectAlternativeNames;

    /**
     * @var string[]
     */
    public $usingProductList;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certIdentifier' => 'CertIdentifier',
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'certificateSource' => 'CertificateSource',
        'certificateStatus' => 'CertificateStatus',
        'commonName' => 'CommonName',
        'domain' => 'Domain',
        'existPrivateKey' => 'ExistPrivateKey',
        'fingerPrint' => 'FingerPrint',
        'instanceId' => 'InstanceId',
        'issuer' => 'Issuer',
        'keySize' => 'KeySize',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'serial' => 'Serial',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
        'usingProductList' => 'UsingProductList',
    ];

    public function validate()
    {
        if (\is_array($this->subjectAlternativeNames)) {
            Model::validateArray($this->subjectAlternativeNames);
        }
        if (\is_array($this->usingProductList)) {
            Model::validateArray($this->usingProductList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
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

        if (null !== $this->certificateSource) {
            $res['CertificateSource'] = $this->certificateSource;
        }

        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = $this->certificateStatus;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->existPrivateKey) {
            $res['ExistPrivateKey'] = $this->existPrivateKey;
        }

        if (null !== $this->fingerPrint) {
            $res['FingerPrint'] = $this->fingerPrint;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->keySize) {
            $res['KeySize'] = $this->keySize;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }

        if (null !== $this->subjectAlternativeNames) {
            if (\is_array($this->subjectAlternativeNames)) {
                $res['SubjectAlternativeNames'] = [];
                $n1 = 0;
                foreach ($this->subjectAlternativeNames as $item1) {
                    $res['SubjectAlternativeNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usingProductList) {
            if (\is_array($this->usingProductList)) {
                $res['UsingProductList'] = [];
                $n1 = 0;
                foreach ($this->usingProductList as $item1) {
                    $res['UsingProductList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
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

        if (isset($map['CertificateSource'])) {
            $model->certificateSource = $map['CertificateSource'];
        }

        if (isset($map['CertificateStatus'])) {
            $model->certificateStatus = $map['CertificateStatus'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['ExistPrivateKey'])) {
            $model->existPrivateKey = $map['ExistPrivateKey'];
        }

        if (isset($map['FingerPrint'])) {
            $model->fingerPrint = $map['FingerPrint'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['KeySize'])) {
            $model->keySize = $map['KeySize'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }

        if (isset($map['SubjectAlternativeNames'])) {
            if (!empty($map['SubjectAlternativeNames'])) {
                $model->subjectAlternativeNames = [];
                $n1 = 0;
                foreach ($map['SubjectAlternativeNames'] as $item1) {
                    $model->subjectAlternativeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UsingProductList'])) {
            if (!empty($map['UsingProductList'])) {
                $model->usingProductList = [];
                $n1 = 0;
                foreach ($map['UsingProductList'] as $item1) {
                    $model->usingProductList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
