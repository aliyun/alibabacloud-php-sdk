<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;

use AlibabaCloud\Tea\Model;

class XForwardedForConfig extends Model
{
    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertClientVerifyEnabled** is set to **true**.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example test_client-verify-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertClientVerifyAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-clientverify` header to retrieve the verification result of the client certificate. Valid values:
     *
     *   **true**: uses the X-Forwarded-Clientcert-clientverify header.
     *   **false** (default): does not use the X-Forwarded-Clientcert-clientverify header.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertClientVerifyEnabled;

    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertFingerprintEnabled** is set to **true**.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example test_finger-print-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertFingerprintAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-fingerprint` header to retrieve the fingerprint of the client certificate. Valid values:
     *
     *   **true**: uses the X-Forwarded-Clientcert-fingerprint header.
     *   **false** (default): does not use the X-Forwarded-Clientcert-fingerprint header.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertFingerprintEnabled;

    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertIssuerDNEnabled** is set to **true**.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example test_issue-dn-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertIssuerDNAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-issuerdn` header to retrieve information about the authority that issues the client certificate. Valid values:
     *
     *   **true**: uses the X-Forwarded-Clientcert-issuerdn header.
     *   **false** (default): does not use the X-Forwarded-Clientcert-issuerdn header.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertIssuerDNEnabled;

    /**
     * @description The name of the custom header. This parameter takes effect only when **XForwardedForClientCertSubjectDNEnabled** is set to **true**.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example test_subject-dn-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertSubjectDNAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-subjectdn` header to retrieve information about the owner of the client certificate. Valid values:
     *
     *   **true**: uses the X-Forwarded-Clientcert-subjectdn header.
     *   **false** (default): does not use the X-Forwarded-Clientcert-subjectdn header.
     *
     * >  Only HTTPS listeners support this parameter.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientCertSubjectDNEnabled;

    /**
     * @description Specifies whether to use the `X-Forwarded-Client-Ip` header to obtain the source IP address of the ALB instance. Valid values:
     *
     *   **true**: uses the X-Forwarded-Client-Ip header.
     *   **false** (default): does not use the X-Forwarded-Client-Ip header.
     *
     * >  HTTP, HTTPS, and QUIC listeners support this parameter. The feature corresponding to this parameter is not available by default. If you want to use this feature, submit a ticket.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientSourceIpsEnabled;

    /**
     * @description The trusted proxy IP address.
     *
     * ALB traverses `X-Forwarded-For` backwards and selects the first IP address that is not in the trusted IP list as the originating IP address of the client, which will be throttled if source IP address throttling is enabled.
     * @example 10.1.1.0/24
     *
     * @var string
     */
    public $XForwardedForClientSourceIpsTrusted;

    /**
     * @description Specifies whether to use the `X-Forwarded-Client-Port` header to retrieve the client port. Valid values:
     *
     *   **true**: uses the X-Forwarded-Client-Port header.
     *   **false** (default): does not use the X-Forwarded-Client-Port header.
     *
     * >  HTTP and HTTPS listeners support this parameter.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForClientSrcPortEnabled;

    /**
     * @description Specifies whether to use the `X-Forwarded-For` header to retrieve client IP addresses. Valid values:
     *
     *   **true** (default): uses the X-Forwarded-For header.
     *   **false**: does not use the X-Forwarded-For header.
     *
     * >  HTTP and HTTPS listeners support this parameter.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForEnabled;

    /**
     * @description Specifies whether to use the `X-Forwarded-Proto` header to retrieve the listening protocol of the ALB instance. Valid values:
     *
     *   **true**: uses the X-Forwarded-Proto header.
     *   **false** (default): does not use the X-Forwarded-Proto header.
     *
     * >  HTTP, HTTPS, and QUIC listeners support this parameter.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForProtoEnabled;

    /**
     * @description Specifies whether to use the `SLB-ID` header to retrieve the ID of the ALB instance. Valid values:
     *
     *   **true**: uses the SLB-ID header.
     *   **false** (default): does not use the SLB-ID header.
     *
     * >  HTTP, HTTPS, and QUIC listeners support this parameter.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForSLBIdEnabled;

    /**
     * @description Specifies whether to use the `X-Forwarded-Port` header to retrieve the listening port of the ALB instance. Valid values:
     *
     *   **true**: uses the X-Forwarded-Port header.
     *   **false** (default): does not use the X-Forwarded-Port header.
     *
     * >  HTTP, HTTPS, and QUIC listeners support this parameter.
     * @example false
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
