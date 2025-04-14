<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainResourceResponseBody\webRules\proxyTypes;

class webRules extends Model
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
    public $cname;

    /**
     * @var string[]
     */
    public $customCiphers;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $http2Enable;

    /**
     * @var bool
     */
    public $http2HttpsEnable;

    /**
     * @var bool
     */
    public $https2HttpEnable;

    /**
     * @var string
     */
    public $httpsExt;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var bool
     */
    public $ocspEnabled;

    /**
     * @var string
     */
    public $policyMode;

    /**
     * @var bool
     */
    public $proxyEnabled;

    /**
     * @var proxyTypes[]
     */
    public $proxyTypes;

    /**
     * @var int
     */
    public $punishReason;

    /**
     * @var bool
     */
    public $punishStatus;

    /**
     * @var string[]
     */
    public $realServers;

    /**
     * @var int
     */
    public $rsType;

    /**
     * @var bool
     */
    public $ssl13Enabled;

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
        'cname' => 'Cname',
        'customCiphers' => 'CustomCiphers',
        'domain' => 'Domain',
        'http2Enable' => 'Http2Enable',
        'http2HttpsEnable' => 'Http2HttpsEnable',
        'https2HttpEnable' => 'Https2HttpEnable',
        'httpsExt' => 'HttpsExt',
        'instanceIds' => 'InstanceIds',
        'ocspEnabled' => 'OcspEnabled',
        'policyMode' => 'PolicyMode',
        'proxyEnabled' => 'ProxyEnabled',
        'proxyTypes' => 'ProxyTypes',
        'punishReason' => 'PunishReason',
        'punishStatus' => 'PunishStatus',
        'realServers' => 'RealServers',
        'rsType' => 'RsType',
        'ssl13Enabled' => 'Ssl13Enabled',
        'sslCiphers' => 'SslCiphers',
        'sslProtocols' => 'SslProtocols',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->blackList)) {
            Model::validateArray($this->blackList);
        }
        if (\is_array($this->customCiphers)) {
            Model::validateArray($this->customCiphers);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->proxyTypes)) {
            Model::validateArray($this->proxyTypes);
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
                    $res['BlackList'][$n1++] = $item1;
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

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->customCiphers) {
            if (\is_array($this->customCiphers)) {
                $res['CustomCiphers'] = [];
                $n1 = 0;
                foreach ($this->customCiphers as $item1) {
                    $res['CustomCiphers'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->proxyTypes)) {
                $res['ProxyTypes'] = [];
                $n1 = 0;
                foreach ($this->proxyTypes as $item1) {
                    $res['ProxyTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->realServers)) {
                $res['RealServers'] = [];
                $n1 = 0;
                foreach ($this->realServers as $item1) {
                    $res['RealServers'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->whiteList)) {
                $res['WhiteList'] = [];
                $n1 = 0;
                foreach ($this->whiteList as $item1) {
                    $res['WhiteList'][$n1++] = $item1;
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
                    $model->blackList[$n1++] = $item1;
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

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = [];
                $n1 = 0;
                foreach ($map['CustomCiphers'] as $item1) {
                    $model->customCiphers[$n1++] = $item1;
                }
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
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['ProxyTypes'] as $item1) {
                    $model->proxyTypes[$n1++] = proxyTypes::fromMap($item1);
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
                $model->realServers = [];
                $n1 = 0;
                foreach ($map['RealServers'] as $item1) {
                    $model->realServers[$n1++] = $item1;
                }
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
                $model->whiteList = [];
                $n1 = 0;
                foreach ($map['WhiteList'] as $item1) {
                    $model->whiteList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
