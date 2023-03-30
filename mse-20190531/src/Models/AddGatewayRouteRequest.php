<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\directResponseJSON;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\fallbackServices;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\predicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\redirectJSON;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\services;
use AlibabaCloud\Tea\Model;

class AddGatewayRouteRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The destination service type.
     *
     * @example Multiple
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The mock response configuration.
     *
     * @var directResponseJSON
     */
    public $directResponseJSON;

    /**
     * @description The domain ID.
     *
     * @example 20
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The list of domain IDs.
     *
     * @example [0,94]
     *
     * @var string
     */
    public $domainIdListJSON;

    /**
     * @description Specifies whether to activate Web Application Firewall (WAF).
     *
     * @example true
     *
     * @var bool
     */
    public $enableWaf;

    /**
     * @description Specifies whether to enable the Fallback service.
     *
     * @example true
     *
     * @var bool
     */
    public $fallback;

    /**
     * @description The information about the Fallback service.
     *
     * @var fallbackServices[]
     */
    public $fallbackServices;

    /**
     * @description The ID of the gateway.
     *
     * @example 526
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-492af9b04bb4474cae9d645be8*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The name of the route.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Routing policy Json string.
     *
     * @example {"CORS":"{\"allowMethods\":\"GET,POST,PUT,DELETE,HEAD,OPTIONS,PATCH\",\"allowHeaders\":\"*\",\"exposeHeaders\":\"*\",\"unitNum\":12,\"allowCredentials\":true,\"status\":\"off\",\"allowOrigins\":\"*\",\"timeUnit\":\"h\"}","Timeout":"{\"unitNum\":10,\"timeUnit\":\"s\",\"status\":\"off\"}","Retry":"{\"attempts\":2,\"retryOn\":[\"5xx\"],\"status\":\"off\"}","HTTPRewrite":"{\"pathType\":\"EQUAL\",\"path\":\"/o\",\"status\":\"off\"}","Waf":"{\"enabled\":false}","HeaderOp":"{\"status\":\"off\",\"headerOpItems\":[{\"directionType\":\"Request\",\"opType\":\"Add\",\"key\":\"kkk\",\"value\":\"ll\"}]}"}
     *
     * @var string
     */
    public $policies;

    /**
     * @description The matching rule.
     *
     * @var predicates
     */
    public $predicates;

    /**
     * @description The configuration of the redirection.
     *
     * @var redirectJSON
     */
    public $redirectJSON;

    /**
     * @description The sequence number of the route. A small value indicates a high priority.
     *
     * @example 1
     *
     * @var int
     */
    public $routeOrder;

    /**
     * @description RouteType:
     *
     * Op: Control routing.
     * @example Op
     *
     * @var string
     */
    public $routeType;

    /**
     * @description The services.
     *
     * @var services[]
     */
    public $services;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'destinationType'    => 'DestinationType',
        'directResponseJSON' => 'DirectResponseJSON',
        'domainId'           => 'DomainId',
        'domainIdListJSON'   => 'DomainIdListJSON',
        'enableWaf'          => 'EnableWaf',
        'fallback'           => 'Fallback',
        'fallbackServices'   => 'FallbackServices',
        'gatewayId'          => 'GatewayId',
        'gatewayUniqueId'    => 'GatewayUniqueId',
        'name'               => 'Name',
        'policies'           => 'Policies',
        'predicates'         => 'Predicates',
        'redirectJSON'       => 'RedirectJSON',
        'routeOrder'         => 'RouteOrder',
        'routeType'          => 'RouteType',
        'services'           => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->directResponseJSON) {
            $res['DirectResponseJSON'] = null !== $this->directResponseJSON ? $this->directResponseJSON->toMap() : null;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainIdListJSON) {
            $res['DomainIdListJSON'] = $this->domainIdListJSON;
        }
        if (null !== $this->enableWaf) {
            $res['EnableWaf'] = $this->enableWaf;
        }
        if (null !== $this->fallback) {
            $res['Fallback'] = $this->fallback;
        }
        if (null !== $this->fallbackServices) {
            $res['FallbackServices'] = [];
            if (null !== $this->fallbackServices && \is_array($this->fallbackServices)) {
                $n = 0;
                foreach ($this->fallbackServices as $item) {
                    $res['FallbackServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }
        if (null !== $this->predicates) {
            $res['Predicates'] = null !== $this->predicates ? $this->predicates->toMap() : null;
        }
        if (null !== $this->redirectJSON) {
            $res['RedirectJSON'] = null !== $this->redirectJSON ? $this->redirectJSON->toMap() : null;
        }
        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }
        if (null !== $this->services) {
            $res['Services'] = [];
            if (null !== $this->services && \is_array($this->services)) {
                $n = 0;
                foreach ($this->services as $item) {
                    $res['Services'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewayRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['DirectResponseJSON'])) {
            $model->directResponseJSON = directResponseJSON::fromMap($map['DirectResponseJSON']);
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainIdListJSON'])) {
            $model->domainIdListJSON = $map['DomainIdListJSON'];
        }
        if (isset($map['EnableWaf'])) {
            $model->enableWaf = $map['EnableWaf'];
        }
        if (isset($map['Fallback'])) {
            $model->fallback = $map['Fallback'];
        }
        if (isset($map['FallbackServices'])) {
            if (!empty($map['FallbackServices'])) {
                $model->fallbackServices = [];
                $n                       = 0;
                foreach ($map['FallbackServices'] as $item) {
                    $model->fallbackServices[$n++] = null !== $item ? fallbackServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }
        if (isset($map['Predicates'])) {
            $model->predicates = predicates::fromMap($map['Predicates']);
        }
        if (isset($map['RedirectJSON'])) {
            $model->redirectJSON = redirectJSON::fromMap($map['RedirectJSON']);
        }
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n               = 0;
                foreach ($map['Services'] as $item) {
                    $model->services[$n++] = null !== $item ? services::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
