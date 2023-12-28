<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\stickySessionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\tag;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\uchConfig;
use AlibabaCloud\Tea\Model;

class CreateServerGroupRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
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
     * @description The backend protocol. Valid values:
     *
     *   **HTTP** (default): The server group can be associated with HTTPS, HTTP, and QUIC listeners.
     *   **HTTPS**: The server group can be associated with HTTPS listeners.
     *   **gRPC**: The server group can be associated with HTTPS and QUIC listeners.
     *
     * > If the **ServerGroupType** parameter is set to **Fc**, you can set Protocol only to **HTTP**.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **Wrr** (default): The weighted round-robin algorithm is used. Backend servers that have higher weights receive more requests than those that have lower weights.
     *   **Wlc**: The weighted least connections algorithm is used. Requests are distributed based on the weights and the number of connections to backend servers. If two backend servers have the same weight, the backend server that has fewer connections is expected to receive more requests.
     *   **Sch**: The consistent hashing algorithm is used. Requests from the same source IP address are distributed to the same backend server.
     *
     * > This parameter takes effect when the **ServerGroupType** parameter is set to **Instance** or **Ip**.
     * @example Wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The name of the server group. The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     *
     * @example sg-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @description The type of server group. Valid values:
     *
     *   **Instance** (default): allows you to add servers by specifying **Ecs**, **Eni**, or **Eci**.
     *   **Ip**: allows you to add servers by specifying IP addresses.
     *   **Fc**: allows you to add servers by specifying functions of Function Compute.
     *
     * @example Instance
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @description This parameter is available only if the ALB Ingress controller is used. In this case, set this parameter to the name of the `Kubernetes Service` that is associated with the server group.
     *
     * @example test
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The configuration of session persistence.
     *
     * > This parameter takes effect when the **ServerGroupType** parameter is set to **Instance** or **Ip**.
     * @var stickySessionConfig
     */
    public $stickySessionConfig;

    /**
     * @description The tag.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The configuration of consistent hashing based on URLs.
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

    /**
     * @description The ID of the virtual private cloud (VPC). You can add only backend servers that are deployed in the specified VPC to the server group.
     *
     * > This parameter takes effect when the **ServerGroupType** parameter is set to **Instance** or **Ip**.
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'dryRun'                   => 'DryRun',
        'healthCheckConfig'        => 'HealthCheckConfig',
        'protocol'                 => 'Protocol',
        'resourceGroupId'          => 'ResourceGroupId',
        'scheduler'                => 'Scheduler',
        'serverGroupName'          => 'ServerGroupName',
        'serverGroupType'          => 'ServerGroupType',
        'serviceName'              => 'ServiceName',
        'stickySessionConfig'      => 'StickySessionConfig',
        'tag'                      => 'Tag',
        'uchConfig'                => 'UchConfig',
        'upstreamKeepaliveEnabled' => 'UpstreamKeepaliveEnabled',
        'vpcId'                    => 'VpcId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }
        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->stickySessionConfig) {
            $res['StickySessionConfig'] = null !== $this->stickySessionConfig ? $this->stickySessionConfig->toMap() : null;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uchConfig) {
            $res['UchConfig'] = null !== $this->uchConfig ? $this->uchConfig->toMap() : null;
        }
        if (null !== $this->upstreamKeepaliveEnabled) {
            $res['UpstreamKeepaliveEnabled'] = $this->upstreamKeepaliveEnabled;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }
        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StickySessionConfig'])) {
            $model->stickySessionConfig = stickySessionConfig::fromMap($map['StickySessionConfig']);
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UchConfig'])) {
            $model->uchConfig = uchConfig::fromMap($map['UchConfig']);
        }
        if (isset($map['UpstreamKeepaliveEnabled'])) {
            $model->upstreamKeepaliveEnabled = $map['UpstreamKeepaliveEnabled'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
