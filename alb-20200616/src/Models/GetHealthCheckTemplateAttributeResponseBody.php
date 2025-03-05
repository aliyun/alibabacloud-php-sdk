<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetHealthCheckTemplateAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetHealthCheckTemplateAttributeResponseBody extends Model
{
    /**
     * @description The HTTP status codes that indicate a healthy backend server.
     *
     * @var string[]
     */
    public $healthCheckCodes;

    /**
     * @description The port that is used for health checks.
     *
     * Valid values: **0** to **65535**.
     * @example 80
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that is used for health checks. Valid values:
     *
     *   **$SERVER_IP**: the private IP addresses of backend servers. If an IP address is specified, or this parameter is not specified, the ALB instance uses the private IP addresses of backend servers as domain names for health checks.
     *   **domain**: The domain name must be 1 to 80 characters in length, and can contain letters, digits, periods (.), and hyphens (-).
     *
     * >  This parameter takes effect only if `HealthCheckProtocol` is set to **HTTP** or **HTTPS**.
     * @example $SERVER_IP
     *
     * @var string
     */
    public $healthCheckHost;

    /**
     * @description The HTTP version for health checks.
     *
     * Valid values: **HTTP1.0** and **HTTP1.1**.
     *
     * >  This parameter takes effect only if you set `HealthCheckProtocol` to **HTTP** or **HTTPS**.
     * @example HTTP1.0
     *
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @description The interval at which health checks are performed. Unit: seconds. Valid values: **1 to 50**.
     *
     * @example 3
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The HTTP method that is used for health checks. Valid values:
     *
     *   **HEAD** (default): By default, HTTP and HTTPS health checks use the HEAD method.
     *   **GET**: If the length of a response exceeds 8 KB, the response is truncated. However, the health check result is not affected.
     *   **POST**: gRPC health checks use the POST method by default.
     *
     * >  This parameter takes effect only if you set **HealthCheckProtocol** to **HTTP**, **HTTPS**, or **gRPC**.
     * @example GET
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The URL that is used for health checks.
     *
     * The URL must be 1 to 80 characters in length, and can contain letters, digits, the following special characters: - / . % ? # &, and the following extended characters: `_ ; ~ ! ( ) * [ ] @ $ ^ : \\" , +`. The URL must start with a forward slash (/).
     *
     * >  This parameter takes effect only if you set **HealthCheckProtocol** to **HTTP**, **HTTPS**, or **gRPC**.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description The protocol that is used for health checks. Valid values:
     *
     *   **HTTP** (default): HTTP health checks simulate browser behaviors by sending HEAD or GET requests to probe the availability of backend servers.
     *   **HTTPS**: The ALB instance sends HEAD or GET requests, which simulate browser requests, to check whether the backend server is healthy. HTTPS supports encryption and provides higher security than HTTP.
     *   **TCP**: TCP health checks send TCP SYN packets to a backend server to probe the availability of backend servers.
     *   **gRPC**: gRPC health checks send POST or GET requests to a backend server to probe the availability of backend servers.
     *
     * @example HTTP
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description The ID of the health check template.
     *
     * @example hct-x4jazoyi6tvsq9****
     *
     * @var string
     */
    public $healthCheckTemplateId;

    /**
     * @description The name of the health check template.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The name must start with a letter.
     * @example HealthCheckTemplate1
     *
     * @var string
     */
    public $healthCheckTemplateName;

    /**
     * @description The timeout period of a health check response. If a backend server does not respond within the specified timeout period, the backend server is declared unhealthy. Unit: seconds.
     *
     * Valid values: **1** to **300**.
     * @example 200
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status is changed from **fail** to **success**.
     *
     * Valid values: **2** to **10**.
     * @example 5
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The request ID.
     *
     * @example DB1AFC33-DAE8-528E-AA4D-4A6AABE71945
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     * @example 5
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
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return GetHealthCheckTemplateAttributeResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
