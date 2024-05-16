<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class BatchSetCdnDomainServerCertificateRequest extends Model
{
    /**
     * @description The name of the certificate.
     *
     * @example yourCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @description The type of the SSL certificate. Valid values:
     *
     *   **upload**: a user-uploaded SSL certificate.
     *   **cas**: a certificate that is issued by SSL Certificates Service.
     *
     * @example cas
     *
     * @var string
     */
    public $certType;

    /**
     * @description The accelerated domain name to which the SSL certificate belongs. The type of request supported by the accelerated domain name must be HTTPS. You can specify multiple accelerated domain names and separate them with commas (,).
     *
     * This parameter is required.
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
     * @description The region.
     *
     * @example your region
     *
     * @var string
     */
    public $region;

    /**
     * @description The private key. Specify the private key only if you enable the SSL certificate.
     *
     * @example yourSSLPri
     *
     * @var string
     */
    public $SSLPri;

    /**
     * @description Specifies whether to enable the SSL certificate. Valid values:
     *
     *   **on**: enables the SSL certificate.
     *   **off**: disables the SSL certificate. This is the default value.
     *
     * This parameter is required.
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The content of the SSL certificate. Specify the content of the certificate only if you want to enable the SSL certificate.
     *
     * @example yourSSLPub
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
     * @return BatchSetCdnDomainServerCertificateRequest
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
