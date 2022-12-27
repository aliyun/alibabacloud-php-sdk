<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody\backendServers;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocols;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @example 192.168.0.1
     *
     * @var string
     */
    public $address;

    /**
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var backendServers[]
     */
    public $backendServers;

    /**
     * @example 2000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example 2019-05-21T12:22:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-05-21T12:22:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example cn-chengdu-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string[]
     */
    public $listenerPorts;

    /**
     * @var listenerPortsAndProtocols[]
     */
    public $listenerPortsAndProtocols;

    /**
     * @example lb-5rcvo1n1t3hykfhhjwjgqp****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example example
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @example elb.s2.medium
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @example n-5rwbi3g9zvgxcsiufwhw8****
     *
     * @var string
     */
    public $networkId;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example vsw-5s78m2pdr9osa0j64bn78****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'address'                   => 'Address',
        'addressIPVersion'          => 'AddressIPVersion',
        'backendServers'            => 'BackendServers',
        'bandwidth'                 => 'Bandwidth',
        'createTime'                => 'CreateTime',
        'endTime'                   => 'EndTime',
        'ensRegionId'               => 'EnsRegionId',
        'listenerPorts'             => 'ListenerPorts',
        'listenerPortsAndProtocols' => 'ListenerPortsAndProtocols',
        'loadBalancerId'            => 'LoadBalancerId',
        'loadBalancerName'          => 'LoadBalancerName',
        'loadBalancerSpec'          => 'LoadBalancerSpec',
        'loadBalancerStatus'        => 'LoadBalancerStatus',
        'networkId'                 => 'NetworkId',
        'payType'                   => 'PayType',
        'requestId'                 => 'RequestId',
        'vSwitchId'                 => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = [];
            if (null !== $this->backendServers && \is_array($this->backendServers)) {
                $n = 0;
                foreach ($this->backendServers as $item) {
                    $res['BackendServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->listenerPorts) {
            $res['ListenerPorts'] = $this->listenerPorts;
        }
        if (null !== $this->listenerPortsAndProtocols) {
            $res['ListenerPortsAndProtocols'] = [];
            if (null !== $this->listenerPortsAndProtocols && \is_array($this->listenerPortsAndProtocols)) {
                $n = 0;
                foreach ($this->listenerPortsAndProtocols as $item) {
                    $res['ListenerPortsAndProtocols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['BackendServers'])) {
            if (!empty($map['BackendServers'])) {
                $model->backendServers = [];
                $n                     = 0;
                foreach ($map['BackendServers'] as $item) {
                    $model->backendServers[$n++] = null !== $item ? backendServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['ListenerPorts'])) {
            if (!empty($map['ListenerPorts'])) {
                $model->listenerPorts = $map['ListenerPorts'];
            }
        }
        if (isset($map['ListenerPortsAndProtocols'])) {
            if (!empty($map['ListenerPortsAndProtocols'])) {
                $model->listenerPortsAndProtocols = [];
                $n                                = 0;
                foreach ($map['ListenerPortsAndProtocols'] as $item) {
                    $model->listenerPortsAndProtocols[$n++] = null !== $item ? listenerPortsAndProtocols::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
