<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsRequest\endpointGroupConfigurations\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsRequest\endpointGroupConfigurations\portOverrides;
use AlibabaCloud\Tea\Model;

class endpointGroupConfigurations extends Model
{
    /**
     * @var string
     */
    public $endpointGroupName;

    /**
     * @var string
     */
    public $endpointGroupDescription;

    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var int
     */
    public $trafficPercentage;

    /**
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @var int
     */
    public $healthCheckIntervalSeconds;

    /**
     * @var string
     */
    public $healthCheckPath;

    /**
     * @var int
     */
    public $healthCheckPort;

    /**
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @var int
     */
    public $thresholdCount;

    /**
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @var string
     */
    public $endpointGroupType;

    /**
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @var bool
     */
    public $enableClientIPPreservationToa;

    /**
     * @var bool
     */
    public $enableClientIPPreservationProxyProtocol;
    protected $_name = [
        'endpointGroupName'                       => 'EndpointGroupName',
        'endpointGroupDescription'                => 'EndpointGroupDescription',
        'endpointGroupRegion'                     => 'EndpointGroupRegion',
        'trafficPercentage'                       => 'TrafficPercentage',
        'healthCheckEnabled'                      => 'HealthCheckEnabled',
        'healthCheckIntervalSeconds'              => 'HealthCheckIntervalSeconds',
        'healthCheckPath'                         => 'HealthCheckPath',
        'healthCheckPort'                         => 'HealthCheckPort',
        'healthCheckProtocol'                     => 'HealthCheckProtocol',
        'thresholdCount'                          => 'ThresholdCount',
        'endpointConfigurations'                  => 'EndpointConfigurations',
        'endpointRequestProtocol'                 => 'EndpointRequestProtocol',
        'endpointGroupType'                       => 'EndpointGroupType',
        'portOverrides'                           => 'PortOverrides',
        'enableClientIPPreservationToa'           => 'EnableClientIPPreservationToa',
        'enableClientIPPreservationProxyProtocol' => 'EnableClientIPPreservationProxyProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointGroupName) {
            $res['EndpointGroupName'] = $this->endpointGroupName;
        }
        if (null !== $this->endpointGroupDescription) {
            $res['EndpointGroupDescription'] = $this->endpointGroupDescription;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->trafficPercentage) {
            $res['TrafficPercentage'] = $this->trafficPercentage;
        }
        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }
        if (null !== $this->healthCheckIntervalSeconds) {
            $res['HealthCheckIntervalSeconds'] = $this->healthCheckIntervalSeconds;
        }
        if (null !== $this->healthCheckPath) {
            $res['HealthCheckPath'] = $this->healthCheckPath;
        }
        if (null !== $this->healthCheckPort) {
            $res['HealthCheckPort'] = $this->healthCheckPort;
        }
        if (null !== $this->healthCheckProtocol) {
            $res['HealthCheckProtocol'] = $this->healthCheckProtocol;
        }
        if (null !== $this->thresholdCount) {
            $res['ThresholdCount'] = $this->thresholdCount;
        }
        if (null !== $this->endpointConfigurations) {
            $res['EndpointConfigurations'] = [];
            if (null !== $this->endpointConfigurations && \is_array($this->endpointConfigurations)) {
                $n = 0;
                foreach ($this->endpointConfigurations as $item) {
                    $res['EndpointConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpointRequestProtocol) {
            $res['EndpointRequestProtocol'] = $this->endpointRequestProtocol;
        }
        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }
        if (null !== $this->portOverrides) {
            $res['PortOverrides'] = [];
            if (null !== $this->portOverrides && \is_array($this->portOverrides)) {
                $n = 0;
                foreach ($this->portOverrides as $item) {
                    $res['PortOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableClientIPPreservationToa) {
            $res['EnableClientIPPreservationToa'] = $this->enableClientIPPreservationToa;
        }
        if (null !== $this->enableClientIPPreservationProxyProtocol) {
            $res['EnableClientIPPreservationProxyProtocol'] = $this->enableClientIPPreservationProxyProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointGroupConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroupName'])) {
            $model->endpointGroupName = $map['EndpointGroupName'];
        }
        if (isset($map['EndpointGroupDescription'])) {
            $model->endpointGroupDescription = $map['EndpointGroupDescription'];
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['TrafficPercentage'])) {
            $model->trafficPercentage = $map['TrafficPercentage'];
        }
        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }
        if (isset($map['HealthCheckIntervalSeconds'])) {
            $model->healthCheckIntervalSeconds = $map['HealthCheckIntervalSeconds'];
        }
        if (isset($map['HealthCheckPath'])) {
            $model->healthCheckPath = $map['HealthCheckPath'];
        }
        if (isset($map['HealthCheckPort'])) {
            $model->healthCheckPort = $map['HealthCheckPort'];
        }
        if (isset($map['HealthCheckProtocol'])) {
            $model->healthCheckProtocol = $map['HealthCheckProtocol'];
        }
        if (isset($map['ThresholdCount'])) {
            $model->thresholdCount = $map['ThresholdCount'];
        }
        if (isset($map['EndpointConfigurations'])) {
            if (!empty($map['EndpointConfigurations'])) {
                $model->endpointConfigurations = [];
                $n                             = 0;
                foreach ($map['EndpointConfigurations'] as $item) {
                    $model->endpointConfigurations[$n++] = null !== $item ? endpointConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndpointRequestProtocol'])) {
            $model->endpointRequestProtocol = $map['EndpointRequestProtocol'];
        }
        if (isset($map['EndpointGroupType'])) {
            $model->endpointGroupType = $map['EndpointGroupType'];
        }
        if (isset($map['PortOverrides'])) {
            if (!empty($map['PortOverrides'])) {
                $model->portOverrides = [];
                $n                    = 0;
                foreach ($map['PortOverrides'] as $item) {
                    $model->portOverrides[$n++] = null !== $item ? portOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnableClientIPPreservationToa'])) {
            $model->enableClientIPPreservationToa = $map['EnableClientIPPreservationToa'];
        }
        if (isset($map['EnableClientIPPreservationProxyProtocol'])) {
            $model->enableClientIPPreservationProxyProtocol = $map['EnableClientIPPreservationProxyProtocol'];
        }

        return $model;
    }
}
