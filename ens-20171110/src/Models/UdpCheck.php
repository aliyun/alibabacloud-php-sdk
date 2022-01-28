<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UdpCheck extends Model
{
    /**
     * @description 健康检查使用的端口。取值：1-65535  不设置此参数时，表示使用后端服务端口（BackendServerPort）。
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description 接收来自运行状况检查的响应需要等待的时间。  如果后端ENS在指定的时间内没有正确响应，则判定为健康检查失败。  取值：1-300（秒）。默认为5秒
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description 健康检查的时间间隔。  取值：1-50（秒）。
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description 健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success。  取值：2-10。
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description 健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail。  取值：2-10。
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthyThreshold'          => 'HealthyThreshold',
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
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
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
     * @return UdpCheck
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
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
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
