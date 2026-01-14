<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations\portOverrides;

class endpointGroupConfigurations extends Model
{
    /**
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @var string
     */
    public $endpointGroupDescription;

    /**
     * @var string
     */
    public $endpointGroupName;

    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var string
     */
    public $endpointGroupType;

    /**
     * @var string
     */
    public $endpointIpVersion;

    /**
     * @var string
     */
    public $endpointProtocolVersion;

    /**
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @var string
     */
    public $healthCheckHost;

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
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @var int
     */
    public $thresholdCount;

    /**
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'endpointConfigurations' => 'EndpointConfigurations',
        'endpointGroupDescription' => 'EndpointGroupDescription',
        'endpointGroupName' => 'EndpointGroupName',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'endpointGroupType' => 'EndpointGroupType',
        'endpointIpVersion' => 'EndpointIpVersion',
        'endpointProtocolVersion' => 'EndpointProtocolVersion',
        'endpointRequestProtocol' => 'EndpointRequestProtocol',
        'healthCheckEnabled' => 'HealthCheckEnabled',
        'healthCheckHost' => 'HealthCheckHost',
        'healthCheckIntervalSeconds' => 'HealthCheckIntervalSeconds',
        'healthCheckPath' => 'HealthCheckPath',
        'healthCheckPort' => 'HealthCheckPort',
        'healthCheckProtocol' => 'HealthCheckProtocol',
        'portOverrides' => 'PortOverrides',
        'thresholdCount' => 'ThresholdCount',
        'trafficPercentage' => 'TrafficPercentage',
    ];

    public function validate()
    {
        if (\is_array($this->endpointConfigurations)) {
            Model::validateArray($this->endpointConfigurations);
        }
        if (\is_array($this->portOverrides)) {
            Model::validateArray($this->portOverrides);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointConfigurations) {
            if (\is_array($this->endpointConfigurations)) {
                $res['EndpointConfigurations'] = [];
                $n1 = 0;
                foreach ($this->endpointConfigurations as $item1) {
                    $res['EndpointConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointGroupDescription) {
            $res['EndpointGroupDescription'] = $this->endpointGroupDescription;
        }

        if (null !== $this->endpointGroupName) {
            $res['EndpointGroupName'] = $this->endpointGroupName;
        }

        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }

        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }

        if (null !== $this->endpointIpVersion) {
            $res['EndpointIpVersion'] = $this->endpointIpVersion;
        }

        if (null !== $this->endpointProtocolVersion) {
            $res['EndpointProtocolVersion'] = $this->endpointProtocolVersion;
        }

        if (null !== $this->endpointRequestProtocol) {
            $res['EndpointRequestProtocol'] = $this->endpointRequestProtocol;
        }

        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }

        if (null !== $this->healthCheckHost) {
            $res['HealthCheckHost'] = $this->healthCheckHost;
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

        if (null !== $this->portOverrides) {
            if (\is_array($this->portOverrides)) {
                $res['PortOverrides'] = [];
                $n1 = 0;
                foreach ($this->portOverrides as $item1) {
                    $res['PortOverrides'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thresholdCount) {
            $res['ThresholdCount'] = $this->thresholdCount;
        }

        if (null !== $this->trafficPercentage) {
            $res['TrafficPercentage'] = $this->trafficPercentage;
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
        if (isset($map['EndpointConfigurations'])) {
            if (!empty($map['EndpointConfigurations'])) {
                $model->endpointConfigurations = [];
                $n1 = 0;
                foreach ($map['EndpointConfigurations'] as $item1) {
                    $model->endpointConfigurations[$n1] = endpointConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointGroupDescription'])) {
            $model->endpointGroupDescription = $map['EndpointGroupDescription'];
        }

        if (isset($map['EndpointGroupName'])) {
            $model->endpointGroupName = $map['EndpointGroupName'];
        }

        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }

        if (isset($map['EndpointGroupType'])) {
            $model->endpointGroupType = $map['EndpointGroupType'];
        }

        if (isset($map['EndpointIpVersion'])) {
            $model->endpointIpVersion = $map['EndpointIpVersion'];
        }

        if (isset($map['EndpointProtocolVersion'])) {
            $model->endpointProtocolVersion = $map['EndpointProtocolVersion'];
        }

        if (isset($map['EndpointRequestProtocol'])) {
            $model->endpointRequestProtocol = $map['EndpointRequestProtocol'];
        }

        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }

        if (isset($map['HealthCheckHost'])) {
            $model->healthCheckHost = $map['HealthCheckHost'];
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

        if (isset($map['PortOverrides'])) {
            if (!empty($map['PortOverrides'])) {
                $model->portOverrides = [];
                $n1 = 0;
                foreach ($map['PortOverrides'] as $item1) {
                    $model->portOverrides[$n1] = portOverrides::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ThresholdCount'])) {
            $model->thresholdCount = $map['ThresholdCount'];
        }

        if (isset($map['TrafficPercentage'])) {
            $model->trafficPercentage = $map['TrafficPercentage'];
        }

        return $model;
    }
}
