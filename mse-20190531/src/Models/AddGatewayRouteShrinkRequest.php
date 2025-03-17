<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddGatewayRouteShrinkRequest extends Model
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
     * @description The type of the destination service. Valid values:
     *
     *   Single
     *   Multiple
     *   VersionOriented
     *   Mock
     *   Redirect
     *
     * @example Multiple
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The mock response configuration.
     *
     * @var string
     */
    public $directResponseJSONShrink;

    /**
     * @description The domain ID.
     *
     * @example 20
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The domain IDs.
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
     * @deprecated
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
     * @description The routing policy in a JSON string.
     *
     * @example {"CORS":"{\\"allowMethods\\":\\"GET,POST,PUT,DELETE,HEAD,OPTIONS,PATCH\\",\\"allowHeaders\\":\\"*\\",\\"exposeHeaders\\":\\"*\\",\\"unitNum\\":12,\\"allowCredentials\\":true,\\"status\\":\\"off\\",\\"allowOrigins\\":\\"*\\",\\"timeUnit\\":\\"h\\"}","Timeout":"{\\"unitNum\\":10,\\"timeUnit\\":\\"s\\",\\"status\\":\\"off\\"}","Retry":"{\\"attempts\\":2,\\"retryOn\\":[\\"5xx\\"],\\"status\\":\\"off\\"}","HTTPRewrite":"{\\"pathType\\":\\"EQUAL\\",\\"path\\":\\"/o\\",\\"status\\":\\"off\\"}","Waf":"{\\"enabled\\":false}","HeaderOp":"{\\"status\\":\\"off\\",\\"headerOpItems\\":[{\\"directionType\\":\\"Request\\",\\"opType\\":\\"Add\\",\\"key\\":\\"kkk\\",\\"value\\":\\"ll\\"}]}"}
     *
     * @var string
     */
    public $policies;

    /**
     * @description The matching rule.
     *
     * @var string
     */
    public $predicatesShrink;

    /**
     * @description The configuration of the redirection.
     *
     * @var string
     */
    public $redirectJSONShrink;

    /**
     * @description The sequence number of the route. (A small value indicates a high priority.)
     *
     * @example 1
     *
     * @var int
     */
    public $routeOrder;

    /**
     * @description The route type. Valid values:
     *
     * Op: Manage routes.
     *
     * @example Op
     *
     * @var string
     */
    public $routeType;

    /**
     * @description The list of services.
     *
     * @var string
     */
    public $servicesShrink;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'description' => 'Description',
        'destinationType' => 'DestinationType',
        'directResponseJSONShrink' => 'DirectResponseJSON',
        'domainId' => 'DomainId',
        'domainIdListJSON' => 'DomainIdListJSON',
        'enableWaf' => 'EnableWaf',
        'fallback' => 'Fallback',
        'fallbackServicesShrink' => 'FallbackServices',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'name' => 'Name',
        'policies' => 'Policies',
        'predicatesShrink' => 'Predicates',
        'redirectJSONShrink' => 'RedirectJSON',
        'routeOrder' => 'RouteOrder',
        'routeType' => 'RouteType',
        'servicesShrink' => 'Services',
    ];

    public function validate() {}

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
        if (null !== $this->fallbackServicesShrink) {
            $res['FallbackServices'] = $this->fallbackServicesShrink;
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
        if (null !== $this->predicatesShrink) {
            $res['Predicates'] = $this->predicatesShrink;
        }
        if (null !== $this->redirectJSONShrink) {
            $res['RedirectJSON'] = $this->redirectJSONShrink;
        }
        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }
        if (null !== $this->servicesShrink) {
            $res['Services'] = $this->servicesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewayRouteShrinkRequest
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
            $model->fallbackServicesShrink = $map['FallbackServices'];
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
            $model->predicatesShrink = $map['Predicates'];
        }
        if (isset($map['RedirectJSON'])) {
            $model->redirectJSONShrink = $map['RedirectJSON'];
        }
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }
        if (isset($map['Services'])) {
            $model->servicesShrink = $map['Services'];
        }

        return $model;
    }
}
