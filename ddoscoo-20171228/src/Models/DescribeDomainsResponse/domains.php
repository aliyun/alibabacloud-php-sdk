<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponse;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponse\domains\proxyTypeList;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponse\domains\realServers;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $ccEnabled;

    /**
     * @var bool
     */
    public $ccRuleEnabled;

    /**
     * @var string
     */
    public $ccTemplate;

    /**
     * @var string
     */
    public $sslProtocols;

    /**
     * @var string
     */
    public $sslCiphers;

    /**
     * @var bool
     */
    public $http2Enable;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var proxyTypeList[]
     */
    public $proxyTypeList;

    /**
     * @var realServers[]
     */
    public $realServers;

    /**
     * @var string[]
     */
    public $whiteList;

    /**
     * @var string[]
     */
    public $blackList;
    protected $_name = [
        'domain'        => 'Domain',
        'ccEnabled'     => 'CcEnabled',
        'ccRuleEnabled' => 'CcRuleEnabled',
        'ccTemplate'    => 'CcTemplate',
        'sslProtocols'  => 'SslProtocols',
        'sslCiphers'    => 'SslCiphers',
        'http2Enable'   => 'Http2Enable',
        'cname'         => 'Cname',
        'certName'      => 'CertName',
        'proxyTypeList' => 'ProxyTypeList',
        'realServers'   => 'RealServers',
        'whiteList'     => 'WhiteList',
        'blackList'     => 'BlackList',
    ];

    public function validate()
    {
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('ccEnabled', $this->ccEnabled, true);
        Model::validateRequired('ccRuleEnabled', $this->ccRuleEnabled, true);
        Model::validateRequired('ccTemplate', $this->ccTemplate, true);
        Model::validateRequired('sslProtocols', $this->sslProtocols, true);
        Model::validateRequired('sslCiphers', $this->sslCiphers, true);
        Model::validateRequired('http2Enable', $this->http2Enable, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('proxyTypeList', $this->proxyTypeList, true);
        Model::validateRequired('realServers', $this->realServers, true);
        Model::validateRequired('whiteList', $this->whiteList, true);
        Model::validateRequired('blackList', $this->blackList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (null !== $this->sslProtocols) {
            $res['SslProtocols'] = $this->sslProtocols;
        }
        if (null !== $this->sslCiphers) {
            $res['SslCiphers'] = $this->sslCiphers;
        }
        if (null !== $this->http2Enable) {
            $res['Http2Enable'] = $this->http2Enable;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
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
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
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
        if (isset($map['CcEnabled'])) {
            $model->ccEnabled = $map['CcEnabled'];
        }
        if (isset($map['CcRuleEnabled'])) {
            $model->ccRuleEnabled = $map['CcRuleEnabled'];
        }
        if (isset($map['CcTemplate'])) {
            $model->ccTemplate = $map['CcTemplate'];
        }
        if (isset($map['SslProtocols'])) {
            $model->sslProtocols = $map['SslProtocols'];
        }
        if (isset($map['SslCiphers'])) {
            $model->sslCiphers = $map['SslCiphers'];
        }
        if (isset($map['Http2Enable'])) {
            $model->http2Enable = $map['Http2Enable'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
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

        return $model;
    }
}
