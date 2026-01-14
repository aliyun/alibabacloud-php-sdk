<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest\portOverrides;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest\tag;

class CreateEndpointGroupRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

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
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $thresholdCount;

    /**
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'endpointConfigurations' => 'EndpointConfigurations',
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
        'listenerId' => 'ListenerId',
        'name' => 'Name',
        'portOverrides' => 'PortOverrides',
        'regionId' => 'RegionId',
        'tag' => 'Tag',
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
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

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

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

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

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
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
