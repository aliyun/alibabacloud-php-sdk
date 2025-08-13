<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\directResponseJSON;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\fallbackServices;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\predicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\redirectJSON;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\services;

class UpdateGatewayRouteRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var directResponseJSON
     */
    public $directResponseJSON;

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
     * @var int
     */
    public $id;

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
        'acceptLanguage' => 'AcceptLanguage',
        'description' => 'Description',
        'destinationType' => 'DestinationType',
        'directResponseJSON' => 'DirectResponseJSON',
        'domainIdListJSON' => 'DomainIdListJSON',
        'enableWaf' => 'EnableWaf',
        'fallback' => 'Fallback',
        'fallbackServices' => 'FallbackServices',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id' => 'Id',
        'name' => 'Name',
        'predicates' => 'Predicates',
        'redirectJSON' => 'RedirectJSON',
        'routeOrder' => 'RouteOrder',
        'services' => 'Services',
    ];

    public function validate()
    {
        if (null !== $this->directResponseJSON) {
            $this->directResponseJSON->validate();
        }
        if (\is_array($this->fallbackServices)) {
            Model::validateArray($this->fallbackServices);
        }
        if (null !== $this->predicates) {
            $this->predicates->validate();
        }
        if (null !== $this->redirectJSON) {
            $this->redirectJSON->validate();
        }
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->directResponseJSON) {
            $res['DirectResponseJSON'] = null !== $this->directResponseJSON ? $this->directResponseJSON->toArray($noStream) : $this->directResponseJSON;
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
            if (\is_array($this->fallbackServices)) {
                $res['FallbackServices'] = [];
                $n1 = 0;
                foreach ($this->fallbackServices as $item1) {
                    $res['FallbackServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->predicates) {
            $res['Predicates'] = null !== $this->predicates ? $this->predicates->toArray($noStream) : $this->predicates;
        }

        if (null !== $this->redirectJSON) {
            $res['RedirectJSON'] = null !== $this->redirectJSON ? $this->redirectJSON->toArray($noStream) : $this->redirectJSON;
        }

        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['Services'] = [];
                $n1 = 0;
                foreach ($this->services as $item1) {
                    $res['Services'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['DirectResponseJSON'])) {
            $model->directResponseJSON = directResponseJSON::fromMap($map['DirectResponseJSON']);
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
                $n1 = 0;
                foreach ($map['FallbackServices'] as $item1) {
                    $model->fallbackServices[$n1] = fallbackServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
                $n1 = 0;
                foreach ($map['Services'] as $item1) {
                    $model->services[$n1] = services::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
