<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\cors;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\directResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\headerOp;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\HTTPRewrite;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\redirect;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\retry;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routePredicates;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\routeServices;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data\timeout;

class data extends Model
{
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
        if (null !== $this->cors) {
            $this->cors->validate();
        }
        if (null !== $this->directResponse) {
            $this->directResponse->validate();
        }
        if (\is_array($this->domainIdList)) {
            Model::validateArray($this->domainIdList);
        }
        if (\is_array($this->domainNameList)) {
            Model::validateArray($this->domainNameList);
        }
        if (null !== $this->HTTPRewrite) {
            $this->HTTPRewrite->validate();
        }
        if (null !== $this->headerOp) {
            $this->headerOp->validate();
        }
        if (null !== $this->redirect) {
            $this->redirect->validate();
        }
        if (null !== $this->retry) {
            $this->retry->validate();
        }
        if (null !== $this->routePredicates) {
            $this->routePredicates->validate();
        }
        if (\is_array($this->routeServices)) {
            Model::validateArray($this->routeServices);
        }
        if (null !== $this->timeout) {
            $this->timeout->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cors) {
            $res['Cors'] = null !== $this->cors ? $this->cors->toArray($noStream) : $this->cors;
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
            $res['DirectResponse'] = null !== $this->directResponse ? $this->directResponse->toArray($noStream) : $this->directResponse;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->domainIdList) {
            if (\is_array($this->domainIdList)) {
                $res['DomainIdList'] = [];
                $n1                  = 0;
                foreach ($this->domainIdList as $item1) {
                    $res['DomainIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainNameList) {
            if (\is_array($this->domainNameList)) {
                $res['DomainNameList'] = [];
                $n1                    = 0;
                foreach ($this->domainNameList as $item1) {
                    $res['DomainNameList'][$n1++] = $item1;
                }
            }
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
            $res['HTTPRewrite'] = null !== $this->HTTPRewrite ? $this->HTTPRewrite->toArray($noStream) : $this->HTTPRewrite;
        }

        if (null !== $this->headerOp) {
            $res['HeaderOp'] = null !== $this->headerOp ? $this->headerOp->toArray($noStream) : $this->headerOp;
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
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toArray($noStream) : $this->redirect;
        }

        if (null !== $this->retry) {
            $res['Retry'] = null !== $this->retry ? $this->retry->toArray($noStream) : $this->retry;
        }

        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }

        if (null !== $this->routePredicates) {
            $res['RoutePredicates'] = null !== $this->routePredicates ? $this->routePredicates->toArray($noStream) : $this->routePredicates;
        }

        if (null !== $this->routeServices) {
            if (\is_array($this->routeServices)) {
                $res['RouteServices'] = [];
                $n1                   = 0;
                foreach ($this->routeServices as $item1) {
                    $res['RouteServices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['Timeout'] = null !== $this->timeout ? $this->timeout->toArray($noStream) : $this->timeout;
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
                $model->domainIdList = [];
                $n1                  = 0;
                foreach ($map['DomainIdList'] as $item1) {
                    $model->domainIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainNameList'])) {
            if (!empty($map['DomainNameList'])) {
                $model->domainNameList = [];
                $n1                    = 0;
                foreach ($map['DomainNameList'] as $item1) {
                    $model->domainNameList[$n1++] = $item1;
                }
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
                $n1                   = 0;
                foreach ($map['RouteServices'] as $item1) {
                    $model->routeServices[$n1++] = routeServices::fromMap($item1);
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
