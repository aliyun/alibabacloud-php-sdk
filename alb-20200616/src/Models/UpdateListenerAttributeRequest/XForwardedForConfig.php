<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest;

use AlibabaCloud\Tea\Model;

class XForwardedForConfig extends Model
{
    /**
     * @description The name of the custom header. The header takes effect only when you set **XForwardedForClientCertClientVerifyEnabled **to **true**.
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example test_client-verify-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertClientVerifyAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-clientverify` header to retrieve the verification result of the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientCertClientVerifyEnabled;

    /**
     * @description The name of the custom header. The header takes effect only when you set **XForwardedForClientCertFingerprintEnabled** to **true**.
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example test_finger-print-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertFingerprintAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-fingerprint` header to retrieve the fingerprint of the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientCertFingerprintEnabled;

    /**
     * @description The name of the custom header. The header takes effect only when you set **XForwardedForClientCertIssuerDNEnabled** to **true**.
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example test_issue-dn-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertIssuerDNAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-issuerdn` header to retrieve information about the authority that issues the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientCertIssuerDNEnabled;

    /**
     * @description The name of the custom header. This parameter is valid only if the **XForwardedForClientCertSubjectDNEnabled** parameter is set to **true**.
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example test_subject-dn-alias_123456
     *
     * @var string
     */
    public $XForwardedForClientCertSubjectDNAlias;

    /**
     * @description Specifies whether to use the `X-Forwarded-Clientcert-subjectdn` header to retrieve information about the owner of the client certificate. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is only available for HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientCertSubjectDNEnabled;

    /**
     * @description Specifies whether to use the X-Forwarded-For header to preserve client IP addresses. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is only available for HTTP and HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientSourceIpsEnabled;

    /**
     * @description The trusted proxy IP address.
     *
     * ALB instances traverse the IP addresses in the `X-Forwarded-For` header from the rightmost IP address to the leftmost IP address. The first IP address that is not on the trusted IP address list is considered the client IP address. Requests from the client IP address are throttled.
     * @example 10.1.1.0/24
     *
     * @var string
     */
    public $XForwardedForClientSourceIpsTrusted;

    /**
     * @description Specifies whether to use the `X-Forwarded-Client-srcport` header to retrieve the client port. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is only available for HTTP and HTTPS listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForClientSrcPortEnabled;

    /**
     * @description Specifies whether to use the `X-Forwarded-For` header to retrieve the client IP address. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * > *   If this parameter is set to **true**, the default value of the **XForwardedForProcessingMode** parameter is **append**. You can change it to **remove**.
     * > *   If this parameter is set to **false**, the `X-Forwarded-For` header in the request is not modified in any way before the request is sent to backend servers.
     * > *   This parameter is only available for HTTP and HTTPS listeners.
     * @example true
     *
     * @var bool
     */
    public $XForwardedForEnabled;

    /**
     * @description Specifies whether to use the `X-Forwarded-Host` header to retrieve the client domain name. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >  This parameter is available for HTTP, HTTPS, and QUIC listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForHostEnabled;

    /**
     * @description Specifies how the `X-Forwarded-For` header is processed. This parameter takes effect only when **XForwardedForEnabled** is set to **true**. Valid values:
     *
     *   **append** (default)
     *   **remove**
     *
     * > *   If this parameter is set to **append**, ALB appends the IP address of the last hop to the existing `X-Forwarded-For` header in the request before the request is sent to backend servers.
     * > *   If this parameter is set to **remove**, ALB removes the `X-Forwarded-For` header in the request before the request is sent to backend servers, no matter whether the request carries the `X-Forwarded-For` header.
     * > *   This parameter is only available for HTTP and HTTPS listeners.
     * @example append
     *
     * @var string
     */
    public $XForwardedForProcessingMode;

    /**
     * @description Specifies whether to use the `X-Forwarded-Proto` header to retrieve the listener protocol. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is available for HTTP, HTTPS, and QUIC listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForProtoEnabled;

    /**
     * @description Specifies whether to use the `SLB-ID` header to retrieve the ID of the ALB instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is available for HTTP, HTTPS, and QUIC listeners.
     * @example false
     *
     * @var bool
     */
    public $XForwardedForSLBIdEnabled;

    /**
     * @description Specifies whether to use the `X-Forwarded-Port` header to retrieve the listener port of the ALB instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is available for HTTP, HTTPS, and QUIC listeners.
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
        'XForwardedForHostEnabled'                   => 'XForwardedForHostEnabled',
        'XForwardedForProcessingMode'                => 'XForwardedForProcessingMode',
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
        if (null !== $this->XForwardedForHostEnabled) {
            $res['XForwardedForHostEnabled'] = $this->XForwardedForHostEnabled;
        }
        if (null !== $this->XForwardedForProcessingMode) {
            $res['XForwardedForProcessingMode'] = $this->XForwardedForProcessingMode;
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
        if (isset($map['XForwardedForHostEnabled'])) {
            $model->XForwardedForHostEnabled = $map['XForwardedForHostEnabled'];
        }
        if (isset($map['XForwardedForProcessingMode'])) {
            $model->XForwardedForProcessingMode = $map['XForwardedForProcessingMode'];
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
