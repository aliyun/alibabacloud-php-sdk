<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetVodDomainSSLCertificateRequest extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example 12342707
     *
     * @var int
     */
    public $certId;

    /**
     * @description The name of the certificate.
     *
     * @example cert_name
     *
     * @var string
     */
    public $certName;

    /**
     * @description The region of the certificate. Valid values:
     *
     *   **ap-southeast-1**: Singapore
     *   **cn-hangzhou**: China (Hangzhou)
     *
     * Default value: **cn-hangzhou**
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $certRegion;

    /**
     * @description The type of the certificate.
     *
     *   **upload**: a user-uploaded SSL certificate.
     *   **cas**: a certificate that is acquired through Certificate Management Service.
     *
     * @example cas
     *
     * @var string
     */
    public $certType;

    /**
     * @description VOD acceleration domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether the certificate is issued in canary releases. If you set this parameter to **staging**, the certificate is issued in canary releases. If you do not specify this parameter or set this parameter to other values, the certificate is officially issued.
     *
     * @example staging
     *
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The private key. This parameter is required only if you enable the certificate.
     *
     * @example ****
     *
     * @var string
     */
    public $SSLPri;

    /**
     * @description Specifies whether to enable the SSL certificate. Default value: off. Valid values:
     *
     *   **on**
     *   **off**
     *
     * This parameter is required.
     *
     * @example off
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The content of the certificate. This parameter is required only if you enable the SSL certificate.
     *
     * @example ****
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetVodDomainSSLCertificateRequest
     */
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
