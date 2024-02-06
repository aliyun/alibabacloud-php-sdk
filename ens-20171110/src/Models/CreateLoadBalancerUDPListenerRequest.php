<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerUDPListenerRequest extends Model
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
     * @description The description of the listener. The description must be **1** to **80** characters in length.
     *
     * >  The value cannot start with `http://` or `https://`.
     * @example example
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable elastic IP address (EIP) pass-through. Valid values:
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
     * @description The port that is used for health checks. Valid values: **1** to **65535**. If you leave this parameter empty, the port specified by BackendServerPort is used for health checks.
     *
     * @example 8080
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
     * >  If the value that you specified for HealthCheckConnectTimeout is smaller than the value of HealthCheckInterval, HealthCheckConnectTimeout becomes invalid and the timeout period that you specified for HealthCheckInterval is used.
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
     * @description The interval at which health checks are performed. Valid values: **1** to **50**. Default value: **2**. Unit: seconds.
     *
     * @example 3
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
     * @description The number of consecutive successful health checks that must occur before an unhealthy and inaccessible backend server is declared healthy and accessible. Valid values: **2** to **10**. Default value: **3**.
     *
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The frontend port that is used by the ELB instance. Valid values: **1** to **65535**.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the Edge Load Balancer (ELB) instance.
     *
     * @example lb-5q73cv04zeyh43lh74lp4****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The routing algorithm. Valid values:
     *
     *   **wrr** (default): Backend servers with higher weights receive more requests than backend servers with lower weights.
     *   **wlc**: Requests are distributed based on the weight and load of each backend server. The load refers to the number of connections on a backend server. If two backend servers have the same weight, the backend server that has fewer connections receives more requests.
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
     * @description The number of consecutive failed health checks that must occur before a healthy and accessible backend server is declared unhealthy and inaccessible. Valid values: **2** to **10**. Default value: **3**.
     *
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'backendServerPort'         => 'BackendServerPort',
        'description'               => 'Description',
        'eipTransmit'               => 'EipTransmit',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckExp'            => 'HealthCheckExp',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckReq'            => 'HealthCheckReq',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'loadBalancerId'            => 'LoadBalancerId',
        'scheduler'                 => 'Scheduler',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipTransmit) {
            $res['EipTransmit'] = $this->eipTransmit;
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
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerUDPListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipTransmit'])) {
            $model->eipTransmit = $map['EipTransmit'];
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
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
