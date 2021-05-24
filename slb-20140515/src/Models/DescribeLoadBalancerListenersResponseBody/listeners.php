<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPSListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\TCPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\UDPListenerConfig;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $listenerProtocol;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var HTTPListenerConfig
     */
    public $HTTPListenerConfig;

    /**
     * @var HTTPSListenerConfig
     */
    public $HTTPSListenerConfig;

    /**
     * @var TCPListenerConfig
     */
    public $TCPListenerConfig;

    /**
     * @var UDPListenerConfig
     */
    public $UDPListenerConfig;
    protected $_name = [
        'aclType'             => 'AclType',
        'status'              => 'Status',
        'VServerGroupId'      => 'VServerGroupId',
        'listenerProtocol'    => 'ListenerProtocol',
        'loadBalancerId'      => 'LoadBalancerId',
        'listenerPort'        => 'ListenerPort',
        'aclId'               => 'AclId',
        'scheduler'           => 'Scheduler',
        'bandwidth'           => 'Bandwidth',
        'description'         => 'Description',
        'aclStatus'           => 'AclStatus',
        'backendServerPort'   => 'BackendServerPort',
        'HTTPListenerConfig'  => 'HTTPListenerConfig',
        'HTTPSListenerConfig' => 'HTTPSListenerConfig',
        'TCPListenerConfig'   => 'TCPListenerConfig',
        'UDPListenerConfig'   => 'UDPListenerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->HTTPListenerConfig) {
            $res['HTTPListenerConfig'] = null !== $this->HTTPListenerConfig ? $this->HTTPListenerConfig->toMap() : null;
        }
        if (null !== $this->HTTPSListenerConfig) {
            $res['HTTPSListenerConfig'] = null !== $this->HTTPSListenerConfig ? $this->HTTPSListenerConfig->toMap() : null;
        }
        if (null !== $this->TCPListenerConfig) {
            $res['TCPListenerConfig'] = null !== $this->TCPListenerConfig ? $this->TCPListenerConfig->toMap() : null;
        }
        if (null !== $this->UDPListenerConfig) {
            $res['UDPListenerConfig'] = null !== $this->UDPListenerConfig ? $this->UDPListenerConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['HTTPListenerConfig'])) {
            $model->HTTPListenerConfig = HTTPListenerConfig::fromMap($map['HTTPListenerConfig']);
        }
        if (isset($map['HTTPSListenerConfig'])) {
            $model->HTTPSListenerConfig = HTTPSListenerConfig::fromMap($map['HTTPSListenerConfig']);
        }
        if (isset($map['TCPListenerConfig'])) {
            $model->TCPListenerConfig = TCPListenerConfig::fromMap($map['TCPListenerConfig']);
        }
        if (isset($map['UDPListenerConfig'])) {
            $model->UDPListenerConfig = UDPListenerConfig::fromMap($map['UDPListenerConfig']);
        }

        return $model;
    }
}
