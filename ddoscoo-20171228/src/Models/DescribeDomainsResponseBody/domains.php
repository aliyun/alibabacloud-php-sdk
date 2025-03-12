<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains\proxyTypeList;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains\realServers;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string[]
     */
    public $blackList;

    /**
     * @example true
     *
     * @var bool
     */
    public $ccEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $ccRuleEnabled;

    /**
     * @example normal
     *
     * @var string
     */
    public $ccTemplate;

    /**
     * @example testCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certRegion;

    /**
     * @example xxxxxxx.aliyunddos1006.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example true
     *
     * @var bool
     */
    public $http2Enable;

    /**
     * @var proxyTypeList[]
     */
    public $proxyTypeList;

    /**
     * @var realServers[]
     */
    public $realServers;

    /**
     * @example xx
     *
     * @var string
     */
    public $sslCiphers;

    /**
     * @example xx
     *
     * @var string
     */
    public $sslProtocols;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'blackList'     => 'BlackList',
        'ccEnabled'     => 'CcEnabled',
        'ccRuleEnabled' => 'CcRuleEnabled',
        'ccTemplate'    => 'CcTemplate',
        'certName'      => 'CertName',
        'certRegion'    => 'CertRegion',
        'cname'         => 'Cname',
        'domain'        => 'Domain',
        'http2Enable'   => 'Http2Enable',
        'proxyTypeList' => 'ProxyTypeList',
        'realServers'   => 'RealServers',
        'sslCiphers'    => 'SslCiphers',
        'sslProtocols'  => 'SslProtocols',
        'whiteList'     => 'WhiteList',
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
        if (null !== $this->certRegion) {
            $res['CertRegion'] = $this->certRegion;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->http2Enable) {
            $res['Http2Enable'] = $this->http2Enable;
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
        if (null !== $this->realServers) {
            $res['RealServers'] = [];
            if (null !== $this->realServers && \is_array($this->realServers)) {
                $n = 0;
                foreach ($this->realServers as $item) {
                    $res['RealServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return domains
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
        if (isset($map['CertRegion'])) {
            $model->certRegion = $map['CertRegion'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Http2Enable'])) {
            $model->http2Enable = $map['Http2Enable'];
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
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n                  = 0;
                foreach ($map['RealServers'] as $item) {
                    $model->realServers[$n++] = null !== $item ? realServers::fromMap($item) : $item;
                }
            }
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
