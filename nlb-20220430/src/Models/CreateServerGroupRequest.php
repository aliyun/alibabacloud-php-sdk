<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateServerGroupRequest\healthCheckConfig;
use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateServerGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateServerGroupRequest extends Model
{
    /**
     * @description The protocol version. Valid values:
     *
     *   **ipv4** (default): IPv4
     *   **DualStack**: dual stack
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description Specifies whether to enable all-port forwarding. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $anyPortEnabled;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable connection draining. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $connectionDrainEnabled;

    /**
     * @description The timeout period of connection draining. Unit: seconds. Valid values: **10** to **900**.
     *
     * @example 10
     *
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @description Specifies whether to perform a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The configurations of the health check feature.
     *
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @description Specifies whether to enable client IP preservation. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $preserveClientIpEnabled;

    /**
     * @description The protocol used to forward requests to the backend servers. Valid values:
     *
     *   **TCP** (default)
     *   **UDP**
     *   **TCPSSL**
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The region ID of the NLB instance.
     *
     * You can call the [DescribeRegions](~~443657~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the server group belongs.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **Wrr:** The weighted round-robin algorithm is used. Backend servers with higher weights receive more requests than backend servers with lower weights. This is the default value.
     *   **rr:** The round-robin algorithm is used. Requests are forwarded to backend servers in sequence.
     *   **sch:** Source IP hashing is used. Requests from the same source IP address are forwarded to the same backend server.
     *   **tch:** Four-element hashing is used. It specifies consistent hashing that is based on four factors: source IP address, destination IP address, source port, and destination port. Requests that contain the same information based on the four factors are forwarded to the same backend server.
     *   **qch**: QUIC ID hashing. Requests that contain the same QUIC ID are forwarded to the same backend server.
     *
     * @example Wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The name of the server group.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example NLB_ServerGroup
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @description The type of server group. Valid values:
     *
     *   **Instance**: allows you to add servers of the **Ecs**, **Ens**, or **Eci** type. This is the default value.
     *   **Ip**: allows you to add servers by specifying IP addresses.
     *
     * @example Instance
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the server group belongs.
     *
     * > If **ServerGroupType** is set to **Instance**, only servers in the specified VPC can be added to the server group.
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressIPVersion'        => 'AddressIPVersion',
        'anyPortEnabled'          => 'AnyPortEnabled',
        'clientToken'             => 'ClientToken',
        'connectionDrainEnabled'  => 'ConnectionDrainEnabled',
        'connectionDrainTimeout'  => 'ConnectionDrainTimeout',
        'dryRun'                  => 'DryRun',
        'healthCheckConfig'       => 'HealthCheckConfig',
        'preserveClientIpEnabled' => 'PreserveClientIpEnabled',
        'protocol'                => 'Protocol',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'scheduler'               => 'Scheduler',
        'serverGroupName'         => 'ServerGroupName',
        'serverGroupType'         => 'ServerGroupType',
        'tag'                     => 'Tag',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->anyPortEnabled) {
            $res['AnyPortEnabled'] = $this->anyPortEnabled;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionDrainEnabled) {
            $res['ConnectionDrainEnabled'] = $this->connectionDrainEnabled;
        }
        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->preserveClientIpEnabled) {
            $res['PreserveClientIpEnabled'] = $this->preserveClientIpEnabled;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['AnyPortEnabled'])) {
            $model->anyPortEnabled = $map['AnyPortEnabled'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConnectionDrainEnabled'])) {
            $model->connectionDrainEnabled = $map['ConnectionDrainEnabled'];
        }
        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['PreserveClientIpEnabled'])) {
            $model->preserveClientIpEnabled = $map['PreserveClientIpEnabled'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
