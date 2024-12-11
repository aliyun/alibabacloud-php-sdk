<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups;

use AlibabaCloud\Tea\Model;

class healthCheckConfig extends Model
{
    /**
     * @description The HTTP status codes that indicate healthy backend servers.
     *
     * @var string[]
     */
    public $healthCheckCodes;

    /**
     * @description The backend port that is used for health checks. Valid values: **0** to **65535**.
     *
     * A value of **0** indicates that the port of a backend server is used for health checks.
     * @example 80
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description Indicates whether the health check feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @description The domain name that is used for health checks.
     *
     *   **Backend Server Internal IP** (default): Use the internal IP address of backend servers as the health check domain name.
     *
     *   **Custom Domain Name**: Enter a domain name.
     *
     *   The domain name is 1 to 80 characters in length.
     *   The domain name contains lowercase letters, digits, hyphens (-), and periods (.).
     *   The domain name contains at least one period (.) but does not start or end with a period (.).
     *   The rightmost domain label of the domain name contains only letters, and does not contain digits or hyphens (-).
     *   The domain name does not start or end with a hyphen (-).
     *
     * >  This parameter takes effect only if HealthCheckProtocol is set to HTTP, HTTPS, or gRPC.
     * @example www.example.com
     *
     * @var string
     */
    public $healthCheckHost;

    /**
     * @description The HTTP version that is used for health checks.
     *
     * Valid values: **HTTP1.0** and **HTTP1.1**.
     *
     * >  This parameter takes effect only if **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     * @example HTTP1.1
     *
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @description The interval at which health checks are performed. Unit: seconds. Valid values: **1** to **50**.
     *
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The HTTP method that is used for health checks. Valid values:
     *
     *   **GET**: If the length of a response exceeds 8 KB, the response is truncated. However, the health check result is not affected.
     *   **POST**: gRPC health checks use the POST method by default.
     *   **HEAD**: HTTP and HTTPS health checks use the HEAD method by default.
     *
     * >  This parameter takes effect only if **HealthCheckProtocol** is set to **HTTP**, **HTTPS**, or **gRPC**.
     * @example HEAD
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The URL that is used for health checks.
     *
     * >  This parameter takes effect only if **HealthCheckProtocol** is set to **HTTP** or **HTTPS**.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description The protocol that is used for health checks. Valid values:
     *
     *   **HTTP**: HTTP health checks simulate browser behaviors by sending HEAD or GET requests to probe the availability of backend servers.
     *   **HTTPS**: HTTPS health checks simulate browser behaviors by sending HEAD or GET requests to probe the availability of backend servers. HTTPS supports encryption and provides higher security than HTTP.
     *   **TCP**: TCP health checks send TCP SYN packets to a backend server to check whether the port of the backend server is reachable.
     *   **gRPC**: gRPC health checks send POST or GET requests to a backend server to check whether the backend server is healthy.
     *
     * @example HTTP
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description The timeout period of a health check response. If a backend server does not respond within the specified timeout period, the backend server is declared unhealthy. Unit: seconds.
     *
     * @example 3
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status is changed from **fail** to **success**.
     *
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthCheckCodes'       => 'HealthCheckCodes',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckEnabled'     => 'HealthCheckEnabled',
        'healthCheckHost'        => 'HealthCheckHost',
        'healthCheckHttpVersion' => 'HealthCheckHttpVersion',
        'healthCheckInterval'    => 'HealthCheckInterval',
        'healthCheckMethod'      => 'HealthCheckMethod',
        'healthCheckPath'        => 'HealthCheckPath',
        'healthCheckProtocol'    => 'HealthCheckProtocol',
        'healthCheckTimeout'     => 'HealthCheckTimeout',
        'healthyThreshold'       => 'HealthyThreshold',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckCodes) {
            $res['HealthCheckCodes'] = $this->healthCheckCodes;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }
        if (null !== $this->healthCheckHost) {
            $res['HealthCheckHost'] = $this->healthCheckHost;
        }
        if (null !== $this->healthCheckHttpVersion) {
            $res['HealthCheckHttpVersion'] = $this->healthCheckHttpVersion;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->healthCheckPath) {
            $res['HealthCheckPath'] = $this->healthCheckPath;
        }
        if (null !== $this->healthCheckProtocol) {
            $res['HealthCheckProtocol'] = $this->healthCheckProtocol;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheckConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckCodes'])) {
            if (!empty($map['HealthCheckCodes'])) {
                $model->healthCheckCodes = $map['HealthCheckCodes'];
            }
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }
        if (isset($map['HealthCheckHost'])) {
            $model->healthCheckHost = $map['HealthCheckHost'];
        }
        if (isset($map['HealthCheckHttpVersion'])) {
            $model->healthCheckHttpVersion = $map['HealthCheckHttpVersion'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['HealthCheckPath'])) {
            $model->healthCheckPath = $map['HealthCheckPath'];
        }
        if (isset($map['HealthCheckProtocol'])) {
            $model->healthCheckProtocol = $map['HealthCheckProtocol'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
