<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeContainerAppRequest extends Model
{
    /**
     * @description The number of consecutive failed health checks required for an application to be considered as unhealthy. Valid values: 1 to 10. Default value: 5.
     *
     * @example 3
     *
     * @var int
     */
    public $healthCheckFailTimes;

    /**
     * @description The domain name that is used for health checks. This parameter is empty by default.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $healthCheckHost;

    /**
     * @description The HTTP status code returned for a successful health check. Valid values:
     *
     *   **http_2xx** (default)
     *   **http_3xx**
     *
     * @example http_2xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval between two consecutive health checks. Unit: seconds. Valid values: **1** to **50**. Default value: **5**.
     *
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The HTTP request method for health checks. Valid values:
     *
     *   **HEAD** (default): requests the headers of the resource.
     *   **GET**: requests the specified resource and returns both the headers and entity body.
     *
     * @example HEAD
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The port used for health checks. Valid values: 1 to 65535. Default value: 80.
     *
     * @example 80
     *
     * @var int
     */
    public $healthCheckPort;

    /**
     * @description The number of consecutive successful health checks required for an application to be considered as healthy. Valid values: 1 to 10. Default value: 2.
     *
     * @example 2
     *
     * @var int
     */
    public $healthCheckSuccTimes;

    /**
     * @description The timeout period of a health check response. If a backend ECS instance does not respond within the specified timeout period, the ECS instance fails the health check. Unit: seconds.\\
     * Valid values: **1** to **100**.\\
     * Default value: **3**.
     * @example 5
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The health check type. By default, this parameter is left empty.
     *
     * Valid values:
     *
     *   **l4**: Layer 4 health check.
     *   **l7**: Layer 7 health check.
     *
     * @example l7
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The URI used for health checks. The URI must be **1** to **80** characters in length. Default value: "/".
     *
     * @example /health_check
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description The name of the application. The name must start with a lowercase letter and can contain lowercase letters, digits, and hyphens (-). The name must be 6 to 128 characters in length.
     *
     * This parameter is required.
     * @example app-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The remarks. This parameter is empty by default.
     *
     * @example test app
     *
     * @var string
     */
    public $remarks;

    /**
     * @description The server port. Valid values: 1 to 65535.
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $servicePort;

    /**
     * @description The backend port, which is also the service port of the application. Valid values: 1 to 65535.
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'healthCheckFailTimes' => 'HealthCheckFailTimes',
        'healthCheckHost'      => 'HealthCheckHost',
        'healthCheckHttpCode'  => 'HealthCheckHttpCode',
        'healthCheckInterval'  => 'HealthCheckInterval',
        'healthCheckMethod'    => 'HealthCheckMethod',
        'healthCheckPort'      => 'HealthCheckPort',
        'healthCheckSuccTimes' => 'HealthCheckSuccTimes',
        'healthCheckTimeout'   => 'HealthCheckTimeout',
        'healthCheckType'      => 'HealthCheckType',
        'healthCheckURI'       => 'HealthCheckURI',
        'name'                 => 'Name',
        'remarks'              => 'Remarks',
        'servicePort'          => 'ServicePort',
        'targetPort'           => 'TargetPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckFailTimes) {
            $res['HealthCheckFailTimes'] = $this->healthCheckFailTimes;
        }
        if (null !== $this->healthCheckHost) {
            $res['HealthCheckHost'] = $this->healthCheckHost;
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
        if (null !== $this->healthCheckPort) {
            $res['HealthCheckPort'] = $this->healthCheckPort;
        }
        if (null !== $this->healthCheckSuccTimes) {
            $res['HealthCheckSuccTimes'] = $this->healthCheckSuccTimes;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeContainerAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckFailTimes'])) {
            $model->healthCheckFailTimes = $map['HealthCheckFailTimes'];
        }
        if (isset($map['HealthCheckHost'])) {
            $model->healthCheckHost = $map['HealthCheckHost'];
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
        if (isset($map['HealthCheckPort'])) {
            $model->healthCheckPort = $map['HealthCheckPort'];
        }
        if (isset($map['HealthCheckSuccTimes'])) {
            $model->healthCheckSuccTimes = $map['HealthCheckSuccTimes'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
