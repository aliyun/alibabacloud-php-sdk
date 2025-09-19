<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class SetAppDomainCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $publicKey;
    protected $_name = [
        'bizId' => 'BizId',
        'certificateName' => 'CertificateName',
        'certificateType' => 'CertificateType',
        'domainName' => 'DomainName',
        'privateKey' => 'PrivateKey',
        'publicKey' => 'PublicKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        return $model;
    }
}
