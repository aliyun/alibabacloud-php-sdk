<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\cors;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\directResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\headerOp;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\HTTPRewrite;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\redirect;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\retry;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\routePredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\routeServices;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\timeout;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $ahasStatus;

    /**
     * @var cors
     */
    public $cors;

    /**
     * @var int
     */
    public $defaultServiceId;

    /**
     * @var string
     */
    public $defaultServiceName;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var directResponse
     */
    public $directResponse;

    /**
     * @var int
     */
    public $domainId;

    /**
     * @var int[]
     */
    public $domainIdList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string[]
     */
    public $domainNameList;

    /**
     * @var bool
     */
    public $enableWaf;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var HTTPRewrite
     */
    public $HTTPRewrite;

    /**
     * @var headerOp
     */
    public $headerOp;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $predicates;

    /**
     * @var redirect
     */
    public $redirect;

    /**
     * @var retry
     */
    public $retry;

    /**
     * @var int
     */
    public $routeOrder;

    /**
     * @var routePredicates
     */
    public $routePredicates;

    /**
     * @var routeServices[]
     */
    public $routeServices;

    /**
     * @var string
     */
    public $services;

    /**
     * @var int
     */
    public $status;

    /**
     * @var timeout
     */
    public $timeout;
    protected $_name = [
        'ahasStatus'         => 'AhasStatus',
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
        if (null !== $this->ahasStatus) {
            $res['AhasStatus'] = $this->ahasStatus;
        }
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
        if (isset($map['AhasStatus'])) {
            $model->ahasStatus = $map['AhasStatus'];
        }
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
