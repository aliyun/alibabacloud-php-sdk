<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayRouteRequest extends Model
{
    /**
     * @var GatewayRouteBackendConfig
     */
    public $backendConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var GatewayRouteDomainConfig
     */
    public $domainConfig;

    /**
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @example itemcenter-route
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'backendConfig' => 'backendConfig',
        'description'   => 'description',
        'domainConfig'  => 'domainConfig',
        'match'         => 'match',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendConfig) {
            $res['backendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainConfig) {
            $res['domainConfig'] = null !== $this->domainConfig ? $this->domainConfig->toMap() : null;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backendConfig'])) {
            $model->backendConfig = GatewayRouteBackendConfig::fromMap($map['backendConfig']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domainConfig'])) {
            $model->domainConfig = GatewayRouteDomainConfig::fromMap($map['domainConfig']);
        }
        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
