<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\cors;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\directResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\headerOp;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\HTTPRewrite;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\redirect;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\retry;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routeServices;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\timeout;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The configuration for cross-origin resource sharing (CORS).
     *
     * @var cors
     */
    public $cors;

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
     * @example 235
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The list of domain IDs.
     *
     * @var int[]
     */
    public $domainIdList;

    /**
     * @description The domain name.
     *
     * @example nbhamster.com
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
     * @description Indicates whether WAF is activated.
     *
     * @example 0
     *
     * @var bool
     */
    public $enableWaf;

    /**
     * @description The ID of the gateway.
     *
     * @example 102
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-7ea3da97b96543e19f6c597cd4a9****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2022-01-26T09:52:41.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2022-02-24T06:08:29.230+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The information about the rewrite policy.
     *
     * @var HTTPRewrite
     */
    public $HTTPRewrite;

    /**
     * @description The header settings.
     *
     * @var headerOp
     */
    public $headerOp;

    /**
     * @description The ID of the route.
     *
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the route.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The matching rule.
     *
     * @example {\"PathPredicates\":{\"Path\":\"/metas\",\"Type\":\"PRE\",\"IgnoreCase\":false}}
     *
     * @var string
     */
    public $predicates;

    /**
     * @description The configuration of the redirection.
     *
     * @var redirect
     */
    public $redirect;

    /**
     * @description The retry configuration.
     *
     * @var retry
     */
    public $retry;

    /**
     * @description The sequence number of the route.
     *
     * @example 1
     *
     * @var int
     */
    public $routeOrder;

    /**
     * @description The information about route matching.
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
     * @example [{\"Percent\":100,\"ServiceId\":126}]
     *
     * @var string
     */
    public $services;

    /**
     * @description The status of the route.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The timeout configuration.
     *
     * @var timeout
     */
    public $timeout;
    protected $_name = [
        'cors'               => 'Cors',
        'defaultServiceId'   => 'DefaultServiceId',
        'defaultServiceName' => 'DefaultServiceName',
        'destinationType'    => 'DestinationType',
        'directResponse'     => 'DirectResponse',
        'domainId'           => 'DomainId',
        'domainIdList'       => 'DomainIdList',
        'domainName'         => 'DomainName',
        'domainNameList'     => 'DomainNameList',
        'enableWaf'          => 'EnableWaf',
        'gatewayId'          => 'GatewayId',
        'gatewayUniqueId'    => 'GatewayUniqueId',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'HTTPRewrite'        => 'HTTPRewrite',
        'headerOp'           => 'HeaderOp',
        'id'                 => 'Id',
        'name'               => 'Name',
        'predicates'         => 'Predicates',
        'redirect'           => 'Redirect',
        'retry'              => 'Retry',
        'routeOrder'         => 'RouteOrder',
        'routePredicates'    => 'RoutePredicates',
        'routeServices'      => 'RouteServices',
        'services'           => 'Services',
        'status'             => 'Status',
        'timeout'            => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cors) {
            $res['Cors'] = null !== $this->cors ? $this->cors->toMap() : null;
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
        if (null !== $this->enableWaf) {
            $res['EnableWaf'] = $this->enableWaf;
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
        if (null !== $this->HTTPRewrite) {
            $res['HTTPRewrite'] = null !== $this->HTTPRewrite ? $this->HTTPRewrite->toMap() : null;
        }
        if (null !== $this->headerOp) {
            $res['HeaderOp'] = null !== $this->headerOp ? $this->headerOp->toMap() : null;
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
        if (null !== $this->retry) {
            $res['Retry'] = null !== $this->retry ? $this->retry->toMap() : null;
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
        if (null !== $this->timeout) {
            $res['Timeout'] = null !== $this->timeout ? $this->timeout->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cors'])) {
            $model->cors = cors::fromMap($map['Cors']);
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
        if (isset($map['EnableWaf'])) {
            $model->enableWaf = $map['EnableWaf'];
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
        if (isset($map['HTTPRewrite'])) {
            $model->HTTPRewrite = HTTPRewrite::fromMap($map['HTTPRewrite']);
        }
        if (isset($map['HeaderOp'])) {
            $model->headerOp = headerOp::fromMap($map['HeaderOp']);
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
        if (isset($map['Retry'])) {
            $model->retry = retry::fromMap($map['Retry']);
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
                $n                    = 0;
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
        if (isset($map['Timeout'])) {
            $model->timeout = timeout::fromMap($map['Timeout']);
        }

        return $model;
    }
}
