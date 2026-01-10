<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomDomainInput extends Model
{
    /**
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @var string
     */
    public $description;

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
    protected $_name = [
        'certConfig' => 'certConfig',
        'description' => 'description',
        'protocol' => 'protocol',
        'routeConfig' => 'routeConfig',
        'tlsConfig' => 'tlsConfig',
    ];

    public function validate()
    {
        if (null !== $this->certConfig) {
            $this->certConfig->validate();
        }
        if (null !== $this->routeConfig) {
            $this->routeConfig->validate();
        }
        if (null !== $this->tlsConfig) {
            $this->tlsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toArray($noStream) : $this->certConfig;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certConfig'])) {
            $model->certConfig = CertConfig::fromMap($map['certConfig']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        return $model;
    }
}
