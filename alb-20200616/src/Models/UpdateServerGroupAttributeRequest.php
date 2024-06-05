<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\connectionDrainConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\slowStartConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\stickySessionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\uchConfig;
use AlibabaCloud\Tea\Model;

class UpdateServerGroupAttributeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * > If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: checks the request without performing the operation. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a `2xx` HTTP status code is returned and the operation is performed.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The configuration of health checks.
     *
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **Wrr**: the weighted round robin algorithm. Backend servers that have higher weights receive more requests than those that have lower weights.
     *   **Wlc**: the weighted least connections algorithm. Requests are distributed based on the weights and the number of connections to backend servers. If two backend servers have the same weight, the backend server that has fewer connections is expected to receive more requests.
     *   **Sch**: the consistent hashing algorithm. Requests from the same source IP address are distributed to the same backend server.
     *
     * @example Wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The server group ID.
     *
     * This parameter is required.
     * @example sgp-atstuj3rtop****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The server group name.
     *
     * The name must be 2 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The name must start with a letter.
     * @example test
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @description This parameter is available only if the ALB Ingress controller is used. In this case, set this parameter to the name of the `Kubernetes Service` that is associated with the server group.
     *
     * @example test2
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var slowStartConfig
     */
    public $slowStartConfig;

    /**
     * @description The configuration of session persistence.
     *
     * @var stickySessionConfig
     */
    public $stickySessionConfig;

    /**
     * @description The setting of consistent hashing based on URLs.
     *
     * @var uchConfig
     */
    public $uchConfig;

    /**
     * @description Specifies whether to enable persistent TCP connections.
     *
     * @var bool
     */
    public $upstreamKeepaliveEnabled;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'connectionDrainConfig'    => 'ConnectionDrainConfig',
        'dryRun'                   => 'DryRun',
        'healthCheckConfig'        => 'HealthCheckConfig',
        'scheduler'                => 'Scheduler',
        'serverGroupId'            => 'ServerGroupId',
        'serverGroupName'          => 'ServerGroupName',
        'serviceName'              => 'ServiceName',
        'slowStartConfig'          => 'SlowStartConfig',
        'stickySessionConfig'      => 'StickySessionConfig',
        'uchConfig'                => 'UchConfig',
        'upstreamKeepaliveEnabled' => 'UpstreamKeepaliveEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toMap() : null;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->slowStartConfig) {
            $res['SlowStartConfig'] = null !== $this->slowStartConfig ? $this->slowStartConfig->toMap() : null;
        }
        if (null !== $this->stickySessionConfig) {
            $res['StickySessionConfig'] = null !== $this->stickySessionConfig ? $this->stickySessionConfig->toMap() : null;
        }
        if (null !== $this->uchConfig) {
            $res['UchConfig'] = null !== $this->uchConfig ? $this->uchConfig->toMap() : null;
        }
        if (null !== $this->upstreamKeepaliveEnabled) {
            $res['UpstreamKeepaliveEnabled'] = $this->upstreamKeepaliveEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServerGroupAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConnectionDrainConfig'])) {
            $model->connectionDrainConfig = connectionDrainConfig::fromMap($map['ConnectionDrainConfig']);
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SlowStartConfig'])) {
            $model->slowStartConfig = slowStartConfig::fromMap($map['SlowStartConfig']);
        }
        if (isset($map['StickySessionConfig'])) {
            $model->stickySessionConfig = stickySessionConfig::fromMap($map['StickySessionConfig']);
        }
        if (isset($map['UchConfig'])) {
            $model->uchConfig = uchConfig::fromMap($map['UchConfig']);
        }
        if (isset($map['UpstreamKeepaliveEnabled'])) {
            $model->upstreamKeepaliveEnabled = $map['UpstreamKeepaliveEnabled'];
        }

        return $model;
    }
}
