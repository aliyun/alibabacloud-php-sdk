<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class DescribeCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $exportablePrivateKey;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var string
     */
    public $notAfter;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serial;

    /**
     * @var string
     */
    public $signatureAlgorithm;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string[]
     */
    public $subjectAlternativeNames;

    /**
     * @var string
     */
    public $subjectKeyIdentifier;

    /**
     * @var string
     */
    public $subjectPublicKey;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'arn' => 'Arn',
        'certificateId' => 'CertificateId',
        'createdAt' => 'CreatedAt',
        'exportablePrivateKey' => 'ExportablePrivateKey',
        'issuer' => 'Issuer',
        'keySpec' => 'KeySpec',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'requestId' => 'RequestId',
        'serial' => 'Serial',
        'signatureAlgorithm' => 'SignatureAlgorithm',
        'status' => 'Status',
        'subject' => 'Subject',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
        'subjectKeyIdentifier' => 'SubjectKeyIdentifier',
        'subjectPublicKey' => 'SubjectPublicKey',
        'tags' => 'Tags',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->subjectAlternativeNames)) {
            Model::validateArray($this->subjectAlternativeNames);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->exportablePrivateKey) {
            $res['ExportablePrivateKey'] = $this->exportablePrivateKey;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }

        if (null !== $this->signatureAlgorithm) {
            $res['SignatureAlgorithm'] = $this->signatureAlgorithm;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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

        if (null !== $this->subjectKeyIdentifier) {
            $res['SubjectKeyIdentifier'] = $this->subjectKeyIdentifier;
        }

        if (null !== $this->subjectPublicKey) {
            $res['SubjectPublicKey'] = $this->subjectPublicKey;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['ExportablePrivateKey'])) {
            $model->exportablePrivateKey = $map['ExportablePrivateKey'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }

        if (isset($map['SignatureAlgorithm'])) {
            $model->signatureAlgorithm = $map['SignatureAlgorithm'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
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

        if (isset($map['SubjectKeyIdentifier'])) {
            $model->subjectKeyIdentifier = $map['SubjectKeyIdentifier'];
        }

        if (isset($map['SubjectPublicKey'])) {
            $model->subjectPublicKey = $map['SubjectPublicKey'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
