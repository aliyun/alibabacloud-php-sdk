<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class HealthCheck extends Model
{
    /**
     * @description 是否开启健康检查。  取值：on | off。
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description 健康检查的后端服务器的端口。  取值： 1~65535。    说明 在HealthCheck值为on时才会有效。
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description 每次健康检查响应的最大超时时间。  取值：1~300（秒）。  默认值：5。
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description 用于健康检查的域名，取值：  $_ip： 后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。是否要支持？ domain：域名长度为1-80字符，只能包含字母、数字、点号（.）和连字符（-）。   说明 在HealthCheck值为on时才会有效。
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description 健康检查正常的HTTP状态码，多个状态码用逗号分隔。  默认值为http_2xx。  取值：http_2xx | http_3xx | http_4xx | http_5xx。   说明 在HealthCheck值为on时才会有效。
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description 健康检查的时间间隔。  取值： 1~50（秒）。   说明 在HealthCheck值为on时才会有效。
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description 健康检查的method
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description 接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。在HealthCheck值为on时才会有效。  取值：1~300（秒）。   说明 如果HealthCHeckTimeout的值小于HealthCheckInterval的值，则HealthCHeckTimeout无效，超时时间为HealthCheckInterval的值。
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description 健康检查类型。  取值：tcp（默认值） | http。
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description 用于健康检查的URI。  长度限制为1~80，只能使用字母、数字和”-/.%?#&amp;“这些字符。 URL不能只为”/“，但必须以”/“开头。    说明 在HealthCheck值为on时才会有效。
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description 健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success。  取值：2~10。    说明 在HealthCheck值为on时才会有效。
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description 健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail。  取值：2~10。   说明 在HealthCheck值为on时才会有效。
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthCheck'               => 'HealthCheck',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckMethod'         => 'HealthCheckMethod',
        'healthCheckTimeout'        => 'HealthCheckTimeout',
        'healthCheckType'           => 'HealthCheckType',
        'healthCheckURI'            => 'HealthCheckURI',
        'healthyThreshold'          => 'HealthyThreshold',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
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
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
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
     * @return HealthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
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
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
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
