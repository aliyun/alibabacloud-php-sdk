<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddGatewayRouteShrinkRequest extends Model
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
     * @var string
     */
    public $directResponseJSONShrink;

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
     * @var string
     */
    public $fallbackServicesShrink;

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
     * @var string
     */
    public $predicatesShrink;

    /**
     * @var string
     */
    public $redirectJSONShrink;

    /**
     * @var int
     */
    public $routeOrder;

    /**
     * @var string
     */
    public $servicesShrink;
    protected $_name = [
        'acceptLanguage'           => 'AcceptLanguage',
        'destinationType'          => 'DestinationType',
        'directResponseJSONShrink' => 'DirectResponseJSON',
        'domainId'                 => 'DomainId',
        'domainIdListJSON'         => 'DomainIdListJSON',
        'enableWaf'                => 'EnableWaf',
        'fallback'                 => 'Fallback',
        'fallbackServicesShrink'   => 'FallbackServices',
        'gatewayId'                => 'GatewayId',
        'gatewayUniqueId'          => 'GatewayUniqueId',
        'mseSessionId'             => 'MseSessionId',
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
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
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
     * @return AddGatewayRouteShrinkRequest
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
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
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
