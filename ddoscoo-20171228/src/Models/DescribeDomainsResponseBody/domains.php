<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains\proxyTypeList;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains\realServers;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var proxyTypeList[]
     */
    public $proxyTypeList;

    /**
     * @var string[]
     */
    public $whiteList;

    /**
     * @var string[]
     */
    public $blackList;

    /**
     * @var realServers[]
     */
    public $realServers;

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
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var bool
     */
    public $http2Enable;
    protected $_name = [
        'domain'        => 'Domain',
        'proxyTypeList' => 'ProxyTypeList',
        'whiteList'     => 'WhiteList',
        'blackList'     => 'BlackList',
        'realServers'   => 'RealServers',
        'sslProtocols'  => 'SslProtocols',
        'ccTemplate'    => 'CcTemplate',
        'ccEnabled'     => 'CcEnabled',
        'sslCiphers'    => 'SslCiphers',
        'ccRuleEnabled' => 'CcRuleEnabled',
        'certName'      => 'CertName',
        'cname'         => 'Cname',
        'http2Enable'   => 'Http2Enable',
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
        if (null !== $this->proxyTypeList) {
            $res['ProxyTypeList'] = [];
            if (null !== $this->proxyTypeList && \is_array($this->proxyTypeList)) {
                $n = 0;
                foreach ($this->proxyTypeList as $item) {
                    $res['ProxyTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
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
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->http2Enable) {
            $res['Http2Enable'] = $this->http2Enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ProxyTypeList'])) {
            if (!empty($map['ProxyTypeList'])) {
                $model->proxyTypeList = [];
                $n                    = 0;
                foreach ($map['ProxyTypeList'] as $item) {
                    $model->proxyTypeList[$n++] = null !== $item ? proxyTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = $map['BlackList'];
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Http2Enable'])) {
            $model->http2Enable = $map['Http2Enable'];
        }

        return $model;
    }
}
