<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest;

use AlibabaCloud\Tea\Model;

class listen extends Model
{
    /**
     * @description The ID of the certificate that you want to add.
     *
     * @example 123
     *
     * @var string
     */
    public $certId;

    /**
     * @description The type of cipher suite that you want to add. This parameter is available only when you specify the **HttpsPorts** parameter. Valid values:
     *
     *   **1:** all cipher suites.
     *   **2:** strong cipher suites. You can select this value only when you set the **TLSVersion** parameter to **tlsv1.2**.
     *   **99:** custom cipher suites.
     *
     * @example 2
     *
     * @var int
     */
    public $cipherSuite;

    /**
     * @description The custom cipher suites that you want to add. This parameter is available only when you set the **CipherSuite** parameter to **99**.
     *
     * @var string[]
     */
    public $customCiphers;

    /**
     * @description Specifies whether to support TLS 1.3. This parameter is available only when you specify the **HttpsPorts** parameter. Valid values:
     *
     *   **true:** supports TLS 1.3.
     *   **false:** does not support TLS 1.3.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @description Specifies whether to enable an exclusive IP address for the domain name. This parameter is available only when you set the **IPv6Enabled** parameter to false and the **ProtectionResource** parameter to **share**. Valid values:
     *
     *   **true:** enables an exclusive IP address for the domain name.
     *   **false:** does not enable an exclusive IP address for the domain name. This is the default value.
     *
     * @example true
     *
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @description Specifies whether to enable HTTP to HTTPS redirection for the domain name. This parameter is available only when you specify the **HttpsPorts** parameter and leave the **HttpPorts** parameter empty. Valid values:
     *
     *   **true:** enables HTTP to HTTPS redirection.
     *   **false:** disables HTTP to HTTPS redirection.
     *
     * @example true
     *
     * @var bool
     */
    public $focusHttps;

    /**
     * @description Specifies whether to enable HTTP/2. This parameter is available only when you specify the **HttpsPorts** parameter. Valid values:
     *
     *   **true:** enables HTTP/2.
     *   **false:** disables HTTP/2. This is the default value.
     *
     * @example true
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description An array of HTTP listener ports. Specify the value of this parameter in the \[port1,port2,...] format.
     *
     * @var int[]
     */
    public $httpPorts;

    /**
     * @description An array of HTTPS listener ports. Specify the value of this parameter in the \[port1,port2,...] format.
     *
     * @var int[]
     */
    public $httpsPorts;

    /**
     * @description Specifies whether to enable IPv6. Valid values:
     *
     *   **true:** enables IPv6.
     *   **false:** disables IPv6. This is the default value.
     *
     * @example true
     *
     * @var bool
     */
    public $IPv6Enabled;

    /**
     * @description The type of the protection resource that you want to use. Valid values:
     *
     *   **share:** shared cluster. This is the default value.
     *   **gslb:** shared cluster-based intelligent load balancing.
     *
     * @example share
     *
     * @var string
     */
    public $protectionResource;

    /**
     * @var bool
     */
    public $SM2AccessOnly;

    /**
     * @var string
     */
    public $SM2CertId;

    /**
     * @var bool
     */
    public $SM2Enabled;

    /**
     * @description The version of the Transport Layer Security (TLS) protocol. This parameter is available only when you specify the **HttpsPorts** parameter. Valid values:
     *
     *   **tlsv1**
     *   **tlsv1.1**
     *   **tlsv1.2**
     *
     * @example tlsv1
     *
     * @var string
     */
    public $TLSVersion;

    /**
     * @description The method that you want WAF to use to obtain the actual IP address of a client. Valid values:
     *
     *   **0:** No Layer 7 proxies are deployed in front of WAF. This is the default value.
     *   **1:** WAF reads the first value of the X-Forwarded-For (XFF) header field as the actual IP address of the client.
     *   **2:** WAF reads the value of a custom header field as the actual IP address of the client.
     *
     * @example 2
     *
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @description The custom header fields that you want to use to obtain the actual IP address of a client. Specify the value of this parameter in the \["header1","header2",...] format.
     *
     * >  If you set the **XffHeaderMode** parameter to 2, this parameter is required.
     * @var string[]
     */
    public $xffHeaders;
    protected $_name = [
        'certId'             => 'CertId',
        'cipherSuite'        => 'CipherSuite',
        'customCiphers'      => 'CustomCiphers',
        'enableTLSv3'        => 'EnableTLSv3',
        'exclusiveIp'        => 'ExclusiveIp',
        'focusHttps'         => 'FocusHttps',
        'http2Enabled'       => 'Http2Enabled',
        'httpPorts'          => 'HttpPorts',
        'httpsPorts'         => 'HttpsPorts',
        'IPv6Enabled'        => 'IPv6Enabled',
        'protectionResource' => 'ProtectionResource',
        'SM2AccessOnly'      => 'SM2AccessOnly',
        'SM2CertId'          => 'SM2CertId',
        'SM2Enabled'         => 'SM2Enabled',
        'TLSVersion'         => 'TLSVersion',
        'xffHeaderMode'      => 'XffHeaderMode',
        'xffHeaders'         => 'XffHeaders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
        }
        if (null !== $this->enableTLSv3) {
            $res['EnableTLSv3'] = $this->enableTLSv3;
        }
        if (null !== $this->exclusiveIp) {
            $res['ExclusiveIp'] = $this->exclusiveIp;
        }
        if (null !== $this->focusHttps) {
            $res['FocusHttps'] = $this->focusHttps;
        }
        if (null !== $this->http2Enabled) {
            $res['Http2Enabled'] = $this->http2Enabled;
        }
        if (null !== $this->httpPorts) {
            $res['HttpPorts'] = $this->httpPorts;
        }
        if (null !== $this->httpsPorts) {
            $res['HttpsPorts'] = $this->httpsPorts;
        }
        if (null !== $this->IPv6Enabled) {
            $res['IPv6Enabled'] = $this->IPv6Enabled;
        }
        if (null !== $this->protectionResource) {
            $res['ProtectionResource'] = $this->protectionResource;
        }
        if (null !== $this->SM2AccessOnly) {
            $res['SM2AccessOnly'] = $this->SM2AccessOnly;
        }
        if (null !== $this->SM2CertId) {
            $res['SM2CertId'] = $this->SM2CertId;
        }
        if (null !== $this->SM2Enabled) {
            $res['SM2Enabled'] = $this->SM2Enabled;
        }
        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
        }
        if (null !== $this->xffHeaderMode) {
            $res['XffHeaderMode'] = $this->xffHeaderMode;
        }
        if (null !== $this->xffHeaders) {
            $res['XffHeaders'] = $this->xffHeaders;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }
        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = $map['CustomCiphers'];
            }
        }
        if (isset($map['EnableTLSv3'])) {
            $model->enableTLSv3 = $map['EnableTLSv3'];
        }
        if (isset($map['ExclusiveIp'])) {
            $model->exclusiveIp = $map['ExclusiveIp'];
        }
        if (isset($map['FocusHttps'])) {
            $model->focusHttps = $map['FocusHttps'];
        }
        if (isset($map['Http2Enabled'])) {
            $model->http2Enabled = $map['Http2Enabled'];
        }
        if (isset($map['HttpPorts'])) {
            if (!empty($map['HttpPorts'])) {
                $model->httpPorts = $map['HttpPorts'];
            }
        }
        if (isset($map['HttpsPorts'])) {
            if (!empty($map['HttpsPorts'])) {
                $model->httpsPorts = $map['HttpsPorts'];
            }
        }
        if (isset($map['IPv6Enabled'])) {
            $model->IPv6Enabled = $map['IPv6Enabled'];
        }
        if (isset($map['ProtectionResource'])) {
            $model->protectionResource = $map['ProtectionResource'];
        }
        if (isset($map['SM2AccessOnly'])) {
            $model->SM2AccessOnly = $map['SM2AccessOnly'];
        }
        if (isset($map['SM2CertId'])) {
            $model->SM2CertId = $map['SM2CertId'];
        }
        if (isset($map['SM2Enabled'])) {
            $model->SM2Enabled = $map['SM2Enabled'];
        }
        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
        }
        if (isset($map['XffHeaderMode'])) {
            $model->xffHeaderMode = $map['XffHeaderMode'];
        }
        if (isset($map['XffHeaders'])) {
            if (!empty($map['XffHeaders'])) {
                $model->xffHeaders = $map['XffHeaders'];
            }
        }

        return $model;
    }
}
