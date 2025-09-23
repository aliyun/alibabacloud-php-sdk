<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains\proxyTypeList;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains\realServers;

class domains extends Model
{
    /**
     * @var string[]
     */
    public $blackList;

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
    public $certName;

    /**
     * @var string
     */
    public $certRegion;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domain;

    /**
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
     * @var string
     */
    public $sslCiphers;

    /**
     * @var string
     */
    public $sslProtocols;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'blackList' => 'BlackList',
        'ccEnabled' => 'CcEnabled',
        'ccRuleEnabled' => 'CcRuleEnabled',
        'ccTemplate' => 'CcTemplate',
        'certName' => 'CertName',
        'certRegion' => 'CertRegion',
        'cname' => 'Cname',
        'domain' => 'Domain',
        'http2Enable' => 'Http2Enable',
        'proxyTypeList' => 'ProxyTypeList',
        'realServers' => 'RealServers',
        'sslCiphers' => 'SslCiphers',
        'sslProtocols' => 'SslProtocols',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->blackList)) {
            Model::validateArray($this->blackList);
        }
        if (\is_array($this->proxyTypeList)) {
            Model::validateArray($this->proxyTypeList);
        }
        if (\is_array($this->realServers)) {
            Model::validateArray($this->realServers);
        }
        if (\is_array($this->whiteList)) {
            Model::validateArray($this->whiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackList) {
            if (\is_array($this->blackList)) {
                $res['BlackList'] = [];
                $n1 = 0;
                foreach ($this->blackList as $item1) {
                    $res['BlackList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->proxyTypeList)) {
                $res['ProxyTypeList'] = [];
                $n1 = 0;
                foreach ($this->proxyTypeList as $item1) {
                    $res['ProxyTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->realServers) {
            if (\is_array($this->realServers)) {
                $res['RealServers'] = [];
                $n1 = 0;
                foreach ($this->realServers as $item1) {
                    $res['RealServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->whiteList)) {
                $res['WhiteList'] = [];
                $n1 = 0;
                foreach ($this->whiteList as $item1) {
                    $res['WhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = [];
                $n1 = 0;
                foreach ($map['BlackList'] as $item1) {
                    $model->blackList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['ProxyTypeList'] as $item1) {
                    $model->proxyTypeList[$n1] = proxyTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n1 = 0;
                foreach ($map['RealServers'] as $item1) {
                    $model->realServers[$n1] = realServers::fromMap($item1);
                    ++$n1;
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
                $model->whiteList = [];
                $n1 = 0;
                foreach ($map['WhiteList'] as $item1) {
                    $model->whiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
