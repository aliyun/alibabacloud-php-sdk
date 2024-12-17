<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\domains;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\predicates;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\services;
use AlibabaCloud\Tea\Model;

class HttpApiRoute extends Model
{
    /**
     * @example intranet/internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @example Deploying/NotDeployed/Undeploying/Deployed
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @example Single/Multiple/VersionOriented
     *
     * @var string
     */
    public $destinationType;

    /**
     * @var domains[]
     */
    public $domains;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $httpApiId;

    /**
     * @example Http
     *
     * @var string
     */
    public $httpApiName;

    /**
     * @example Http
     *
     * @var string
     */
    public $httpApiType;

    /**
     * @example 1
     *
     * @var int
     */
    public $ingressId;

    /**
     * @var string
     */
    public $nacosInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $nacosNamespaceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var policies
     */
    public $policies;

    /**
     * @var predicates
     */
    public $predicates;

    /**
     * @var string
     */
    public $routeId;

    /**
     * @var services[]
     */
    public $services;

    /**
     * @example SAE_NACOS/SAE_K8S_SERVICE/MSE_NACOS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'addressType'      => 'AddressType',
        'deployStatus'     => 'DeployStatus',
        'destinationType'  => 'DestinationType',
        'domains'          => 'Domains',
        'environmentId'    => 'EnvironmentId',
        'gatewayId'        => 'GatewayId',
        'httpApiId'        => 'HttpApiId',
        'httpApiName'      => 'HttpApiName',
        'httpApiType'      => 'HttpApiType',
        'ingressId'        => 'IngressId',
        'nacosInstanceId'  => 'NacosInstanceId',
        'nacosNamespaceId' => 'NacosNamespaceId',
        'name'             => 'Name',
        'namespaceId'      => 'NamespaceId',
        'policies'         => 'Policies',
        'predicates'       => 'Predicates',
        'routeId'          => 'RouteId',
        'services'         => 'Services',
        'sourceType'       => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->domains) {
            $res['Domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['Domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->httpApiId) {
            $res['HttpApiId'] = $this->httpApiId;
        }
        if (null !== $this->httpApiName) {
            $res['HttpApiName'] = $this->httpApiName;
        }
        if (null !== $this->httpApiType) {
            $res['HttpApiType'] = $this->httpApiType;
        }
        if (null !== $this->ingressId) {
            $res['IngressId'] = $this->ingressId;
        }
        if (null !== $this->nacosInstanceId) {
            $res['NacosInstanceId'] = $this->nacosInstanceId;
        }
        if (null !== $this->nacosNamespaceId) {
            $res['NacosNamespaceId'] = $this->nacosNamespaceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        }
        if (null !== $this->predicates) {
            $res['Predicates'] = null !== $this->predicates ? $this->predicates->toMap() : null;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
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
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiRoute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n              = 0;
                foreach ($map['Domains'] as $item) {
                    $model->domains[$n++] = null !== $item ? domains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['HttpApiId'])) {
            $model->httpApiId = $map['HttpApiId'];
        }
        if (isset($map['HttpApiName'])) {
            $model->httpApiName = $map['HttpApiName'];
        }
        if (isset($map['HttpApiType'])) {
            $model->httpApiType = $map['HttpApiType'];
        }
        if (isset($map['IngressId'])) {
            $model->ingressId = $map['IngressId'];
        }
        if (isset($map['NacosInstanceId'])) {
            $model->nacosInstanceId = $map['NacosInstanceId'];
        }
        if (isset($map['NacosNamespaceId'])) {
            $model->nacosNamespaceId = $map['NacosNamespaceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }
        if (isset($map['Predicates'])) {
            $model->predicates = predicates::fromMap($map['Predicates']);
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
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
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
