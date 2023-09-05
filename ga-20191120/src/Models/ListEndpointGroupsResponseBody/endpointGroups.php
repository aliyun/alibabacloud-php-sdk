<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\portOverrides;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\serviceManagedInfos;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\tags;
use AlibabaCloud\Tea\Model;

class endpointGroups extends Model
{
    /**
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @example group1
     *
     * @var string
     */
    public $description;

    /**
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @description The ID of an endpoint group.
     *
     * @example epg-bp16jdc00bhe97sr5****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The mappings between ports.
     *
     * @var string[]
     */
    public $endpointGroupIpList;

    /**
     * @description Indicates whether the health check feature is enabled. Valid values:
     *
     *   **true**: The health check feature is enabled.
     *   **false**: The health check feature is disabled.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @example default
     *
     * @var string
     */
    public $endpointGroupType;

    /**
     * @description The interval at which health checks are performed. Unit: seconds.
     *
     * @var string[]
     */
    public $endpointGroupUnconfirmedIpList;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @var string[]
     */
    public $forwardingRuleIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @example 3
     *
     * @var int
     */
    public $healthCheckIntervalSeconds;

    /**
     * @description The ID of the request.
     *
     * @example /healthcheck
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @example 10
     *
     * @var int
     */
    public $healthCheckPort;

    /**
     * @example tcp
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @example group1
     *
     * @var string
     */
    public $name;

    /**
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @description 托管实例所属的服务方ID。
     *
     * > 仅在**ServiceManaged**参数为**True**时有效。
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description 是否为托管实例。取值：
     *
     * - **true**：是托管资实例。
     *
     * - **false**：不是托管实例。
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description 用户在此托管实例下可执行的动作策略列表。
     *
     * > 仅在**ServiceManaged**参数为**True**时有效。
     * > - 当实例处于托管状态时，用户对实例的操作会受到限制，某些操作行为会被禁止。
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The protocol over which health check requests are sent. Valid values:
     *
     *   **tcp**: TCP
     *   **http**: HTTP
     *   **https**: HTTPS
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 3
     *
     * @var int
     */
    public $thresholdCount;

    /**
     * @example 20
     *
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'acceleratorId'                  => 'AcceleratorId',
        'description'                    => 'Description',
        'endpointConfigurations'         => 'EndpointConfigurations',
        'endpointGroupId'                => 'EndpointGroupId',
        'endpointGroupIpList'            => 'EndpointGroupIpList',
        'endpointGroupRegion'            => 'EndpointGroupRegion',
        'endpointGroupType'              => 'EndpointGroupType',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'endpointRequestProtocol'        => 'EndpointRequestProtocol',
        'forwardingRuleIds'              => 'ForwardingRuleIds',
        'healthCheckEnabled'             => 'HealthCheckEnabled',
        'healthCheckIntervalSeconds'     => 'HealthCheckIntervalSeconds',
        'healthCheckPath'                => 'HealthCheckPath',
        'healthCheckPort'                => 'HealthCheckPort',
        'healthCheckProtocol'            => 'HealthCheckProtocol',
        'listenerId'                     => 'ListenerId',
        'name'                           => 'Name',
        'portOverrides'                  => 'PortOverrides',
        'serviceId'                      => 'ServiceId',
        'serviceManaged'                 => 'ServiceManaged',
        'serviceManagedInfos'            => 'ServiceManagedInfos',
        'state'                          => 'State',
        'tags'                           => 'Tags',
        'thresholdCount'                 => 'ThresholdCount',
        'trafficPercentage'              => 'TrafficPercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupIpList) {
            $res['EndpointGroupIpList'] = $this->endpointGroupIpList;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }
        if (null !== $this->endpointGroupUnconfirmedIpList) {
            $res['EndpointGroupUnconfirmedIpList'] = $this->endpointGroupUnconfirmedIpList;
        }
        if (null !== $this->endpointRequestProtocol) {
            $res['EndpointRequestProtocol'] = $this->endpointRequestProtocol;
        }
        if (null !== $this->forwardingRuleIds) {
            $res['ForwardingRuleIds'] = $this->forwardingRuleIds;
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
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return endpointGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupIpList'])) {
            if (!empty($map['EndpointGroupIpList'])) {
                $model->endpointGroupIpList = $map['EndpointGroupIpList'];
            }
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointGroupType'])) {
            $model->endpointGroupType = $map['EndpointGroupType'];
        }
        if (isset($map['EndpointGroupUnconfirmedIpList'])) {
            if (!empty($map['EndpointGroupUnconfirmedIpList'])) {
                $model->endpointGroupUnconfirmedIpList = $map['EndpointGroupUnconfirmedIpList'];
            }
        }
        if (isset($map['EndpointRequestProtocol'])) {
            $model->endpointRequestProtocol = $map['EndpointRequestProtocol'];
        }
        if (isset($map['ForwardingRuleIds'])) {
            if (!empty($map['ForwardingRuleIds'])) {
                $model->forwardingRuleIds = $map['ForwardingRuleIds'];
            }
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
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
