<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupAttributeRequest;

use AlibabaCloud\Tea\Model;

class healthCheckConfig extends Model
{
    /**
     * @description The port that you want to use for health checks on backend servers. Valid values: **0** to **65535**. If you set the value to **0**, the ports of backend servers are used for health checks.
     *
     * @example 0
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The maximum timeout period of a health check. Unit: seconds. Valid values: **1** to **300**.
     *
     * @example 100
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
     * @description Specifies whether to enable the health check feature. Valid values:
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
     * @var string
     */
    public $healthCheckExp;

    /**
     * @description The HTTP status codes to return for health checks. Separate multiple HTTP status codes with commas (,). Valid values: **http_2xx** (default), **http_3xx**, **http_4xx**, and **http_5xx**.
     *
     * > This parameter takes effect only when **HealthCheckType** is set to **HTTP**.
     * @var string[]
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval at which health checks are performed. Unit: seconds.
     *
     * Valid values: **5** to **50**.
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckReq;

    /**
     * @description The protocol that you want to use for health checks. Valid values: **TCP** and **HTTP**.
     *
     * @example TCP
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The path to which health check requests are sent.
     *
     * The path must be 1 to 80 characters in length, and can contain only letters, digits, and the following special characters: `- / . % ? # & =`. It can also contain the following extended characters: `_ ; ~ ! ( ) * [ ] @ $ ^ : \\" , +`. The path must start with a forward slash (/).
     *
     * > This parameter takes effect only when **HealthCheckType** is set to **HTTP**.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status changes from **fail** to **success**. Valid values: **2** to **10**.
     *
     * @example 3
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
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status changes from **success** to **fail**. Valid values: **2** to **10**.
     *
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
        'healthCheckExp'            => 'HealthCheckExp',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckReq'            => 'HealthCheckReq',
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
        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckReq) {
            $res['HealthCheckReq'] = $this->healthCheckReq;
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
     * @return healthCheckConfig
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
        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            if (!empty($map['HealthCheckHttpCode'])) {
                $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
            }
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckReq'])) {
            $model->healthCheckReq = $map['HealthCheckReq'];
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
