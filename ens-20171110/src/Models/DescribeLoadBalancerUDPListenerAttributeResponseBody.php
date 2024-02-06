<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerUDPListenerAttributeResponseBody extends Model
{
    /**
     * @description The backend port that is used by the ELB instance. Valid values: **1** to **65535**.
     *
     * @example 8080
     *
     * @var int
     */
    public $backendServerPort;

    /**
     * @description The maximum bandwidth of the elastic IP address (EIP).
     *
     *   Default value: 5.
     *   Valid values: **5** to **10000**.
     *   Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The description of the listener.
     *
     * @example example
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether EIP pass-through is enabled. Valid values:
     *
     *   **on**
     *   **off** (default)
     *
     * @example on
     *
     * @var string
     */
    public $eipTransmit;

    /**
     * @description Specifies whether to enable the health check feature. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description The port that is used for health checks. Valid values: **1** to **65535**. If you leave this parameter empty, the port specified by BackendServerPort is used for health checks.
     *
     * @example 8000
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The timeout period of a health check response. If a backend server does not respond within the specified timeout period, the server fails to pass the health check.
     *
     *   Default value: 5.
     *   Valid values: **1** to **300**.
     *   Unit: seconds.
     *
     * >
     *
     *   This parameter takes effect only if you set HealthCheck to on.
     *
     *   If the value of the HealthCheckConnectTimeout parameter is smaller than that of the HealthCheckInterval parameter, the timeout period specified by the HealthCheckConnectTimeout parameter becomes invalid and the value of the HealthCheckInterval parameter is used as the timeout period.
     *
     * @example 100
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description The response string for UDP listener health checks. The string can be up to 64 characters in length and can contain only letters and digits.
     *
     * @example ok
     *
     * @var string
     */
    public $healthCheckExp;

    /**
     * @description The interval at which health checks are performed. Valid values: **1** to **50**. Unit: seconds.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The request string for UDP listener health checks. The string can be up to 64 characters in length and can contain only letters and digits.
     *
     * @example hello
     *
     * @var string
     */
    public $healthCheckReq;

    /**
     * @description The number of consecutive successful health checks that must occur before an unhealthy and inaccessible backend server is declared healthy and accessible. Valid values: **2** to **10**.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The frontend port that is used by the ELB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the request.
     *
     * @example 5D7597CF-1630-54EC-A945-624A33F2E7E8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The routing algorithm. Valid values:
     *
     *   **wrr**: Backend servers with higher weights receive more requests than those with lower weights.
     *   **wlc**: Requests are distributed based on the weight and load of each backend server. The load refers to the number of connections to a backend server. If two backend servers have the same weight, the backend server that has fewer connections receives more requests.
     *   **rr**: Requests are distributed to backend servers in sequence.
     *   **sch**: consistent hashing that is based on source IP addresses. Requests from the same source IP address are distributed to the same backend server.
     *   **qch**: consistent hashing that is based on QUIC connection IDs. Requests that contain the same QUIC connection ID are distributed to the same backend server.
     *   **iqch**: consistent hashing that is based on specific three bytes of the iQUIC CIDs. Requests whose second to fourth bytes are the same are distributed to the same backend server.
     *
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **Running**
     *   **Stopped**
     *   **Starting**
     *   **Configuring**
     *   **Stopping**
     *
     * @example Stopped
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of consecutive failed health checks that must occur before a healthy and accessible backend server is declared unhealthy and inaccessible. Valid values: **2** to **10**.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'backendServerPort'         => 'BackendServerPort',
        'bandwidth'                 => 'Bandwidth',
        'description'               => 'Description',
        'eipTransmit'               => 'EipTransmit',
        'healthCheck'               => 'HealthCheck',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckExp'            => 'HealthCheckExp',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckReq'            => 'HealthCheckReq',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'requestId'                 => 'RequestId',
        'scheduler'                 => 'Scheduler',
        'status'                    => 'Status',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipTransmit) {
            $res['EipTransmit'] = $this->eipTransmit;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckReq) {
            $res['HealthCheckReq'] = $this->healthCheckReq;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipTransmit'])) {
            $model->eipTransmit = $map['EipTransmit'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckReq'])) {
            $model->healthCheckReq = $map['HealthCheckReq'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
