<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody\portOverrides;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody\serviceManagedInfos;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeEndpointGroupResponseBody extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description Indicates the status of the binding between the Log Service project and the endpoint group. Valid values:
     *
     *   **on**: The Log Service project is bound to the endpoint group.
     *   **off**: No Log Service projects are bound to the endpoint group.
     *   **binding**: The Log Service project is being bound to the endpoint group.
     *   **unbinding**: The Log Service project is being unbound from the endpoint group.
     *
     * @example on
     *
     * @var string
     */
    public $accessLogSwitch;

    /**
     * @description The description of the endpoint group.
     *
     * @example group1
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the access log feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableAccessLog;

    /**
     * @description The configurations of the endpoints in the endpoint group.
     *
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The active endpoint IP addresses of the endpoint group.
     *
     * @var string[]
     */
    public $endpointGroupIpList;

    /**
     * @description The ID of the region where the endpoint group is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description The type of endpoint group. Valid values:
     *
     *   **default**: a default endpoint group
     *   **virtual**: a virtual endpoint group
     *
     * @example default
     *
     * @var string
     */
    public $endpointGroupType;

    /**
     * @description The endpoint group IP addresses to be confirmed. After the GA instance is upgraded, the IP addresses that are added to the endpoint group need to be confirmed.
     *
     * @var string[]
     */
    public $endpointGroupUnconfirmedIpList;

    /**
     * @var string
     */
    public $endpointProtocolVersion;

    /**
     * @description The protocol that is used by the backend service.
     *
     *   **HTTP**
     *   **HTTPS**
     *
     * @example HTTP
     *
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @description The ID of the forwarding rule that is associated with the endpoint group.
     *
     * @var string[]
     */
    public $forwardingRuleIds;

    /**
     * @description Indicates whether the health check feature is enabled. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @description The interval between two consecutive health checks. Unit: seconds.
     *
     * @example 3
     *
     * @var int
     */
    public $healthCheckIntervalSeconds;

    /**
     * @description The path to which health check probes are sent.
     *
     * @example /healthcheck
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description The port that is used for health checks.
     *
     * @example 20
     *
     * @var int
     */
    public $healthCheckPort;

    /**
     * @description The protocol over which health check requests are sent. Valid values:
     *
     *   **tcp**: TCP
     *   **http**: HTTP
     *   **https**: HTTPS
     *
     * @example tcp
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The name of the endpoint group.
     *
     * @example group1
     *
     * @var string
     */
    public $name;

    /**
     * @description The mappings between ports.
     *
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @description The ID of the request.
     *
     * @example 6FEA0CF3-D3B9-43E5-A304-D217037876A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the service that manages the GA instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Indicates whether the GA instance is managed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The actions that users can perform on the managed instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     *
     *   Users can perform only specific actions on a managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The name of the Logstore.
     *
     * @example lsn-01
     *
     * @var string
     */
    public $slsLogStoreName;

    /**
     * @description The name of the Log Service project.
     *
     * @example pn-01
     *
     * @var string
     */
    public $slsProjectName;

    /**
     * @description The region of the Log Service project.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $slsRegion;

    /**
     * @description The status of the endpoint group. Valid values:
     *
     *   **init**: The endpoint group is being initialized.
     *   **active**: The endpoint group is running as expected.
     *   **updating**: The endpoint group is being updated.
     *   **deleting**: The endpoint group is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description Tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The number of consecutive failed health checks that must occur before an endpoint is considered unhealthy.
     *
     * @example 3
     *
     * @var int
     */
    public $thresholdCount;

    /**
     * @description The weight of the endpoint group. If the listener is associated with multiple endpoint groups, this parameter indicates the weight of the current endpoint group.
     *
     * @example 20
     *
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'acceleratorId'                  => 'AcceleratorId',
        'accessLogSwitch'                => 'AccessLogSwitch',
        'description'                    => 'Description',
        'enableAccessLog'                => 'EnableAccessLog',
        'endpointConfigurations'         => 'EndpointConfigurations',
        'endpointGroupId'                => 'EndpointGroupId',
        'endpointGroupIpList'            => 'EndpointGroupIpList',
        'endpointGroupRegion'            => 'EndpointGroupRegion',
        'endpointGroupType'              => 'EndpointGroupType',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'endpointProtocolVersion'        => 'EndpointProtocolVersion',
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
        'requestId'                      => 'RequestId',
        'serviceId'                      => 'ServiceId',
        'serviceManaged'                 => 'ServiceManaged',
        'serviceManagedInfos'            => 'ServiceManagedInfos',
        'slsLogStoreName'                => 'SlsLogStoreName',
        'slsProjectName'                 => 'SlsProjectName',
        'slsRegion'                      => 'SlsRegion',
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
        if (null !== $this->accessLogSwitch) {
            $res['AccessLogSwitch'] = $this->accessLogSwitch;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableAccessLog) {
            $res['EnableAccessLog'] = $this->enableAccessLog;
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
        if (null !== $this->endpointProtocolVersion) {
            $res['EndpointProtocolVersion'] = $this->endpointProtocolVersion;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->slsLogStoreName) {
            $res['SlsLogStoreName'] = $this->slsLogStoreName;
        }
        if (null !== $this->slsProjectName) {
            $res['SlsProjectName'] = $this->slsProjectName;
        }
        if (null !== $this->slsRegion) {
            $res['SlsRegion'] = $this->slsRegion;
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
     * @return DescribeEndpointGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AccessLogSwitch'])) {
            $model->accessLogSwitch = $map['AccessLogSwitch'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableAccessLog'])) {
            $model->enableAccessLog = $map['EnableAccessLog'];
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
        if (isset($map['EndpointProtocolVersion'])) {
            $model->endpointProtocolVersion = $map['EndpointProtocolVersion'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['SlsLogStoreName'])) {
            $model->slsLogStoreName = $map['SlsLogStoreName'];
        }
        if (isset($map['SlsProjectName'])) {
            $model->slsProjectName = $map['SlsProjectName'];
        }
        if (isset($map['SlsRegion'])) {
            $model->slsRegion = $map['SlsRegion'];
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
