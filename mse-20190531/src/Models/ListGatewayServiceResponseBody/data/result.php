<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\healthCheckInfo;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\versions;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The traffic management policy.
     *
     * @var gatewayTrafficPolicy
     */
    public $gatewayTrafficPolicy;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14centbrveca****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The time when the service was created.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the service was last modified.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The health status.
     *
     *   Health
     *   Unhealthy
     *   Unknown
     *
     * @example Unhealthy
     *
     * @var string
     */
    public $healehStatus;

    /**
     * @description Indicates whether health checks are performed.
     *
     * @example true
     *
     * @var bool
     */
    public $healthCheck;

    /**
     * @description The information about health checks.
     *
     * @var healthCheckInfo
     */
    public $healthCheckInfo;

    /**
     * @description The health status.
     *
     *   Health
     *   Unhealthy
     *   Unknown
     *
     * @example Unhealthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The IP addresses of the service.
     *
     * @var string[]
     */
    public $ips;

    /**
     * @description The metadata or IP addresses of the service.
     *
     * @example {}
     *
     * @var string
     */
    public $metaInfo;

    /**
     * @description The name of the service.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example public
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The port array.
     *
     * @var int[]
     */
    public $ports;

    /**
     * @description The name of the service registered with the service registry.
     *
     * @example test
     *
     * @var string
     */
    public $serviceNameInRegistry;

    /**
     * @description The service port.
     *
     * @example 80
     *
     * @var int
     */
    public $servicePort;

    /**
     * @description The protocol of the service.
     *
     * @example HTTP
     *
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description The ID of the service source.
     *
     * @example 2
     *
     * @var int
     */
    public $sourceId;

    /**
     * @description The type of the service source.
     *
     * @example MSE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The array of unhealthy endpoints.
     *
     * @var string[]
     */
    public $unhealthyEndpoints;

    /**
     * @description The version of the service.
     *
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'gatewayId'             => 'GatewayId',
        'gatewayTrafficPolicy'  => 'GatewayTrafficPolicy',
        'gatewayUniqueId'       => 'GatewayUniqueId',
        'gmtCreate'             => 'GmtCreate',
        'gmtModified'           => 'GmtModified',
        'groupName'             => 'GroupName',
        'healehStatus'          => 'HealehStatus',
        'healthCheck'           => 'HealthCheck',
        'healthCheckInfo'       => 'HealthCheckInfo',
        'healthStatus'          => 'HealthStatus',
        'id'                    => 'Id',
        'ips'                   => 'Ips',
        'metaInfo'              => 'MetaInfo',
        'name'                  => 'Name',
        'namespace'             => 'Namespace',
        'ports'                 => 'Ports',
        'serviceNameInRegistry' => 'ServiceNameInRegistry',
        'servicePort'           => 'ServicePort',
        'serviceProtocol'       => 'ServiceProtocol',
        'sourceId'              => 'SourceId',
        'sourceType'            => 'SourceType',
        'unhealthyEndpoints'    => 'UnhealthyEndpoints',
        'versions'              => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayTrafficPolicy) {
            $res['GatewayTrafficPolicy'] = null !== $this->gatewayTrafficPolicy ? $this->gatewayTrafficPolicy->toMap() : null;
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->healehStatus) {
            $res['HealehStatus'] = $this->healehStatus;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckInfo) {
            $res['HealthCheckInfo'] = null !== $this->healthCheckInfo ? $this->healthCheckInfo->toMap() : null;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->serviceNameInRegistry) {
            $res['ServiceNameInRegistry'] = $this->serviceNameInRegistry;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->unhealthyEndpoints) {
            $res['UnhealthyEndpoints'] = $this->unhealthyEndpoints;
        }
        if (null !== $this->versions) {
            $res['Versions'] = [];
            if (null !== $this->versions && \is_array($this->versions)) {
                $n = 0;
                foreach ($this->versions as $item) {
                    $res['Versions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayTrafficPolicy'])) {
            $model->gatewayTrafficPolicy = gatewayTrafficPolicy::fromMap($map['GatewayTrafficPolicy']);
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HealehStatus'])) {
            $model->healehStatus = $map['HealehStatus'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckInfo'])) {
            $model->healthCheckInfo = healthCheckInfo::fromMap($map['HealthCheckInfo']);
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }
        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = $map['Ports'];
            }
        }
        if (isset($map['ServiceNameInRegistry'])) {
            $model->serviceNameInRegistry = $map['ServiceNameInRegistry'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['UnhealthyEndpoints'])) {
            if (!empty($map['UnhealthyEndpoints'])) {
                $model->unhealthyEndpoints = $map['UnhealthyEndpoints'];
            }
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n               = 0;
                foreach ($map['Versions'] as $item) {
                    $model->versions[$n++] = null !== $item ? versions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
