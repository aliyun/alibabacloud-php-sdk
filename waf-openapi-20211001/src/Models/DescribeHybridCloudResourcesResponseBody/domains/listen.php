<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponseBody\domains;

use AlibabaCloud\Tea\Model;

class listen extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example 72***76-cn-hangzhou
     *
     * @var string
     */
    public $certId;

    /**
     * @description The types of cipher suites that are added. Valid values:
     *
     *   **1:** all cipher suites.
     *   **2:** strong cipher suites.
     *   **99:** custom cipher suites.
     *
     * @example 1
     *
     * @var int
     */
    public $cipherSuite;

    /**
     * @description The custom cipher suites.
     *
     * >  This parameter is returned only if the value of **CipherSuite** is **99**.
     * @var string[]
     */
    public $customCiphers;

    /**
     * @description Indicates whether TLS 1.3 is supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @description Indicates whether exclusive IP addresses are supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @description Indicates whether the HTTP to HTTPS redirection feature is enabled for the domain name. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $focusHttps;

    /**
     * @description Indicates whether HTTP/2 is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description The HTTP listener ports.
     *
     * @var int[]
     */
    public $httpPorts;

    /**
     * @description The HTTPS listener ports.
     *
     * @var int[]
     */
    public $httpsPorts;

    /**
     * @description Specifies whether to enable IPv6. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $IPv6Enabled;

    /**
     * @description The type of the protection resource. Valid values:
     *
     *   **share:** shared cluster.
     *   **gslb:** shared cluster-based intelligent load balancing.
     *
     * @example share
     *
     * @var string
     */
    public $protectionResource;

    /**
     * @description The version of the Transport Layer Security (TLS) protocol. Valid values:
     *
     *   **tlsv1**
     *   **tlsv1.1**
     *   **tlsv1.2**
     *
     * @example tlsv1.2
     *
     * @var string
     */
    public $TLSVersion;

    /**
     * @description The method that is used to obtain the actual IP address of a client. Valid values:
     *
     *   **0**: No Layer 7 proxies are deployed in front of WAF.
     *   **1**: WAF reads the first value of the X-Forwarded-For (XFF) header field as the actual IP address of the client.
     *   **2**: WAF reads the value of a custom header field as the actual IP address of the client.
     *
     * @example 0
     *
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @description The custom header fields that are used to obtain the actual IP addresses of clients. The value is in the ["header1","header2",...] format.
     *
     * >  This parameter is returned only if the value of **XffHeaderMode** is 2.
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
