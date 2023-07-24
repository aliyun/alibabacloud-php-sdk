<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnDomainCertificateRequest extends Model
{
    /**
     * @description The certificate name.
     *
     * @example yourCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @description The certificate type.
     *
     *   **upload**: a user-uploaded SSL certificate.
     *   **cas**: a certificate that is acquired through Certificate Management Service.
     *
     * > If the value of the CertType parameter is **cas**, the **SSLPri** parameter is not required.
     * @example cas
     *
     * @var string
     */
    public $certType;

    /**
     * @description The accelerated domain name. You can specify only one domain name.
     *
     * HTTPS acceleration must be enabled for the accelerated domain name.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to check the certificate name for duplicates. If you set the value to 1, the system does not perform the check and overwrites the information about the existing certificate that uses the same name.
     *
     * @example 1
     *
     * @var string
     */
    public $forceSet;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region. Default value: ch-hangzhou.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The private key. This parameter is required only if you enable the SSL certificate.
     *
     * @example SSLPri
     *
     * @var string
     */
    public $SSLPri;

    /**
     * @description Specifies whether to enable the SSL certificate.
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The certificate content. This parameter is required only if you enable the SSL certificate.
     *
     * @example SSLPub
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'certName'      => 'CertName',
        'certType'      => 'CertType',
        'domainName'    => 'DomainName',
        'forceSet'      => 'ForceSet',
        'ownerId'       => 'OwnerId',
        'region'        => 'Region',
        'SSLPri'        => 'SSLPri',
        'SSLProtocol'   => 'SSLProtocol',
        'SSLPub'        => 'SSLPub',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDcdnDomainCertificateRequest
     */
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
