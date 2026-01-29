<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomDomainInput extends Model
{
    /**
     * @var AuthConfig
     */
    public $authConfig;

    /**
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @var CORSConfig
     */
    public $corsConfig;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var RouteConfig
     */
    public $routeConfig;

    /**
     * @var TLSConfig
     */
    public $tlsConfig;

    /**
     * @var WAFConfig
     */
    public $wafConfig;
    protected $_name = [
        'authConfig' => 'authConfig',
        'certConfig' => 'certConfig',
        'corsConfig' => 'corsConfig',
        'domainName' => 'domainName',
        'protocol' => 'protocol',
        'routeConfig' => 'routeConfig',
        'tlsConfig' => 'tlsConfig',
        'wafConfig' => 'wafConfig',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (null !== $this->certConfig) {
            $this->certConfig->validate();
        }
        if (null !== $this->corsConfig) {
            $this->corsConfig->validate();
        }
        if (null !== $this->routeConfig) {
            $this->routeConfig->validate();
        }
        if (null !== $this->tlsConfig) {
            $this->tlsConfig->validate();
        }
        if (null !== $this->wafConfig) {
            $this->wafConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
        }

        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toArray($noStream) : $this->certConfig;
        }

        if (null !== $this->corsConfig) {
            $res['corsConfig'] = null !== $this->corsConfig ? $this->corsConfig->toArray($noStream) : $this->corsConfig;
        }

        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->routeConfig) {
            $res['routeConfig'] = null !== $this->routeConfig ? $this->routeConfig->toArray($noStream) : $this->routeConfig;
        }

        if (null !== $this->tlsConfig) {
            $res['tlsConfig'] = null !== $this->tlsConfig ? $this->tlsConfig->toArray($noStream) : $this->tlsConfig;
        }

        if (null !== $this->wafConfig) {
            $res['wafConfig'] = null !== $this->wafConfig ? $this->wafConfig->toArray($noStream) : $this->wafConfig;
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
        if (isset($map['authConfig'])) {
            $model->authConfig = AuthConfig::fromMap($map['authConfig']);
        }

        if (isset($map['certConfig'])) {
            $model->certConfig = CertConfig::fromMap($map['certConfig']);
        }

        if (isset($map['corsConfig'])) {
            $model->corsConfig = CORSConfig::fromMap($map['corsConfig']);
        }

        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
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
