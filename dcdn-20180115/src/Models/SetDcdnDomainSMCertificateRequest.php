<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnDomainSMCertificateRequest extends Model
{
    /**
     * @description The identifier of the certificate. The value is Certificate ID-cn-hangzhou. If the ID of the certificate is 123, CertIdentifier is set to 123-cn-hangzhou.
     *
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The accelerated domain name for which the SM certificate is configured.
     *
     * > The domain name must have HTTPS secure acceleration enabled.
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
     * @return SetDcdnDomainSMCertificateRequest
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
