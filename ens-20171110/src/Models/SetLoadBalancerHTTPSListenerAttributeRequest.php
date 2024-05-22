<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SetLoadBalancerHTTPSListenerAttributeRequest extends Model
{
    /**
     * @description The description of the listener. The description must be **1** to **80** characters in length.
     *
     * >  The value cannot start with `http://` or `https://`.
     * @example 监听说明
     *
     * @var string
     */
    public $description;

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
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example 7001
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that you want to use for health checks.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example www.example.com
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code for a successful health check. Valid values:
     *
     *   **http_2xx** (default)
     *   **http_3xx**.
     *   **http_4xx**
     *   **http_5xx**
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example http_2xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval at which health checks are performed. Valid values: **1** to **50**. Unit: seconds.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example 2
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The health check method used in HTTP health checks. Valid values:
     *
     *   **head** (default): requests the head of the page.
     *   **get**: requests the specified part of the page and returns the entity body.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example get
     *
     * @var string
     */
    public $healthCheckMethod;

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
     *   If the value of the HealthCheckTimeout parameter is smaller than the value of the HealthCheckInterval parameter, the timeout period specified by the HealthCheckTimeout parameter becomes invalid and the value of the HealthCheckInterval parameter is used as the timeout period.
     *
     * @example 9
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The Uniform Resource Identifier (URI) that you want to use for health checks. The URI must be **1** to **80** characters in length.
     *
     * >
     *
     *   The URL must start with a forward slash (`/`) and contain characters other than forward slashes (`/`).
     *
     *   This parameter takes effect only if you set HealthCheck to on.
     *
     * @example /checkpreload.htm
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description The number of consecutive successful health checks that must occur before an unhealthy and inaccessible backend server is declared healthy and accessible. Valid values: **2** to **10**.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example 3
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The timeout period for idle connections. Default value: 15. Valid values: **1** to **60**. Unit: seconds.
     *
     * >  If no request is received within the specified timeout period, ELB closes the connection. When another request is received, ELB establishes a new connection.
     * @example 15
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The frontend port that is used by the ELB instance. Valid values: **1** to **65535**.
     *
     * This parameter is required.
     * @example 10002
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the Edge Load Balancer (ELB) instance.
     *
     * This parameter is required.
     * @example lb-5snthcyu1x10g7tywj7iu****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The timeout period of requests. Default value: 60. Valid values: **1** to **180**. Unit: seconds.
     *
     * >  If no response is received from the backend server within the specified timeout period, ELB returns an HTTP 504 error code to the client.
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

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
     * @description The ID of the server certificate.
     *
     * @example 6027667
     *
     * @var string
     */
    public $serverCertificateId;

    /**
     * @description The number of consecutive failed health checks that must occur before a healthy and accessible backend server is declared unhealthy and inaccessible. Valid values: **2** to **10**.
     *
     * >  This parameter takes effect only if you set HealthCheck to on.
     * @example 3
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'description'            => 'Description',
        'healthCheck'            => 'HealthCheck',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckDomain'      => 'HealthCheckDomain',
        'healthCheckHttpCode'    => 'HealthCheckHttpCode',
        'healthCheckInterval'    => 'HealthCheckInterval',
        'healthCheckMethod'      => 'HealthCheckMethod',
        'healthCheckTimeout'     => 'HealthCheckTimeout',
        'healthCheckURI'         => 'HealthCheckURI',
        'healthyThreshold'       => 'HealthyThreshold',
        'idleTimeout'            => 'IdleTimeout',
        'listenerPort'           => 'ListenerPort',
        'loadBalancerId'         => 'LoadBalancerId',
        'requestTimeout'         => 'RequestTimeout',
        'scheduler'              => 'Scheduler',
        'serverCertificateId'    => 'ServerCertificateId',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLoadBalancerHTTPSListenerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
