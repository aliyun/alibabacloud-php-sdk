<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomDomainRequest extends Model
{
    /**
     * @description The configurations of the HTTPS certificate.
     *
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @description The protocol types supported by the domain name. Valid values:
     *
     *   **HTTP**: Only HTTP is supported.
     *   **HTTPS**: Only HTTPS is supported.
     *   **HTTP,HTTPS**: Both HTTP and HTTPS are supported.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The route table that maps the paths to functions when the functions are invoked by using the custom domain name.
     *
     * @var RouteConfig
     */
    public $routeConfig;

    /**
     * @description The Transport Layer Security (TLS) configuration.
     *
     * @var TLSConfig
     */
    public $tlsConfig;

    /**
     * @description The Web Application Firewall (WAF) configuration.
     *
     * @var WAFConfig
     */
    public $wafConfig;
    protected $_name = [
        'certConfig'  => 'certConfig',
        'protocol'    => 'protocol',
        'routeConfig' => 'routeConfig',
        'tlsConfig'   => 'tlsConfig',
        'wafConfig'   => 'wafConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->routeConfig) {
            $res['routeConfig'] = null !== $this->routeConfig ? $this->routeConfig->toMap() : null;
        }
        if (null !== $this->tlsConfig) {
            $res['tlsConfig'] = null !== $this->tlsConfig ? $this->tlsConfig->toMap() : null;
        }
        if (null !== $this->wafConfig) {
            $res['wafConfig'] = null !== $this->wafConfig ? $this->wafConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certConfig'])) {
            $model->certConfig = CertConfig::fromMap($map['certConfig']);
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['routeConfig'])) {
            $model->routeConfig = RouteConfig::fromMap($map['routeConfig']);
        }
        if (isset($map['tlsConfig'])) {
            $model->tlsConfig = TLSConfig::fromMap($map['tlsConfig']);
        }
        if (isset($map['wafConfig'])) {
            $model->wafConfig = WAFConfig::fromMap($map['wafConfig']);
        }

        return $model;
    }
}
