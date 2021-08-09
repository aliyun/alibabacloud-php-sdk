<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\portOverrides;
use AlibabaCloud\Tea\Model;

class endpointGroups extends Model
{
    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string[]
     */
    public $endpointGroupIpList;

    /**
     * @var string[]
     */
    public $endpointGroupUnconfirmedIpList;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $healthCheckPath;

    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var int
     */
    public $healthCheckIntervalSeconds;

    /**
     * @var int
     */
    public $trafficPercentage;

    /**
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @var int
     */
    public $thresholdCount;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @var string[]
     */
    public $forwardingRuleIds;

    /**
     * @var string
     */
    public $endpointGroupType;

    /**
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $healthCheckPort;

    /**
     * @var bool
     */
    public $healthCheckEnabled;
    protected $_name = [
        'endpointGroupId'                => 'EndpointGroupId',
        'endpointGroupIpList'            => 'EndpointGroupIpList',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'state'                          => 'State',
        'healthCheckPath'                => 'HealthCheckPath',
        'endpointGroupRegion'            => 'EndpointGroupRegion',
        'healthCheckIntervalSeconds'     => 'HealthCheckIntervalSeconds',
        'trafficPercentage'              => 'TrafficPercentage',
        'healthCheckProtocol'            => 'HealthCheckProtocol',
        'thresholdCount'                 => 'ThresholdCount',
        'listenerId'                     => 'ListenerId',
        'acceleratorId'                  => 'AcceleratorId',
        'endpointConfigurations'         => 'EndpointConfigurations',
        'portOverrides'                  => 'PortOverrides',
        'forwardingRuleIds'              => 'ForwardingRuleIds',
        'endpointGroupType'              => 'EndpointGroupType',
        'endpointRequestProtocol'        => 'EndpointRequestProtocol',
        'description'                    => 'Description',
        'name'                           => 'Name',
        'healthCheckPort'                => 'HealthCheckPort',
        'healthCheckEnabled'             => 'HealthCheckEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupIpList) {
            $res['EndpointGroupIpList'] = $this->endpointGroupIpList;
        }
        if (null !== $this->endpointGroupUnconfirmedIpList) {
            $res['EndpointGroupUnconfirmedIpList'] = $this->endpointGroupUnconfirmedIpList;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->healthCheckPath) {
            $res['HealthCheckPath'] = $this->healthCheckPath;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->healthCheckIntervalSeconds) {
            $res['HealthCheckIntervalSeconds'] = $this->healthCheckIntervalSeconds;
        }
        if (null !== $this->trafficPercentage) {
            $res['TrafficPercentage'] = $this->trafficPercentage;
        }
        if (null !== $this->healthCheckProtocol) {
            $res['HealthCheckProtocol'] = $this->healthCheckProtocol;
        }
        if (null !== $this->thresholdCount) {
            $res['ThresholdCount'] = $this->thresholdCount;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
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
        if (null !== $this->portOverrides) {
            $res['PortOverrides'] = [];
            if (null !== $this->portOverrides && \is_array($this->portOverrides)) {
                $n = 0;
                foreach ($this->portOverrides as $item) {
                    $res['PortOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->forwardingRuleIds) {
            $res['ForwardingRuleIds'] = $this->forwardingRuleIds;
        }
        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }
        if (null !== $this->endpointRequestProtocol) {
            $res['EndpointRequestProtocol'] = $this->endpointRequestProtocol;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->healthCheckPort) {
            $res['HealthCheckPort'] = $this->healthCheckPort;
        }
        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupIpList'])) {
            if (!empty($map['EndpointGroupIpList'])) {
                $model->endpointGroupIpList = $map['EndpointGroupIpList'];
            }
        }
        if (isset($map['EndpointGroupUnconfirmedIpList'])) {
            if (!empty($map['EndpointGroupUnconfirmedIpList'])) {
                $model->endpointGroupUnconfirmedIpList = $map['EndpointGroupUnconfirmedIpList'];
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['HealthCheckPath'])) {
            $model->healthCheckPath = $map['HealthCheckPath'];
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['HealthCheckIntervalSeconds'])) {
            $model->healthCheckIntervalSeconds = $map['HealthCheckIntervalSeconds'];
        }
        if (isset($map['TrafficPercentage'])) {
            $model->trafficPercentage = $map['TrafficPercentage'];
        }
        if (isset($map['HealthCheckProtocol'])) {
            $model->healthCheckProtocol = $map['HealthCheckProtocol'];
        }
        if (isset($map['ThresholdCount'])) {
            $model->thresholdCount = $map['ThresholdCount'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
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
        if (isset($map['PortOverrides'])) {
            if (!empty($map['PortOverrides'])) {
                $model->portOverrides = [];
                $n                    = 0;
                foreach ($map['PortOverrides'] as $item) {
                    $model->portOverrides[$n++] = null !== $item ? portOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ForwardingRuleIds'])) {
            if (!empty($map['ForwardingRuleIds'])) {
                $model->forwardingRuleIds = $map['ForwardingRuleIds'];
            }
        }
        if (isset($map['EndpointGroupType'])) {
            $model->endpointGroupType = $map['EndpointGroupType'];
        }
        if (isset($map['EndpointRequestProtocol'])) {
            $model->endpointRequestProtocol = $map['EndpointRequestProtocol'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HealthCheckPort'])) {
            $model->healthCheckPort = $map['HealthCheckPort'];
        }
        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }

        return $model;
    }
}
