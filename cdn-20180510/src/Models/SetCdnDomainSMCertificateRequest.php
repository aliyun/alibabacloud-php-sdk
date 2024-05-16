<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetCdnDomainSMCertificateRequest extends Model
{
    /**
     * @description The ID of the SM certificate that you want to configure. The identifier of the certificate. The value is Certificate ID-cn-hangzhou. For example, if the certificate ID is 123, set the value of this parameter to 123-cn-hangzhou.
     *
     * This parameter is required.
     * @example 1234****-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The accelerated domain name for which you want to configure the SM certificate.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to enable the SSL certificate. Valid values:
     *
     *   **on**
     *   **off**
     *
     * This parameter is required.
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'domainName'     => 'DomainName',
        'ownerId'        => 'OwnerId',
        'SSLProtocol'    => 'SSLProtocol',
        'securityToken'  => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCdnDomainSMCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
