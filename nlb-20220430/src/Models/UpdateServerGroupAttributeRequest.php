<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupAttributeRequest\healthCheckConfig;
use AlibabaCloud\Tea\Model;

class UpdateServerGroupAttributeRequest extends Model
{
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
     *   **false**
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
     * @example false
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
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $preserveClientIpEnabled;

    /**
     * @description The region ID of the NLB instance.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/443657.html) operation to obtain the region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The routing algorithm. Valid values:
     *
     *   **Wrr**: Backend servers with higher weights receive more requests than backend servers with lower weights.
     *   **rr**: Requests are forwarded to backend servers in sequence.
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
     * @description The server group ID.
     *
     * This parameter is required.
     * @example sgp-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The new name of the server group.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The name must start with a letter.
     * @example NLB_ServerGroup1
     *
     * @var string
     */
    public $serverGroupName;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'connectionDrainEnabled'  => 'ConnectionDrainEnabled',
        'connectionDrainTimeout'  => 'ConnectionDrainTimeout',
        'dryRun'                  => 'DryRun',
        'healthCheckConfig'       => 'HealthCheckConfig',
        'preserveClientIpEnabled' => 'PreserveClientIpEnabled',
        'regionId'                => 'RegionId',
        'scheduler'               => 'Scheduler',
        'serverGroupId'           => 'ServerGroupId',
        'serverGroupName'         => 'ServerGroupName',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
