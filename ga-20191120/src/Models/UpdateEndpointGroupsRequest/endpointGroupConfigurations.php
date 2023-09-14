<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest\endpointGroupConfigurations\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest\endpointGroupConfigurations\portOverrides;
use AlibabaCloud\Tea\Model;

class endpointGroupConfigurations extends Model
{
    /**
     * @description Specifies whether to use the proxy protocol to preserve client IP addresses. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservationProxyProtocol;

    /**
     * @description Specifies whether to preserve client IP addresses by using the TCP Option Address (TOA) module. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservationToa;

    /**
     * @description The configurations of endpoints in the endpoint group.
     *
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @description The description of the endpoint group.
     *
     * The description can be up to 256 characters in length and cannot contain `http://` or `https://`.
     * @example group1
     *
     * @var string
     */
    public $endpointGroupDescription;

    /**
     * @description The endpoint ID.
     *
     * @example ep-bp1d2utp8qqe2a44t****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The name of the endpoint group.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example group1
     *
     * @var string
     */
    public $endpointGroupName;

    /**
     * @description The protocol that is used by the backend service. Valid values:
     *
     *   **HTTP**
     *   **HTTPS**
     *
     * >
     *
     *   You can set this parameter only when the listener that is associated with the endpoint group uses the HTTP or HTTPS protocol.
     *
     *   For an HTTP listener, the backend service protocol must be HTTP.
     *
     * @example HTTP
     *
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @description Specifies whether to enable the health check feature. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @description The interval at which health checks are performed. Unit: seconds. Valid values: **1** to **50**.
     *
     * @example 3
     *
     * @var int
     */
    public $healthCheckIntervalSeconds;

    /**
     * @description The path to which health check requests are sent.
     *
     * @example /healthcheck
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description The port that is used for health checks.
     *
     * Valid values: **1** to **65535**.
     * @example 20
     *
     * @var int
     */
    public $healthCheckPort;

    /**
     * @description The protocol over which health check requests are sent. Valid values:
     *
     *   **tcp:** TCP
     *   **http:** HTTP
     *   **https:** HTTPS
     *
     * @example tcp
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description The port mapping.
     *
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @description The number of consecutive health check failures that must occur before a healthy endpoint group is considered unhealthy, or the number of consecutive health check successes that must occur before an unhealthy endpoint group is considered healthy.
     *
     * Valid values: **2** to **10**.
     * @example 3
     *
     * @var int
     */
    public $thresholdCount;

    /**
     * @description The traffic ratio for the endpoint group when the specified listener is associated with multiple endpoint groups.
     *
     * Valid values: **1** to **100**.
     * @example 20
     *
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'enableClientIPPreservationProxyProtocol' => 'EnableClientIPPreservationProxyProtocol',
        'enableClientIPPreservationToa'           => 'EnableClientIPPreservationToa',
        'endpointConfigurations'                  => 'EndpointConfigurations',
        'endpointGroupDescription'                => 'EndpointGroupDescription',
        'endpointGroupId'                         => 'EndpointGroupId',
        'endpointGroupName'                       => 'EndpointGroupName',
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
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupName) {
            $res['EndpointGroupName'] = $this->endpointGroupName;
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
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupName'])) {
            $model->endpointGroupName = $map['EndpointGroupName'];
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
