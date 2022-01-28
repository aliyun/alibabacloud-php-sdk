<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerUDPListenerRequest extends Model
{
    /**
     * @description 负载均衡实例后端使用的端口，取值：1~65535
     *
     * @var int
     */
    public $backendServerPort;

    /**
     * @description 设置监听的描述信息。  长度限制为1-80个字符，允许包含字母、数字、“-”、“/”、“.”和“_”等字符。支持中文描述。
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eipTransmit;

    /**
     * @description 健康检查使用的端口。取值：1-65535  不设置此参数时，表示使用后端服务端口（BackendServerPort）
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
     * @description UDP监听健康检查的响应串，只允许包含字母、数字，最大长度限制为64个字符。
     *
     * @var string
     */
    public $healthCheckExp;

    /**
     * @description 健康检查的时间间隔。  取值：1-50（秒）。
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description UDP监听健康检查的请求串，只允许包含字母、数字，最大长度限制为64个字符。
     *
     * @var string
     */
    public $healthCheckReq;

    /**
     * @description 健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success。  取值：2-10。
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description 负载均衡实例前端使用的端口。  取值：1-65535。
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description 负载均衡实例的ID。
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description 调度算法。取值：  wrr（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。 wlc：除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的次数（概率）也越高。 rr：按照访问顺序依次将外部请求依序分发到后端服务器。 sch：基于源IP地址的一致性hash，相同的源地址会调度到相同的后端服务器。
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description 健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail。  取值：2-10。
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'backendServerPort'         => 'BackendServerPort',
        'description'               => 'Description',
        'eipTransmit'               => 'EipTransmit',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckExp'            => 'HealthCheckExp',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckReq'            => 'HealthCheckReq',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'loadBalancerId'            => 'LoadBalancerId',
        'scheduler'                 => 'Scheduler',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipTransmit) {
            $res['EipTransmit'] = $this->eipTransmit;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckReq) {
            $res['HealthCheckReq'] = $this->healthCheckReq;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerUDPListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipTransmit'])) {
            $model->eipTransmit = $map['EipTransmit'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckReq'])) {
            $model->healthCheckReq = $map['HealthCheckReq'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
