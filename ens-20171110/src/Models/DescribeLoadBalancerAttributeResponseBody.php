<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody\backendServers;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocols;

class DescribeLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var backendServers[]
     */
    public $backendServers;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
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
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @var string
     */
    public $loadBalancerType;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'address' => 'Address',
        'addressIPVersion' => 'AddressIPVersion',
        'addressType' => 'AddressType',
        'backendServers' => 'BackendServers',
        'bandwidth' => 'Bandwidth',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'ensRegionId' => 'EnsRegionId',
        'listenerPorts' => 'ListenerPorts',
        'listenerPortsAndProtocols' => 'ListenerPortsAndProtocols',
        'loadBalancerId' => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'loadBalancerStatus' => 'LoadBalancerStatus',
        'loadBalancerType' => 'LoadBalancerType',
        'networkId' => 'NetworkId',
        'payType' => 'PayType',
        'requestId' => 'RequestId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->backendServers)) {
            Model::validateArray($this->backendServers);
        }
        if (\is_array($this->listenerPorts)) {
            Model::validateArray($this->listenerPorts);
        }
        if (\is_array($this->listenerPortsAndProtocols)) {
            Model::validateArray($this->listenerPortsAndProtocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }

        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->backendServers) {
            if (\is_array($this->backendServers)) {
                $res['BackendServers'] = [];
                $n1 = 0;
                foreach ($this->backendServers as $item1) {
                    $res['BackendServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->listenerPorts)) {
                $res['ListenerPorts'] = [];
                $n1 = 0;
                foreach ($this->listenerPorts as $item1) {
                    $res['ListenerPorts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listenerPortsAndProtocols) {
            if (\is_array($this->listenerPortsAndProtocols)) {
                $res['ListenerPortsAndProtocols'] = [];
                $n1 = 0;
                foreach ($this->listenerPortsAndProtocols as $item1) {
                    $res['ListenerPortsAndProtocols'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->loadBalancerType) {
            $res['LoadBalancerType'] = $this->loadBalancerType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }

        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        if (isset($map['BackendServers'])) {
            if (!empty($map['BackendServers'])) {
                $model->backendServers = [];
                $n1 = 0;
                foreach ($map['BackendServers'] as $item1) {
                    $model->backendServers[$n1] = backendServers::fromMap($item1);
                    ++$n1;
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
                $model->listenerPorts = [];
                $n1 = 0;
                foreach ($map['ListenerPorts'] as $item1) {
                    $model->listenerPorts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ListenerPortsAndProtocols'])) {
            if (!empty($map['ListenerPortsAndProtocols'])) {
                $model->listenerPortsAndProtocols = [];
                $n1 = 0;
                foreach ($map['ListenerPortsAndProtocols'] as $item1) {
                    $model->listenerPortsAndProtocols[$n1] = listenerPortsAndProtocols::fromMap($item1);
                    ++$n1;
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

        if (isset($map['LoadBalancerType'])) {
            $model->loadBalancerType = $map['LoadBalancerType'];
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
