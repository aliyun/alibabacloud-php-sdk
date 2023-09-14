<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponseBody\healthCheckTemplates\tags;
use AlibabaCloud\Tea\Model;

class healthCheckTemplates extends Model
{
    /**
     * @description The status code.
     *
     * @var string[]
     */
    public $healthCheckCodes;

    /**
     * @description The port that is used for health checks.
     *
     * Valid values: \*\* 0 to 65535\*\*.
     *
     * Default value: **0**. If you set the value to 0, the port of a backend server is used for health checks.
     * @example 80
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that is used for health checks. Valid values:
     *
     **$SERVER_IP** (default): the private IP addresses of backend servers. If you do not set the HealthCheckHost parameter or set the parameter to $SERVER_IP, the Application Load Balancer (ALB) uses the private IP addresses of backend servers for health checks.
     *
     **domain**: The domain name must be 1 to 80 characters in length and can contain letters, digits, periods (.), and hyphens (-).
     *
     * > This parameter is valid only if the `HealthCheckProtocol` parameter is set to **HTTP**.
     * @example $_ip
     *
     * @var string
     */
    public $healthCheckHost;

    /**
     * @description The HTTP version that is used for health checks.
     *
     * Valid values: **HTTP 1.0** and **HTTP 1.1**.
     *
     * Default value: **HTTP 1.1**.
     *
     * > This parameter is valid only if the `HealthCheckProtocol` parameter is set to **HTTP**.
     * @example HTTP 1.0
     *
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @description The interval at which health checks are performed. Unit: seconds. Valid values: **1 to 50**. Default value: **2**.
     *
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The method that you want to use for the health check. Valid values:
     *
     *   **HEAD**: By default, the ALB instance sends HEAD requests to a backend server to perform HTTP health checks.
     *   **GET**: If the length of a response exceeds 8 KB, the response is truncated. However, the health check result is not affected.
     *   **POST**: gRPC health checks automatically use the POST method.
     *
     * > This parameter takes effect only when the **HealthCheckProtocol** parameter is set to **HTTP** or **gRPC**.
     * @example HEAD
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The URL that is used for health checks.
     *
     * The URL must be 1 to 80 characters in length and can contain only letters, digits, hyphens (-), forward slashes (/), periods (.), percent signs (%), question marks (?), number signs (#), and ampersands (&). The URL can also contain the following extended characters: `_ ; ~ ! ( ) * [ ] @ $ ^ : \" , +`. The URL must start with a forward slash (/).
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description The protocol that you want to use for health checks. Valid values:
     *
     *   **HTTP** (default): To perform HTTP health checks, ALB sends HEAD or GET requests to a backend server to check whether the backend server is healthy.
     *   **TCP**: To perform TCP health checks, ALB sends SYN packets to a backend server to check whether the port of the backend server is available to receive requests.
     *   **gRPC**: To perform gRPC health checks, ALB sends POST or GET requests to a backend server to check whether the backend server is healthy.
     *
     * @example HTTP
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description The ID of the health check template.
     *
     * @example hct-bp1qjwo61pqz3ahltv****
     *
     * @var string
     */
    public $healthCheckTemplateId;

    /**
     * @description The name of the health check template.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example HealthCheckTemplate1
     *
     * @var string
     */
    public $healthCheckTemplateName;

    /**
     * @description The timeout period of a health check response. If a backend Elastic Compute Service (ECS) instance does not return a health check response within the specified timeout period, the server fails the health check.
     *
     * Valid values: **1 to 300**. Unit: seconds.
     *
     * Default value: **5**.
     *
     * > If the value of the **HealthCheckTimeout** parameter is smaller than that of the **HealthCheckInterval** parameter, the timeout period specified by the **HealthCheckTimeout** parameter is ignored and the value of the **HealthCheckInterval** parameter is used as the timeout period.
     * @example 3
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status is changed from **fail** to **success**.
     *
     * Valid values: **2 to 10**.
     *
     * Default value: **3**.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * Valid values: **2 to 10**.
     *
     * Default value: **3**.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthCheckCodes'        => 'HealthCheckCodes',
        'healthCheckConnectPort'  => 'HealthCheckConnectPort',
        'healthCheckHost'         => 'HealthCheckHost',
        'healthCheckHttpVersion'  => 'HealthCheckHttpVersion',
        'healthCheckInterval'     => 'HealthCheckInterval',
        'healthCheckMethod'       => 'HealthCheckMethod',
        'healthCheckPath'         => 'HealthCheckPath',
        'healthCheckProtocol'     => 'HealthCheckProtocol',
        'healthCheckTemplateId'   => 'HealthCheckTemplateId',
        'healthCheckTemplateName' => 'HealthCheckTemplateName',
        'healthCheckTimeout'      => 'HealthCheckTimeout',
        'healthyThreshold'        => 'HealthyThreshold',
        'tags'                    => 'Tags',
        'unhealthyThreshold'      => 'UnhealthyThreshold',
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
        if (null !== $this->healthCheckTemplateId) {
            $res['HealthCheckTemplateId'] = $this->healthCheckTemplateId;
        }
        if (null !== $this->healthCheckTemplateName) {
            $res['HealthCheckTemplateName'] = $this->healthCheckTemplateName;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheckTemplates
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
        if (isset($map['HealthCheckTemplateId'])) {
            $model->healthCheckTemplateId = $map['HealthCheckTemplateId'];
        }
        if (isset($map['HealthCheckTemplateName'])) {
            $model->healthCheckTemplateName = $map['HealthCheckTemplateName'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
