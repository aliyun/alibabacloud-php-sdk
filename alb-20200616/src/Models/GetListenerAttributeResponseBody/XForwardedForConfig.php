<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class XForwardedForConfig extends Model
{
    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertClientVerifyEnabled** is set to **true**.
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example test_client-verify-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertClientVerifyAlias;

    /**
     * @description Indicates whether the `X-Forwarded-Clientcert-clientverify` header is used to retrieve the verification result of the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertClientVerifyEnabled;

    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertFingerprintEnabled** is set to **true**.
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example test_finger-print-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertFingerprintAlias;

    /**
     * @description Indicates whether the `X-Forwarded-Clientcert-fingerprint` header is used to retrieve the fingerprint of the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertFingerprintEnabled;

    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertIssuerDNEnabled** is set to **true**.
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example test_issue-dn-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertIssuerDNAlias;

    /**
     * @description Indicates whether the `X-Forwarded-Clientcert-issuerdn` header is used to retrieve information about the authority that issues the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertIssuerDNEnabled;

    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertSubjectDNEnabled** is set to **true**.
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example test_subject-dn-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertSubjectDNAlias;

    /**
     * @description Indicates whether the `X-Forwarded-Clientcert-subjectdn` header is used to retrieve information about the owner of the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertSubjectDNEnabled;

    /**
     * @description Indicates whether the `X-Forwarded-Client-Ip` header is used to retrieve the source port of the ALB instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTP, HTTPS, or QUIC listener.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientSourceIpsEnabled;

    /**
     * @description The trusted proxy IP address.
     *
     * ALB traverses `X-Forwarded-For` backward and selects the first IP address that is not on the trusted IP address list as the real IP address of the client. The IP address is used in source IP address throttling.
     * @example 10.1.1.0/24
     *
     * @var string
     */
    public $XForwardedForClientSourceIpsTrusted;

    /**
     * @description Indicates whether the `X-Forwarded-Client-Port` header is used to retrieve the client port. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTP or HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientSrcPortEnabled;

    /**
     * @description Indicates whether the `X-Forwarded-For` header is used to retrieve the client IP address. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTP or HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForEnabled;

    /**
     * @description Indicates whether the `X-Forwarded-Proto` header is used to retrieve the listening protocol. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTP, HTTPS, or QUIC listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForProtoEnabled;

    /**
     * @description Indicates whether the `SLB-ID` header is used to retrieve the ID of the CLB instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTP, HTTPS, or QUIC listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForSLBIdEnabled;

    /**
     * @description Indicates whether the `X-Forwarded-Port` header is used to retrieve the listening port of the ALB instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is available only when you create an HTTP, HTTPS, or QUIC listener.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForSLBPortEnabled;
    protected $_name = [
        'XForwardedForClientCertClientVerifyAlias'   => 'XForwardedForClientCertClientVerifyAlias',
        'XForwardedForClientCertClientVerifyEnabled' => 'XForwardedForClientCertClientVerifyEnabled',
        'XForwardedForClientCertFingerprintAlias'    => 'XForwardedForClientCertFingerprintAlias',
        'XForwardedForClientCertFingerprintEnabled'  => 'XForwardedForClientCertFingerprintEnabled',
        'XForwardedForClientCertIssuerDNAlias'       => 'XForwardedForClientCertIssuerDNAlias',
        'XForwardedForClientCertIssuerDNEnabled'     => 'XForwardedForClientCertIssuerDNEnabled',
        'XForwardedForClientCertSubjectDNAlias'      => 'XForwardedForClientCertSubjectDNAlias',
        'XForwardedForClientCertSubjectDNEnabled'    => 'XForwardedForClientCertSubjectDNEnabled',
        'XForwardedForClientSourceIpsEnabled'        => 'XForwardedForClientSourceIpsEnabled',
        'XForwardedForClientSourceIpsTrusted'        => 'XForwardedForClientSourceIpsTrusted',
        'XForwardedForClientSrcPortEnabled'          => 'XForwardedForClientSrcPortEnabled',
        'XForwardedForEnabled'                       => 'XForwardedForEnabled',
        'XForwardedForProtoEnabled'                  => 'XForwardedForProtoEnabled',
        'XForwardedForSLBIdEnabled'                  => 'XForwardedForSLBIdEnabled',
        'XForwardedForSLBPortEnabled'                => 'XForwardedForSLBPortEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->XForwardedForClientCertClientVerifyAlias) {
            $res['XForwardedForClientCertClientVerifyAlias'] = $this->XForwardedForClientCertClientVerifyAlias;
        }
        if (null !== $this->XForwardedForClientCertClientVerifyEnabled) {
            $res['XForwardedForClientCertClientVerifyEnabled'] = $this->XForwardedForClientCertClientVerifyEnabled;
        }
        if (null !== $this->XForwardedForClientCertFingerprintAlias) {
            $res['XForwardedForClientCertFingerprintAlias'] = $this->XForwardedForClientCertFingerprintAlias;
        }
        if (null !== $this->XForwardedForClientCertFingerprintEnabled) {
            $res['XForwardedForClientCertFingerprintEnabled'] = $this->XForwardedForClientCertFingerprintEnabled;
        }
        if (null !== $this->XForwardedForClientCertIssuerDNAlias) {
            $res['XForwardedForClientCertIssuerDNAlias'] = $this->XForwardedForClientCertIssuerDNAlias;
        }
        if (null !== $this->XForwardedForClientCertIssuerDNEnabled) {
            $res['XForwardedForClientCertIssuerDNEnabled'] = $this->XForwardedForClientCertIssuerDNEnabled;
        }
        if (null !== $this->XForwardedForClientCertSubjectDNAlias) {
            $res['XForwardedForClientCertSubjectDNAlias'] = $this->XForwardedForClientCertSubjectDNAlias;
        }
        if (null !== $this->XForwardedForClientCertSubjectDNEnabled) {
            $res['XForwardedForClientCertSubjectDNEnabled'] = $this->XForwardedForClientCertSubjectDNEnabled;
        }
        if (null !== $this->XForwardedForClientSourceIpsEnabled) {
            $res['XForwardedForClientSourceIpsEnabled'] = $this->XForwardedForClientSourceIpsEnabled;
        }
        if (null !== $this->XForwardedForClientSourceIpsTrusted) {
            $res['XForwardedForClientSourceIpsTrusted'] = $this->XForwardedForClientSourceIpsTrusted;
        }
        if (null !== $this->XForwardedForClientSrcPortEnabled) {
            $res['XForwardedForClientSrcPortEnabled'] = $this->XForwardedForClientSrcPortEnabled;
        }
        if (null !== $this->XForwardedForEnabled) {
            $res['XForwardedForEnabled'] = $this->XForwardedForEnabled;
        }
        if (null !== $this->XForwardedForProtoEnabled) {
            $res['XForwardedForProtoEnabled'] = $this->XForwardedForProtoEnabled;
        }
        if (null !== $this->XForwardedForSLBIdEnabled) {
            $res['XForwardedForSLBIdEnabled'] = $this->XForwardedForSLBIdEnabled;
        }
        if (null !== $this->XForwardedForSLBPortEnabled) {
            $res['XForwardedForSLBPortEnabled'] = $this->XForwardedForSLBPortEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return XForwardedForConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['XForwardedForClientCertClientVerifyAlias'])) {
            $model->XForwardedForClientCertClientVerifyAlias = $map['XForwardedForClientCertClientVerifyAlias'];
        }
        if (isset($map['XForwardedForClientCertClientVerifyEnabled'])) {
            $model->XForwardedForClientCertClientVerifyEnabled = $map['XForwardedForClientCertClientVerifyEnabled'];
        }
        if (isset($map['XForwardedForClientCertFingerprintAlias'])) {
            $model->XForwardedForClientCertFingerprintAlias = $map['XForwardedForClientCertFingerprintAlias'];
        }
        if (isset($map['XForwardedForClientCertFingerprintEnabled'])) {
            $model->XForwardedForClientCertFingerprintEnabled = $map['XForwardedForClientCertFingerprintEnabled'];
        }
        if (isset($map['XForwardedForClientCertIssuerDNAlias'])) {
            $model->XForwardedForClientCertIssuerDNAlias = $map['XForwardedForClientCertIssuerDNAlias'];
        }
        if (isset($map['XForwardedForClientCertIssuerDNEnabled'])) {
            $model->XForwardedForClientCertIssuerDNEnabled = $map['XForwardedForClientCertIssuerDNEnabled'];
        }
        if (isset($map['XForwardedForClientCertSubjectDNAlias'])) {
            $model->XForwardedForClientCertSubjectDNAlias = $map['XForwardedForClientCertSubjectDNAlias'];
        }
        if (isset($map['XForwardedForClientCertSubjectDNEnabled'])) {
            $model->XForwardedForClientCertSubjectDNEnabled = $map['XForwardedForClientCertSubjectDNEnabled'];
        }
        if (isset($map['XForwardedForClientSourceIpsEnabled'])) {
            $model->XForwardedForClientSourceIpsEnabled = $map['XForwardedForClientSourceIpsEnabled'];
        }
        if (isset($map['XForwardedForClientSourceIpsTrusted'])) {
            $model->XForwardedForClientSourceIpsTrusted = $map['XForwardedForClientSourceIpsTrusted'];
        }
        if (isset($map['XForwardedForClientSrcPortEnabled'])) {
            $model->XForwardedForClientSrcPortEnabled = $map['XForwardedForClientSrcPortEnabled'];
        }
        if (isset($map['XForwardedForEnabled'])) {
            $model->XForwardedForEnabled = $map['XForwardedForEnabled'];
        }
        if (isset($map['XForwardedForProtoEnabled'])) {
            $model->XForwardedForProtoEnabled = $map['XForwardedForProtoEnabled'];
        }
        if (isset($map['XForwardedForSLBIdEnabled'])) {
            $model->XForwardedForSLBIdEnabled = $map['XForwardedForSLBIdEnabled'];
        }
        if (isset($map['XForwardedForSLBPortEnabled'])) {
            $model->XForwardedForSLBPortEnabled = $map['XForwardedForSLBPortEnabled'];
        }

        return $model;
    }
}
