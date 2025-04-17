<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SetVodDomainSSLCertificateRequest extends Model
{
    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certRegion;

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
    public $env;

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
        'certId' => 'CertId',
        'certName' => 'CertName',
        'certRegion' => 'CertRegion',
        'certType' => 'CertType',
        'domainName' => 'DomainName',
        'env' => 'Env',
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
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->certRegion) {
            $res['CertRegion'] = $this->certRegion;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
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
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CertRegion'])) {
            $model->certRegion = $map['CertRegion'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
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
