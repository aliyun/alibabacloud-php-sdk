<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveDomainCertificateRequest extends Model
{
    /**
     * @description The certificate name.
     *
     * @example Cert-****
     *
     * @var string
     */
    public $certName;

    /**
     * @description The certificate type. Valid values:
     *
     *   **upload**: a custom certificate
     *   **cas**: a certificate that is purchased from Certificate Management Service
     *   **free**: a free certificate (for testing)
     *
     * @example free
     *
     * @var string
     */
    public $certType;

    /**
     * @description The domain name that is secured by the certificate. The domain name uses `HTTPS`-based acceleration.
     *
     * This parameter is required.
     *
     * @example developer.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to check the certificate name for duplicates. A value of 1 indicates that the system does not perform the check and overwrites the information about the certificate that has the same name. Set the value to **1**.
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
     * @description The private key.
     *
     * >  This parameter is required only if you set the SSLProtocol parameter to on.
     *
     * @example ****
     *
     * @var string
     */
    public $SSLPri;

    /**
     * @description Specifies whether to enable the HTTPS certificate. Valid values:
     *
     *   **on**. If you set this parameter to **on**, you must also specify the SSLPub and SSLPri parameters.
     *   **off**. This is the default value.
     *
     * This parameter is required.
     *
     * @example off
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The public key.
     *
     * >  This parameter is required only if you set the SSLProtocol parameter to on.
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

    public function validate() {}

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
     * @return SetLiveDomainCertificateRequest
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
