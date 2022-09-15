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
     * @var int
     */
    public $gatewayId;

    /**
     * @var gatewayTrafficPolicy
     */
    public $gatewayTrafficPolicy;

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
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $healehStatus;

    /**
     * @var bool
     */
    public $healthCheck;

    /**
     * @var healthCheckInfo
     */
    public $healthCheckInfo;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $ips;

    /**
     * @var string
     */
    public $metaInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceNameInRegistry;

    /**
     * @var int
     */
    public $servicePort;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string[]
     */
    public $unhealthyEndpoints;

    /**
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
