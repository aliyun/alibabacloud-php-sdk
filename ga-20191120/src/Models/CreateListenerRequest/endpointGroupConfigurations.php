<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations\portOverrides;
use AlibabaCloud\Tea\Model;

class endpointGroupConfigurations extends Model
{
    /**
     * @description Specifies whether to use the proxy protocol to preserve client IP addresses. Valid values:
     *
     *   **true**: uses the proxy protocol to preserve client IP addresses.
     *   **false** (default): does not use the proxy protocol to preserve client IP addresses.
     *
     * You can set this parameter for up to 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservationProxyProtocol;

    /**
     * @description Specifies whether to obtain and preserve the IP addresses of clients that access the endpoint by using the TCP Option Address (TOA) module. Valid values:
     *
     *   **true**: preserves client IP addresses by using the TOA module.
     *   **false** (default): does not preserve client IP addresses by using the TOA module.
     *
     * You can set this parameter for up to 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservationToa;

    /**
     * @description The endpoint that is associated with the intelligent routing listener.
     *
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @description The description of the endpoint group that is associated with the intelligent routing listener.
     *
     * You can enter the descriptions of up to 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example test
     *
     * @var string
     */
    public $endpointGroupDescription;

    /**
     * @description The name of the endpoint group that is associated with the intelligent routing listener.
     *
     * You can enter the names of up to 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example test
     *
     * @var string
     */
    public $endpointGroupName;

    /**
     * @description The region ID of the endpoint group that is associated with the intelligent routing listener.
     *
     * You can enter the region IDs of up to 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description The endpoint group type of the intelligent routing listener. Valid values:
     *
     *   **default** (default): a default endpoint group.
     *   **virtual**: a virtual endpoint group.
     *
     * >
     *
     *   You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     *
     *   Only HTTP intelligent routing listeners and HTTPS intelligent routing listeners support virtual endpoint groups.
     *
     * @example default
     *
     * @var string
     */
    public $endpointGroupType;

    /**
     * @description The protocol used by the endpoint that is associated with the intelligent routing listener. Valid values:
     *
     *   **HTTP** (default): HTTP
     *   **HTTPS**: HTTPS
     *
     * >
     *
     *   You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     *
     *   You can set this parameter only for HTTP intelligent routing listeners and HTTPS intelligent routing listeners.
     *   For an HTTP listener, the protocol must be **HTTP**.
     *
     * @example HTTP
     *
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @description Specifies whether to enable health checks for the endpoint group that is associated with the intelligent routing listener. Valid values:
     *
     *   **true**: enables the health check feature.
     *   **false** (default): disables the health check feature.
     *
     * You can enable the health check feature for up to 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example false
     *
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @description The interval at which you want to perform health checks. Unit: seconds.
     *
     * You can specify up to 10 health check intervals.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example 3
     *
     * @var int
     */
    public $healthCheckIntervalSeconds;

    /**
     * @description The path to which health check requests are sent.
     *
     * You can specify up to 10 health check paths.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example /healthcheck
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description The port that is used for health checks. Valid values: **1** to **65535**.
     *
     * You can specify up to 10 ports for health checks.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
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
     * You can specify up to 10 health check protocols.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example tcp
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description The mappings between ports.
     *
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @description The number of consecutive health check failures that must occur before a healthy endpoint group is considered unhealthy, or the number of consecutive health check successes that must occur before an unhealthy endpoint group is considered healthy. Valid values: **2** to **10**. Default value: **3**.
     *
     * You can specify the number of consecutive health check successes or failures for at most 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example 3
     *
     * @var int
     */
    public $thresholdCount;

    /**
     * @description The traffic distribution ratio. If an intelligent routing listener is associated with multiple endpoint groups, you can use this parameter to specify the ratio of traffic that you want to distribute to each endpoint group.
     *
     * Valid values: **1** to **100**. Default value: **100**.
     *
     * You can specify the traffic distribution ratios for up to 10 endpoint groups.
     *
     * > You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     * @example 100
     *
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'enableClientIPPreservationProxyProtocol' => 'EnableClientIPPreservationProxyProtocol',
        'enableClientIPPreservationToa'           => 'EnableClientIPPreservationToa',
        'endpointConfigurations'                  => 'EndpointConfigurations',
        'endpointGroupDescription'                => 'EndpointGroupDescription',
        'endpointGroupName'                       => 'EndpointGroupName',
        'endpointGroupRegion'                     => 'EndpointGroupRegion',
        'endpointGroupType'                       => 'EndpointGroupType',
        'endpointRequestProtocol'                 => 'EndpointRequestProtocol',
        'healthCheckEnabled'                      => 'HealthCheckEnabled',
        'healthCheckIntervalSeconds'              => 'HealthCheckIntervalSeconds',
        'healthCheckPath'                         => 'HealthCheckPath',
        'healthCheckPort'                         => 'HealthCheckPort',
        'healthCheckProtocol'                     => 'HealthCheckProtocol',
        'portOverrides'                           => 'PortOverrides',
        'thresholdCount'                          => 'ThresholdCount',
        'trafficPercentage'                       => 'TrafficPercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableClientIPPreservationProxyProtocol) {
            $res['EnableClientIPPreservationProxyProtocol'] = $this->enableClientIPPreservationProxyProtocol;
        }
        if (null !== $this->enableClientIPPreservationToa) {
            $res['EnableClientIPPreservationToa'] = $this->enableClientIPPreservationToa;
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
        if (null !== $this->endpointRequestProtocol) {
            $res['EndpointRequestProtocol'] = $this->endpointRequestProtocol;
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
        if (null !== $this->portOverrides) {
            $res['PortOverrides'] = [];
            if (null !== $this->portOverrides && \is_array($this->portOverrides)) {
                $n = 0;
                foreach ($this->portOverrides as $item) {
                    $res['PortOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return endpointGroupConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableClientIPPreservationProxyProtocol'])) {
            $model->enableClientIPPreservationProxyProtocol = $map['EnableClientIPPreservationProxyProtocol'];
        }
        if (isset($map['EnableClientIPPreservationToa'])) {
            $model->enableClientIPPreservationToa = $map['EnableClientIPPreservationToa'];
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
        if (isset($map['EndpointRequestProtocol'])) {
            $model->endpointRequestProtocol = $map['EndpointRequestProtocol'];
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
        if (isset($map['PortOverrides'])) {
            if (!empty($map['PortOverrides'])) {
                $model->portOverrides = [];
                $n                    = 0;
                foreach ($map['PortOverrides'] as $item) {
                    $model->portOverrides[$n++] = null !== $item ? portOverrides::fromMap($item) : $item;
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
