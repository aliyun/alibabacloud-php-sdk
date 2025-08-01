<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\comment;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\directResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\fallbackServices;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\redirect;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routePredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routeServices;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The route comment (ingress).
     *
     * @var comment
     */
    public $comment;

    /**
     * @description The default service ID.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultServiceId;

    /**
     * @description The default service name.
     *
     * @example test
     *
     * @var string
     */
    public $defaultServiceName;

    /**
     * @description The destination service type.
     *
     * @example Single
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The information about service mocking.
     *
     * @var directResponse
     */
    public $directResponse;

    /**
     * @description The domain ID.
     *
     * @example 265
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The domain IDs.
     *
     * @var int[]
     */
    public $domainIdList;

    /**
     * @description The domain name.
     *
     * @example y.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The domain names.
     *
     * @var string[]
     */
    public $domainNameList;

    /**
     * @var bool
     */
    public $dynamicRoute;

    /**
     * @description Indicates whether Web Application Firewall (WAF) is activated.
     *
     * @example false
     *
     * @var string
     */
    public $enableWaf;

    /**
     * @description Indicates whether the Fallback service is enabled.
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
     * @example 496
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-cf0e7f52ecc7429dbc7ba4d5e3656100
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2022-01-25T07:14:01.817+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID.
     *
     * @example 47
     *
     * @var int
     */
    public $id;

    /**
     * @description The name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The matching rules.
     *
     * @example {\\"PathPredicates\\":{\\"Path\\":\\"/rpc/compute \\",\\"Type\\":\\"PRE\\",\\"IgnoreCase\\":true}}
     *
     * @var string
     */
    public $predicates;

    /**
     * @description The information about redirection.
     *
     * @var redirect
     */
    public $redirect;

    /**
     * @description The order.
     *
     * @example 1
     *
     * @var int
     */
    public $routeOrder;

    /**
     * @description The matching rules.
     *
     * @var routePredicates
     */
    public $routePredicates;

    /**
     * @description The information about services.
     *
     * @var routeServices[]
     */
    public $routeServices;

    /**
     * @description The information about services.
     *
     * @example []
     *
     * @var string
     */
    public $services;

    /**
     * @description The status.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The route type.
     *
     * @example Op
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'Comment',
        'defaultServiceId' => 'DefaultServiceId',
        'defaultServiceName' => 'DefaultServiceName',
        'destinationType' => 'DestinationType',
        'directResponse' => 'DirectResponse',
        'domainId' => 'DomainId',
        'domainIdList' => 'DomainIdList',
        'domainName' => 'DomainName',
        'domainNameList' => 'DomainNameList',
        'dynamicRoute' => 'DynamicRoute',
        'enableWaf' => 'EnableWaf',
        'fallback' => 'Fallback',
        'fallbackServices' => 'FallbackServices',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'predicates' => 'Predicates',
        'redirect' => 'Redirect',
        'routeOrder' => 'RouteOrder',
        'routePredicates' => 'RoutePredicates',
        'routeServices' => 'RouteServices',
        'services' => 'Services',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = null !== $this->comment ? $this->comment->toMap() : null;
        }
        if (null !== $this->defaultServiceId) {
            $res['DefaultServiceId'] = $this->defaultServiceId;
        }
        if (null !== $this->defaultServiceName) {
            $res['DefaultServiceName'] = $this->defaultServiceName;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->directResponse) {
            $res['DirectResponse'] = null !== $this->directResponse ? $this->directResponse->toMap() : null;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainIdList) {
            $res['DomainIdList'] = $this->domainIdList;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameList) {
            $res['DomainNameList'] = $this->domainNameList;
        }
        if (null !== $this->dynamicRoute) {
            $res['DynamicRoute'] = $this->dynamicRoute;
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->predicates) {
            $res['Predicates'] = $this->predicates;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
        }
        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }
        if (null !== $this->routePredicates) {
            $res['RoutePredicates'] = null !== $this->routePredicates ? $this->routePredicates->toMap() : null;
        }
        if (null !== $this->routeServices) {
            $res['RouteServices'] = [];
            if (null !== $this->routeServices && \is_array($this->routeServices)) {
                $n = 0;
                foreach ($this->routeServices as $item) {
                    $res['RouteServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->services) {
            $res['Services'] = $this->services;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = comment::fromMap($map['Comment']);
        }
        if (isset($map['DefaultServiceId'])) {
            $model->defaultServiceId = $map['DefaultServiceId'];
        }
        if (isset($map['DefaultServiceName'])) {
            $model->defaultServiceName = $map['DefaultServiceName'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['DirectResponse'])) {
            $model->directResponse = directResponse::fromMap($map['DirectResponse']);
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainIdList'])) {
            if (!empty($map['DomainIdList'])) {
                $model->domainIdList = $map['DomainIdList'];
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameList'])) {
            if (!empty($map['DomainNameList'])) {
                $model->domainNameList = $map['DomainNameList'];
            }
        }
        if (isset($map['DynamicRoute'])) {
            $model->dynamicRoute = $map['DynamicRoute'];
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
                $n = 0;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Predicates'])) {
            $model->predicates = $map['Predicates'];
        }
        if (isset($map['Redirect'])) {
            $model->redirect = redirect::fromMap($map['Redirect']);
        }
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['RoutePredicates'])) {
            $model->routePredicates = routePredicates::fromMap($map['RoutePredicates']);
        }
        if (isset($map['RouteServices'])) {
            if (!empty($map['RouteServices'])) {
                $model->routeServices = [];
                $n = 0;
                foreach ($map['RouteServices'] as $item) {
                    $model->routeServices[$n++] = null !== $item ? routeServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Services'])) {
            $model->services = $map['Services'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
