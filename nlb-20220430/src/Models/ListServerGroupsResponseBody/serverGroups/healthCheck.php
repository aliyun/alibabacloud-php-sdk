<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponseBody\serverGroups;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @description The backend port that is used for health checks.
     *
     * Valid values: **0** to **65535**.
     *
     * A value of **0** indicates that the port on a backend server is used for health checks.
     * @example 200
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The maximum timeout period of a health check. Unit: seconds. Valid values: **1** to **300**.
     *
     * @example 200
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description The domain name that you want to use for health checks. Valid values:
     *
     *   **$SERVER_IP**: the private IP address of a backend server.
     *   **domain**: a specified domain name. The domain name must be 1 to 80 characters in length, and can contain lowercase letters, digits, hyphens (-), and periods (.).
     *
     * > This parameter takes effect only when **HealthCheckType** is set to **HTTP**.
     * @example $SERVER_IP
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description Indicates whether the health check feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @description The HTTP status codes returned for health checks. Multiple HTTP status codes are separated by commas (,). Valid values: **http\_2xx**, **http\_3xx**, **http\_4xx**, and **http\_5xx**.
     *
     * > This parameter takes effect only when **HealthCheckType** is set to **HTTP**.
     * @var string[]
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval at which health checks are performed. Unit: seconds.
     *
     * Valid values: **5** to **50**.
     * @example 200
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The protocol that is used for health checks. Valid values: **TCP** and **HTTP**.
     *
     * @example TCP
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The path to which health check probes are sent.
     *
     * > This parameter takes effect only when **HealthCheckType** is set to **HTTP**.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status changes from **fail** to **success**.
     *
     * Valid values: **2** to **10**.
     * @example 2
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The HTTP method that is used for health checks. Valid values: **GET** and **HEAD**.
     *
     * > This parameter takes effect only when **HealthCheckType** is set to **HTTP**.
     * @example GET
     *
     * @var string
     */
    public $httpCheckMethod;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status changes from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     * @example 3
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'healthCheckEnabled'        => 'HealthCheckEnabled',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckType'           => 'HealthCheckType',
        'healthCheckUrl'            => 'HealthCheckUrl',
        'healthyThreshold'          => 'HealthyThreshold',
        'httpCheckMethod'           => 'HttpCheckMethod',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->httpCheckMethod) {
            $res['HttpCheckMethod'] = $this->httpCheckMethod;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            if (!empty($map['HealthCheckHttpCode'])) {
                $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
            }
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['HttpCheckMethod'])) {
            $model->httpCheckMethod = $map['HttpCheckMethod'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
