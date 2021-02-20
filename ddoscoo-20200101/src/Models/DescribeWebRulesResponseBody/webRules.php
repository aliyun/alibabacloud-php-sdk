<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules\proxyTypes;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules\realServers;
use AlibabaCloud\Tea\Model;

class webRules extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $http2HttpsEnable;

    /**
     * @var string[]
     */
    public $customCiphers;

    /**
     * @var string[]
     */
    public $blackList;

    /**
     * @var string[]
     */
    public $whiteList;

    /**
     * @var realServers[]
     */
    public $realServers;

    /**
     * @var proxyTypes[]
     */
    public $proxyTypes;

    /**
     * @var string
     */
    public $sslProtocols;

    /**
     * @var string
     */
    public $ccTemplate;

    /**
     * @var bool
     */
    public $ccEnabled;

    /**
     * @var string
     */
    public $sslCiphers;

    /**
     * @var bool
     */
    public $ccRuleEnabled;

    /**
     * @var bool
     */
    public $ssl13Enabled;

    /**
     * @var bool
     */
    public $proxyEnabled;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $policyMode;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var bool
     */
    public $http2Enable;

    /**
     * @var bool
     */
    public $https2HttpEnable;
    protected $_name = [
        'domain'           => 'Domain',
        'http2HttpsEnable' => 'Http2HttpsEnable',
        'customCiphers'    => 'CustomCiphers',
        'blackList'        => 'BlackList',
        'whiteList'        => 'WhiteList',
        'realServers'      => 'RealServers',
        'proxyTypes'       => 'ProxyTypes',
        'sslProtocols'     => 'SslProtocols',
        'ccTemplate'       => 'CcTemplate',
        'ccEnabled'        => 'CcEnabled',
        'sslCiphers'       => 'SslCiphers',
        'ccRuleEnabled'    => 'CcRuleEnabled',
        'ssl13Enabled'     => 'Ssl13Enabled',
        'proxyEnabled'     => 'ProxyEnabled',
        'certName'         => 'CertName',
        'policyMode'       => 'PolicyMode',
        'cname'            => 'Cname',
        'http2Enable'      => 'Http2Enable',
        'https2HttpEnable' => 'Https2HttpEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->http2HttpsEnable) {
            $res['Http2HttpsEnable'] = $this->http2HttpsEnable;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
        }
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = [];
            if (null !== $this->realServers && \is_array($this->realServers)) {
                $n = 0;
                foreach ($this->realServers as $item) {
                    $res['RealServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->sslProtocols) {
            $res['SslProtocols'] = $this->sslProtocols;
        }
        if (null !== $this->ccTemplate) {
            $res['CcTemplate'] = $this->ccTemplate;
        }
        if (null !== $this->ccEnabled) {
            $res['CcEnabled'] = $this->ccEnabled;
        }
        if (null !== $this->sslCiphers) {
            $res['SslCiphers'] = $this->sslCiphers;
        }
        if (null !== $this->ccRuleEnabled) {
            $res['CcRuleEnabled'] = $this->ccRuleEnabled;
        }
        if (null !== $this->ssl13Enabled) {
            $res['Ssl13Enabled'] = $this->ssl13Enabled;
        }
        if (null !== $this->proxyEnabled) {
            $res['ProxyEnabled'] = $this->proxyEnabled;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->policyMode) {
            $res['PolicyMode'] = $this->policyMode;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->http2Enable) {
            $res['Http2Enable'] = $this->http2Enable;
        }
        if (null !== $this->https2HttpEnable) {
            $res['Https2HttpEnable'] = $this->https2HttpEnable;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Http2HttpsEnable'])) {
            $model->http2HttpsEnable = $map['Http2HttpsEnable'];
        }
        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = $map['CustomCiphers'];
            }
        }
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = $map['BlackList'];
            }
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n                  = 0;
                foreach ($map['RealServers'] as $item) {
                    $model->realServers[$n++] = null !== $item ? realServers::fromMap($item) : $item;
                }
            }
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
        if (isset($map['SslProtocols'])) {
            $model->sslProtocols = $map['SslProtocols'];
        }
        if (isset($map['CcTemplate'])) {
            $model->ccTemplate = $map['CcTemplate'];
        }
        if (isset($map['CcEnabled'])) {
            $model->ccEnabled = $map['CcEnabled'];
        }
        if (isset($map['SslCiphers'])) {
            $model->sslCiphers = $map['SslCiphers'];
        }
        if (isset($map['CcRuleEnabled'])) {
            $model->ccRuleEnabled = $map['CcRuleEnabled'];
        }
        if (isset($map['Ssl13Enabled'])) {
            $model->ssl13Enabled = $map['Ssl13Enabled'];
        }
        if (isset($map['ProxyEnabled'])) {
            $model->proxyEnabled = $map['ProxyEnabled'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['PolicyMode'])) {
            $model->policyMode = $map['PolicyMode'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Http2Enable'])) {
            $model->http2Enable = $map['Http2Enable'];
        }
        if (isset($map['Https2HttpEnable'])) {
            $model->https2HttpEnable = $map['Https2HttpEnable'];
        }

        return $model;
    }
}
