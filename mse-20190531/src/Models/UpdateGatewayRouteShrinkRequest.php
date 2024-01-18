<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteShrinkRequest extends Model
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
     * @example a route for xxx
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination service type.
     *
     * @example Mock
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The information about service mocking.
     *
     * @var string
     */
    public $directResponseJSONShrink;

    /**
     * @description The associated domain name.
     *
     * @example [90]
     *
     * @var string
     */
    public $domainIdListJSON;

    /**
     * @description Specifies whether to activate Web Application Firewall (WAF).
     *
     * @example false
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
     * @var string
     */
    public $fallbackServicesShrink;

    /**
     * @description The ID of the gateway.
     *
     * @example 501
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-86575c0bc9f04ecfbacb92b8e392a2c4
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the route.
     *
     * @example 139
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the route.
     *
     * @example route-web
     *
     * @deprecated
     *
     * @var string
     */
    public $name;

    /**
     * @description The route matching conditions.
     *
     * @var string
     */
    public $predicatesShrink;

    /**
     * @description The information about redirection.
     *
     * @var string
     */
    public $redirectJSONShrink;

    /**
     * @description The sequence number of the route.
     *
     * @example 1
     *
     * @var int
     */
    public $routeOrder;

    /**
     * @description The information about destination services.
     *
     * @var string
     */
    public $servicesShrink;
    protected $_name = [
        'acceptLanguage'           => 'AcceptLanguage',
        'description'              => 'Description',
        'destinationType'          => 'DestinationType',
        'directResponseJSONShrink' => 'DirectResponseJSON',
        'domainIdListJSON'         => 'DomainIdListJSON',
        'enableWaf'                => 'EnableWaf',
        'fallback'                 => 'Fallback',
        'fallbackServicesShrink'   => 'FallbackServices',
        'gatewayId'                => 'GatewayId',
        'gatewayUniqueId'          => 'GatewayUniqueId',
        'id'                       => 'Id',
        'name'                     => 'Name',
        'predicatesShrink'         => 'Predicates',
        'redirectJSONShrink'       => 'RedirectJSON',
        'routeOrder'               => 'RouteOrder',
        'servicesShrink'           => 'Services',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->directResponseJSONShrink) {
            $res['DirectResponseJSON'] = $this->directResponseJSONShrink;
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
        if (null !== $this->fallbackServicesShrink) {
            $res['FallbackServices'] = $this->fallbackServicesShrink;
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
        if (null !== $this->predicatesShrink) {
            $res['Predicates'] = $this->predicatesShrink;
        }
        if (null !== $this->redirectJSONShrink) {
            $res['RedirectJSON'] = $this->redirectJSONShrink;
        }
        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }
        if (null !== $this->servicesShrink) {
            $res['Services'] = $this->servicesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteShrinkRequest
     */
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
            $model->directResponseJSONShrink = $map['DirectResponseJSON'];
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
            $model->fallbackServicesShrink = $map['FallbackServices'];
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
            $model->predicatesShrink = $map['Predicates'];
        }
        if (isset($map['RedirectJSON'])) {
            $model->redirectJSONShrink = $map['RedirectJSON'];
        }
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['Services'])) {
            $model->servicesShrink = $map['Services'];
        }

        return $model;
    }
}
