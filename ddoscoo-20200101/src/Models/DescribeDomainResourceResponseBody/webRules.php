<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceResponseBody\webRules\proxyTypes;
use AlibabaCloud\Tea\Model;

class webRules extends Model
{
    /**
     * @description The IP addresses that are included in the blacklist of the domain name.
     *
     * @var string[]
     */
    public $blackList;

    /**
     * @description Indicates whether the Frequency Control policy is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $ccEnabled;

    /**
     * @description Indicates whether the Custom Rule switch of the Frequency Control policy is turned on. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $ccRuleEnabled;

    /**
     * @description The mode of the Frequency Control policy. Valid values:
     *
     *   **default**: the Normal mode
     *   **gf_under_attack**: the Emergency mode
     *   **gf_sos_verify**: the Strict mode
     *   **gf_sos_verify**: the Super Strict mode
     *
     * @example default
     *
     * @var string
     */
    public $ccTemplate;

    /**
     * @description The name of the SSL certificate used by the domain name.
     *
     * @example 49944XX.pem
     *
     * @var string
     */
    public $certName;

    /**
     * @description The CNAME provided by the instance to which the domain name is added.
     *
     * @example 0ekb69x3j9wvXXXX.aliyunddosXXXX.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The custom cipher suites.
     *
     * @var string[]
     */
    public $customCiphers;

    /**
     * @description The domain name of the website.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether Enable HTTP/2 is turned on. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $http2Enable;

    /**
     * @description Indicates whether Enforce HTTPS Routing is turned on. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $http2HttpsEnable;

    /**
     * @description Indicates whether Enable HTTP is turned on. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $https2HttpEnable;

    /**
     * @description The advanced HTTPS settings. This parameter takes effect only when the value of the **ProxyType** parameter includes **https**. The value is a string that consists of a JSON struct. The JSON struct contains the following fields:
     *
     *   **Http2https**: indicates whether the feature of redirecting HTTP requests to HTTPS requests is enabled. Data type: integer. Valid values: **0** and **1**. The value 0 indicates that the feature is disabled. The value 1 indicates that the feature is enabled.
     *   **Https2http**: indicates whether the feature of redirecting HTTPS requests to HTTP requests is enabled. Data type: integer. Valid values: **0** and **1**. The value 0 indicates that the feature is disabled. The value 1 indicates that the feature is enabled.
     *   **Http2**: indicates whether HTTP/2 is supported. Data type: integer. Valid values: **0** and **1**. The value 0 indicates that HTTP/2 is not supported. The value 1 indicates that HTTP/2 is supported.
     *
     * @example {"Https2http":0,"Http2":0,"Http2https":0}
     *
     * @var string
     */
    public $httpsExt;

    /**
     * @description The IDs of the instances to which the domain name is added.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description Indicates whether the Online Certificate Status Protocol (OCSP) feature is enabled. Valid values:
     * - **true**: yes
     * - **false**: no
     * @example false
     *
     * @var bool
     */
    public $ocspEnabled;

    /**
     * @description The load balancing algorithm for back-to-origin traffic. Valid values:
     *
     *   **ip_hash**: the IP hash algorithm. This algorithm is used to redirect the requests from the same IP address to the same origin server.
     *   **rr**: the round-robin algorithm. This algorithm is used to redirect requests to origin servers in turn.
     *   **least_time**: the least response time algorithm. This algorithm is used to minimize the latency when requests are forwarded from Anti-DDoS Pro or Anti-DDoS Premium instances to origin servers based on the intelligent DNS resolution feature.
     *
     * @example ip_hash
     *
     * @var string
     */
    public $policyMode;

    /**
     * @description Indicates whether the instance forwards the traffic that is destined for the website. Valid values:
     *
     *   **true**: Anti-DDoS Pro or Anti-DDoS Premium forwards the traffic that is destined for the website.
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $proxyEnabled;

    /**
     * @description The details about the protocol type and port number.
     *
     * @var proxyTypes[]
     */
    public $proxyTypes;

    /**
     * @description The reason why the domain name is invalid. Valid values:
     *
     *   **1**: No Content Provider (ICP) filing is completed for the domain name.
     *   **2**: The business for which you registered the domain name does not meet regulatory requirements.
     *
     * If the two reasons are both involved, the value **2** is returned.
     * @example 1
     *
     * @var int
     */
    public $punishReason;

    /**
     * @description Indicates whether the domain name is invalid. Valid values:
     *
     *   **true**: The domain name is invalid. You can view the specific reasons from the **PunishReason** parameter.
     *   **false**: The domain name is valid.
     *
     * @example false
     *
     * @var bool
     */
    public $punishStatus;

    /**
     * @description The addresses of origin servers.
     *
     * @var string[]
     */
    public $realServers;

    /**
     * @description The address type of the origin server. Valid values:
     *
     *   **0**: IP address
     *   **1**: domain name
     *
     * @example 0
     *
     * @var int
     */
    public $rsType;

    /**
     * @description Indicates whether TLS 1.3 is supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $ssl13Enabled;

    /**
     * @description The type of the cipher suite. Valid values:
     *
     *   **default**: custom cipher suite
     *   **all**: all cipher suites
     *   **strong**: strong cipher suites
     *
     * @example default
     *
     * @var string
     */
    public $sslCiphers;

    /**
     * @description The version of the TLS protocol. Valid values:
     *
     *   **tls1.0**: TLS 1.0 or later
     *   **tls1.1**: TLS 1.1 or later
     *   **tls1.2**: TLS 1.2 or later
     *
     * @example tls1.0
     *
     * @var string
     */
    public $sslProtocols;

    /**
     * @description The IP addresses that are included in the whitelist of the domain name.
     *
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'blackList'        => 'BlackList',
        'ccEnabled'        => 'CcEnabled',
        'ccRuleEnabled'    => 'CcRuleEnabled',
        'ccTemplate'       => 'CcTemplate',
        'certName'         => 'CertName',
        'cname'            => 'Cname',
        'customCiphers'    => 'CustomCiphers',
        'domain'           => 'Domain',
        'http2Enable'      => 'Http2Enable',
        'http2HttpsEnable' => 'Http2HttpsEnable',
        'https2HttpEnable' => 'Https2HttpEnable',
        'httpsExt'         => 'HttpsExt',
        'instanceIds'      => 'InstanceIds',
        'ocspEnabled'      => 'OcspEnabled',
        'policyMode'       => 'PolicyMode',
        'proxyEnabled'     => 'ProxyEnabled',
        'proxyTypes'       => 'ProxyTypes',
        'punishReason'     => 'PunishReason',
        'punishStatus'     => 'PunishStatus',
        'realServers'      => 'RealServers',
        'rsType'           => 'RsType',
        'ssl13Enabled'     => 'Ssl13Enabled',
        'sslCiphers'       => 'SslCiphers',
        'sslProtocols'     => 'SslProtocols',
        'whiteList'        => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }
        if (null !== $this->ccEnabled) {
            $res['CcEnabled'] = $this->ccEnabled;
        }
        if (null !== $this->ccRuleEnabled) {
            $res['CcRuleEnabled'] = $this->ccRuleEnabled;
        }
        if (null !== $this->ccTemplate) {
            $res['CcTemplate'] = $this->ccTemplate;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->http2Enable) {
            $res['Http2Enable'] = $this->http2Enable;
        }
        if (null !== $this->http2HttpsEnable) {
            $res['Http2HttpsEnable'] = $this->http2HttpsEnable;
        }
        if (null !== $this->https2HttpEnable) {
            $res['Https2HttpEnable'] = $this->https2HttpEnable;
        }
        if (null !== $this->httpsExt) {
            $res['HttpsExt'] = $this->httpsExt;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ocspEnabled) {
            $res['OcspEnabled'] = $this->ocspEnabled;
        }
        if (null !== $this->policyMode) {
            $res['PolicyMode'] = $this->policyMode;
        }
        if (null !== $this->proxyEnabled) {
            $res['ProxyEnabled'] = $this->proxyEnabled;
        }
        if (null !== $this->proxyTypes) {
            $res['ProxyTypes'] = [];
            if (null !== $this->proxyTypes && \is_array($this->proxyTypes)) {
                $n = 0;
                foreach ($this->proxyTypes as $item) {
                    $res['ProxyTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->punishReason) {
            $res['PunishReason'] = $this->punishReason;
        }
        if (null !== $this->punishStatus) {
            $res['PunishStatus'] = $this->punishStatus;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }
        if (null !== $this->ssl13Enabled) {
            $res['Ssl13Enabled'] = $this->ssl13Enabled;
        }
        if (null !== $this->sslCiphers) {
            $res['SslCiphers'] = $this->sslCiphers;
        }
        if (null !== $this->sslProtocols) {
            $res['SslProtocols'] = $this->sslProtocols;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = $map['BlackList'];
            }
        }
        if (isset($map['CcEnabled'])) {
            $model->ccEnabled = $map['CcEnabled'];
        }
        if (isset($map['CcRuleEnabled'])) {
            $model->ccRuleEnabled = $map['CcRuleEnabled'];
        }
        if (isset($map['CcTemplate'])) {
            $model->ccTemplate = $map['CcTemplate'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = $map['CustomCiphers'];
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Http2Enable'])) {
            $model->http2Enable = $map['Http2Enable'];
        }
        if (isset($map['Http2HttpsEnable'])) {
            $model->http2HttpsEnable = $map['Http2HttpsEnable'];
        }
        if (isset($map['Https2HttpEnable'])) {
            $model->https2HttpEnable = $map['Https2HttpEnable'];
        }
        if (isset($map['HttpsExt'])) {
            $model->httpsExt = $map['HttpsExt'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['OcspEnabled'])) {
            $model->ocspEnabled = $map['OcspEnabled'];
        }
        if (isset($map['PolicyMode'])) {
            $model->policyMode = $map['PolicyMode'];
        }
        if (isset($map['ProxyEnabled'])) {
            $model->proxyEnabled = $map['ProxyEnabled'];
        }
        if (isset($map['ProxyTypes'])) {
            if (!empty($map['ProxyTypes'])) {
                $model->proxyTypes = [];
                $n                 = 0;
                foreach ($map['ProxyTypes'] as $item) {
                    $model->proxyTypes[$n++] = null !== $item ? proxyTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PunishReason'])) {
            $model->punishReason = $map['PunishReason'];
        }
        if (isset($map['PunishStatus'])) {
            $model->punishStatus = $map['PunishStatus'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }
        if (isset($map['Ssl13Enabled'])) {
            $model->ssl13Enabled = $map['Ssl13Enabled'];
        }
        if (isset($map['SslCiphers'])) {
            $model->sslCiphers = $map['SslCiphers'];
        }
        if (isset($map['SslProtocols'])) {
            $model->sslProtocols = $map['SslProtocols'];
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }

        return $model;
    }
}
