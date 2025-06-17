<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\domains;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\predicates;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\services;

class HttpApiRoute extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $deployStatus;

    /**
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
     * @var string
     */
    public $httpApiName;

    /**
     * @var string
     */
    public $httpApiType;

    /**
     * @var int
     */
    public $ingressId;

    /**
     * @var string
     */
    public $nacosInstanceId;

    /**
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
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'addressType' => 'AddressType',
        'deployStatus' => 'DeployStatus',
        'destinationType' => 'DestinationType',
        'domains' => 'Domains',
        'environmentId' => 'EnvironmentId',
        'gatewayId' => 'GatewayId',
        'httpApiId' => 'HttpApiId',
        'httpApiName' => 'HttpApiName',
        'httpApiType' => 'HttpApiType',
        'ingressId' => 'IngressId',
        'nacosInstanceId' => 'NacosInstanceId',
        'nacosNamespaceId' => 'NacosNamespaceId',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'policies' => 'Policies',
        'predicates' => 'Predicates',
        'routeId' => 'RouteId',
        'services' => 'Services',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        if (null !== $this->policies) {
            $this->policies->validate();
        }
        if (null !== $this->predicates) {
            $this->predicates->validate();
        }
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['Policies'] = null !== $this->policies ? $this->policies->toArray($noStream) : $this->policies;
        }

        if (null !== $this->predicates) {
            $res['Predicates'] = null !== $this->predicates ? $this->predicates->toArray($noStream) : $this->predicates;
        }

        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
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

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1] = domains::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Services'] as $item1) {
                    $model->services[$n1] = services::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
