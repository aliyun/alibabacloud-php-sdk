<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest;

use AlibabaCloud\Tea\Model;

class healthCheckConfig extends Model
{
    /**
     * @description The HTTP status codes that are used to determine whether the backend server passes the health check.
     *
     * @var string[]
     */
    public $healthCheckCodes;

    /**
     * @description The port that you want to use for health checks on backend servers.
     *
     * Valid values: **0** to **65535**.
     *
     * Default value: **0**. If you set the value to 0, the port of a backend server is used for health checks.
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
     * > If the **ServerGroupType** parameter is set to **Instance** or **Ip**, the health check feature is enabled by default. If the **ServerGroupType** parameter is set to **Fc**, the health check feature is disabled by default.
     * @example true
     *
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @description The domain name that is used for health checks. The domain name must meet the following requirements:
     *
     *   The domain name must be 1 to 80 characters in length.
     *   The domain name can contain lowercase letters, digits, hyphens (-), and periods (.).
     *   It must contain at least one period (.) but cannot start or end with a period (.).
     *   The rightmost domain label of the domain name can contain only letters, and cannot contain digits or hyphens (-).
     *   The domain name cannot start or end with a hyphen (-).
     *
     * > This parameter takes effect only when the **HealthCheckProtocol** parameter is set to **HTTP**.
     * @example www.example.com
     *
     * @var string
     */
    public $healthCheckHost;

    /**
     * @description The HTTP version. Valid values: **HTTP1.0** and **HTTP1.1**. Default value: HTTP1.1.
     *
     * > This parameter takes effect only when the **HealthCheckProtocol** parameter is set to **HTTP**.
     * @example HTTP1.1
     *
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @description The interval at which health checks are performed. Unit: seconds.
     *
     * Valid values: **1** to **50**.
     *
     * Default value: **2**.
     * @example 2
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The HTTP method that is used for health checks. Valid values:
     *
     *   **GET**: If the length of a response exceeds 8 KB, the response is truncated. However, the health check result is not affected.
     *   **POST**: gRPC health checks automatically use the POST method.
     *   **HEAD**: By default, HTTP health checks use the HEAD method.
     *
     * > This parameter takes effect only when the **HealthCheckProtocol** parameter is set to **HTTP** or **gRPC**.
     * @example HEAD
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The path that is used for health checks.
     *
     * The path must be 1 to 80 characters in length and can contain only letters, digits, and the following special characters: `- / . % ? # & =`. It can also contain the following extended characters: `_ ; ~ ! ( ) * [ ] @ $ ^ : \" , +`. The URL must start with a forward slash (/).
     *
     * > This parameter takes effect only when the **HealthCheckProtocol** parameter is set to **HTTP**.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description The protocol that is used for health checks. Valid values:
     *
     *   **HTTP**: To perform HTTP health checks, Application Load Balancer (ALB) sends HEAD or GET requests to a backend server to check whether the backend server is healthy.
     *   **HTTPS**: To perform HTTPS health checks, ALB sends SYN packets to a backend server to check whether the port of the backend server is available to receive requests.
     *   **gRPC**: To perform gRPC health checks, ALB sends POST or GET requests to a backend server to check whether the backend server is healthy.
     *
     * @example HTTP
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description Specify the timeout period of a health check response. If a backend server, such as an Elastic Compute Service (ECS) instance, does not return a health check response within the specified timeout period, the server fails the health check. Unit: seconds.
     *
     * Valid values: **1** to **300**.
     *
     * Default value: **5**.
     *
     * > If the value of the **HealthCheckTimeout** parameter is smaller than that of the **HealthCheckInterval** parameter, the timeout period specified by the **HealthCheckTimeout** parameter is ignored and the value of the **HealthCheckInterval** parameter is used as the timeout period.
     * @example 5
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status is changed from **fail** to **success**.
     *
     * Valid values: **2** to **10**.
     *
     * Default value: **3**.
     * @example 3
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     *
     * Default value: **3**.
     * @example 3
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
