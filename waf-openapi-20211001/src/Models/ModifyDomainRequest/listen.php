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
     * @description The type of the cipher suites that you want to add. This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **1**: all cipher suites.
     *   **2**: strong cipher suites. This value is available only if you set **TLSVersion** to **tlsv1.2**.
     *   **99**: custom cipher suites.
     *
     * @example 2
     *
     * @var int
     */
    public $cipherSuite;

    /**
     * @description The custom cipher suites that you want to add. This parameter is available only if you set **CipherSuite** to **99**.
     *
     * @var string[]
     */
    public $customCiphers;

    /**
     * @description Specifies whether to support TLS 1.3. This parameter is available only if you specify **HttpsPorts**. Valid values:
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
     * @description Specifies whether to enable the exclusive IP address feature. This parameter is available only if you set **IPv6Enabled** to false and **ProtectionResource** to **share**. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @description Specifies whether to enable force redirect from HTTP to HTTPS for received requests. This parameter is available only if you specify **HttpsPorts** and leave **HttpPorts** empty. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $focusHttps;

    /**
     * @description Specifies whether to enable HTTP/2. This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description The HTTP listener ports. Specify the value in the [**port1,port2,...**] format.
     *
     * @var int[]
     */
    public $httpPorts;

    /**
     * @description The HTTPS listener ports. Specify the value in the [**port1,port2,...**] format.
     *
     * @var int[]
     */
    public $httpsPorts;

    /**
     * @description Specifies whether to enable IPv6 protection. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $IPv6Enabled;

    /**
     * @description The type of the protection resource. Valid values:
     *
     *   **share** (default): a shared cluster.
     *   **gslb**: shared cluster-based intelligent load balancing.
     *
     * @example share
     *
     * @var string
     */
    public $protectionResource;

    /**
     * @description Specifies whether to allow access only from SM certificate-based clients. This parameter is available only if you set SM2Enabled to true.
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $SM2AccessOnly;

    /**
     * @description The ID of the SM certificate that you want to add. This parameter is available only if you set SM2Enabled to true.
     *
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $SM2CertId;

    /**
     * @description Specifies whether to add an SM certificate.
     *
     * @example true
     *
     * @var bool
     */
    public $SM2Enabled;

    /**
     * @description The Transport Layer Security (TLS) version that you want to add. This parameter is available only if you specify **HttpsPorts**. Valid values:
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
     * @description The method that is used to obtain the originating IP address of a client. Valid values:
     *
     *   **0** (default): Client traffic is not filtered by a Layer 7 proxy before the traffic reaches WAF.
     *   **1**: WAF reads the first value of the X-Forwarded-For (XFF) header field as the originating IP address of the client.
     *   **2**: WAF reads the value of a custom header field as the originating IP address of the client.
     *
     * @example 2
     *
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @description The custom header fields that are used to obtain the originating IP address of a client. Specify the value in the **["header1","header2",...]** format.
     *
     * >  This parameter is required only if you set **XffHeaderMode** to 2.
     *
     * @var string[]
     */
    public $xffHeaders;
    protected $_name = [
        'certId' => 'CertId',
        'cipherSuite' => 'CipherSuite',
        'customCiphers' => 'CustomCiphers',
        'enableTLSv3' => 'EnableTLSv3',
        'exclusiveIp' => 'ExclusiveIp',
        'focusHttps' => 'FocusHttps',
        'http2Enabled' => 'Http2Enabled',
        'httpPorts' => 'HttpPorts',
        'httpsPorts' => 'HttpsPorts',
        'IPv6Enabled' => 'IPv6Enabled',
        'protectionResource' => 'ProtectionResource',
        'SM2AccessOnly' => 'SM2AccessOnly',
        'SM2CertId' => 'SM2CertId',
        'SM2Enabled' => 'SM2Enabled',
        'TLSVersion' => 'TLSVersion',
        'xffHeaderMode' => 'XffHeaderMode',
        'xffHeaders' => 'XffHeaders',
    ];

    public function validate() {}

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
