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
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var directResponseJSON
     */
    public $directResponseJSON;

    /**
     * @var int
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainIdListJSON;

    /**
     * @var bool
     */
    public $enableWaf;

    /**
     * @var bool
     */
    public $fallback;

    /**
     * @var fallbackServices[]
     */
    public $fallbackServices;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var predicates
     */
    public $predicates;

    /**
     * @var redirectJSON
     */
    public $redirectJSON;

    /**
     * @var int
     */
    public $routeOrder;

    /**
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
        'mseSessionId'       => 'MseSessionId',
        'name'               => 'Name',
        'predicates'         => 'Predicates',
        'redirectJSON'       => 'RedirectJSON',
        'routeOrder'         => 'RouteOrder',
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
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
