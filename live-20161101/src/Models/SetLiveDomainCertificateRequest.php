<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class SetLiveDomainCertificateRequest extends Model
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
    public $SSLPri;

    /**
     * @var string
     */
    public $SSLProtocol;

    /**
     * @var string
     */
    public $SSLPub;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'certName' => 'CertName',
        'certType' => 'CertType',
        'domainName' => 'DomainName',
        'forceSet' => 'ForceSet',
        'ownerId' => 'OwnerId',
        'SSLPri' => 'SSLPri',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
        'securityToken' => 'SecurityToken',
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

        if (null !== $this->SSLPri) {
            $res['SSLPri'] = $this->SSLPri;
        }

        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }

        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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

        if (isset($map['SSLPri'])) {
            $model->SSLPri = $map['SSLPri'];
        }

        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }

        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
