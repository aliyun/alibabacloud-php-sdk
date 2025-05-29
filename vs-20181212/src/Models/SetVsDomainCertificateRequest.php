<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class SetVsDomainCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $forceSet;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $SSLPri;

    /**
     * @var string
     */
    public $SSLProtocol;

    /**
     * @var string
     */
    public $SSLPub;
    protected $_name = [
        'certName' => 'CertName',
        'certType' => 'CertType',
        'domainName' => 'DomainName',
        'forceSet' => 'ForceSet',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'SSLPri' => 'SSLPri',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->forceSet) {
            $res['ForceSet'] = $this->forceSet;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->SSLPri) {
            $res['SSLPri'] = $this->SSLPri;
        }

        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }

        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ForceSet'])) {
            $model->forceSet = $map['ForceSet'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SSLPri'])) {
            $model->SSLPri = $map['SSLPri'];
        }

        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }

        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }

        return $model;
    }
}
