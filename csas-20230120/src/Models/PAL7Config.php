<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\bypassConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\dnsConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\jsHookConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\requestHeaderRewriteConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\requestQueryRewriteConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\responseHeaderRewriteConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\responseRewriteConfig;
use AlibabaCloud\Tea\Model;

class PAL7Config extends Model
{
    /**
     * @var bypassConfig
     */
    public $bypassConfig;

    /**
     * @var string
     */
    public $certId;

    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var jsHookConfig
     */
    public $jsHookConfig;

    /**
     * @example 逗号分隔的枚举值：automatic,custom
     *
     * @var int[]
     */
    public $proxyDomainTypes;

    /**
     * @var requestHeaderRewriteConfig
     */
    public $requestHeaderRewriteConfig;

    /**
     * @var requestQueryRewriteConfig
     */
    public $requestQueryRewriteConfig;

    /**
     * @var responseHeaderRewriteConfig
     */
    public $responseHeaderRewriteConfig;

    /**
     * @var responseRewriteConfig
     */
    public $responseRewriteConfig;
    protected $_name = [
        'bypassConfig' => 'BypassConfig',
        'certId' => 'CertId',
        'dnsConfig' => 'DnsConfig',
        'jsHookConfig' => 'JsHookConfig',
        'proxyDomainTypes' => 'ProxyDomainTypes',
        'requestHeaderRewriteConfig' => 'RequestHeaderRewriteConfig',
        'requestQueryRewriteConfig' => 'RequestQueryRewriteConfig',
        'responseHeaderRewriteConfig' => 'ResponseHeaderRewriteConfig',
        'responseRewriteConfig' => 'ResponseRewriteConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bypassConfig) {
            $res['BypassConfig'] = null !== $this->bypassConfig ? $this->bypassConfig->toMap() : null;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        }
        if (null !== $this->jsHookConfig) {
            $res['JsHookConfig'] = null !== $this->jsHookConfig ? $this->jsHookConfig->toMap() : null;
        }
        if (null !== $this->proxyDomainTypes) {
            $res['ProxyDomainTypes'] = $this->proxyDomainTypes;
        }
        if (null !== $this->requestHeaderRewriteConfig) {
            $res['RequestHeaderRewriteConfig'] = null !== $this->requestHeaderRewriteConfig ? $this->requestHeaderRewriteConfig->toMap() : null;
        }
        if (null !== $this->requestQueryRewriteConfig) {
            $res['RequestQueryRewriteConfig'] = null !== $this->requestQueryRewriteConfig ? $this->requestQueryRewriteConfig->toMap() : null;
        }
        if (null !== $this->responseHeaderRewriteConfig) {
            $res['ResponseHeaderRewriteConfig'] = null !== $this->responseHeaderRewriteConfig ? $this->responseHeaderRewriteConfig->toMap() : null;
        }
        if (null !== $this->responseRewriteConfig) {
            $res['ResponseRewriteConfig'] = null !== $this->responseRewriteConfig ? $this->responseRewriteConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PAL7Config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BypassConfig'])) {
            $model->bypassConfig = bypassConfig::fromMap($map['BypassConfig']);
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['JsHookConfig'])) {
            $model->jsHookConfig = jsHookConfig::fromMap($map['JsHookConfig']);
        }
        if (isset($map['ProxyDomainTypes'])) {
            $model->proxyDomainTypes = $map['ProxyDomainTypes'];
        }
        if (isset($map['RequestHeaderRewriteConfig'])) {
            $model->requestHeaderRewriteConfig = requestHeaderRewriteConfig::fromMap($map['RequestHeaderRewriteConfig']);
        }
        if (isset($map['RequestQueryRewriteConfig'])) {
            $model->requestQueryRewriteConfig = requestQueryRewriteConfig::fromMap($map['RequestQueryRewriteConfig']);
        }
        if (isset($map['ResponseHeaderRewriteConfig'])) {
            $model->responseHeaderRewriteConfig = responseHeaderRewriteConfig::fromMap($map['ResponseHeaderRewriteConfig']);
        }
        if (isset($map['ResponseRewriteConfig'])) {
            $model->responseRewriteConfig = responseRewriteConfig::fromMap($map['ResponseRewriteConfig']);
        }

        return $model;
    }
}
