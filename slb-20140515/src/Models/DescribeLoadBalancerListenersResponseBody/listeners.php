<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPSListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\tags;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\TCPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\UDPListenerConfig;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description The ID of the access control list (ACL).
     *
     * @example nacl-a2do9e413e0spzasx****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The IDs of the ACLs.
     *
     * @var string[]
     */
    public $aclIds;

    /**
     * @description Indicates whether access control is enabled. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of access control. Valid values:
     *
     *   **white**: The listener forwards requests only from IP addresses and CIDR blocks on the whitelist. Your service may be adversely affected if the whitelist is not properly configured. If a whitelist is configured, the listener forwards requests only from IP addresses that are added to the whitelist.
     *
     * If you configure a whitelist but no IP address is added to the whitelist, the listener forwards all requests.
     *
     *   **black**: The listener blocks requests from IP addresses and CIDR blocks on the blacklist.
     *
     * If you configure a blacklist but no IP address is added to the blacklist, the listener forwards all requests.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The port of the backend server.
     *
     * >  This parameter takes effect only when the `VServerGroupId` and `MasterSlaveServerGroupId` parameters are both empty.
     * @example 80
     *
     * @var int
     */
    public $backendServerPort;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s.
     *
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The description of the listener.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The configurations of the HTTP listener.
     *
     * @var HTTPListenerConfig
     */
    public $HTTPListenerConfig;

    /**
     * @description The configurations of the HTTPS listener.
     *
     * @var HTTPSListenerConfig
     */
    public $HTTPSListenerConfig;

    /**
     * @description The listener port.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The protocol used by the listener.
     *
     * @example http
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1b6c719dfa****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **wrr**: Backend servers with higher weights receive more requests than those with lower weights.
     *   **rr**: Requests are distributed to backend servers in sequence.
     *   **sch**: consistent hashing that is based on source IP addresses. Requests from the same source IP address are distributed to the same backend server.
     *   **tch**: specifies consistent hashing based on the source IP address, destination IP address, source port, and destination port. Requests that have the same four factors are distributed to the same backend server.
     *   **qch**: specifies consistent hashing based on Quick UDP Internet Connection (QUIC) IDs. Requests that contain the same QUIC ID are scheduled to the same backend server.
     *
     * >  Only high-performance CLB instances support the **sch**, **tch**, and **qch** consistent hashing algorithms.
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **running**
     *   **stopped**
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The configurations of the TCP listener.
     *
     * @var TCPListenerConfig
     */
    public $TCPListenerConfig;

    /**
     * @description A list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The configurations of the UDP listener.
     *
     * @var UDPListenerConfig
     */
    public $UDPListenerConfig;

    /**
     * @description The ID of the vServer group associated with the listener.
     *
     * @example rsp-cige6j****
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'aclId'               => 'AclId',
        'aclIds'              => 'AclIds',
        'aclStatus'           => 'AclStatus',
        'aclType'             => 'AclType',
        'backendServerPort'   => 'BackendServerPort',
        'bandwidth'           => 'Bandwidth',
        'description'         => 'Description',
        'HTTPListenerConfig'  => 'HTTPListenerConfig',
        'HTTPSListenerConfig' => 'HTTPSListenerConfig',
        'listenerPort'        => 'ListenerPort',
        'listenerProtocol'    => 'ListenerProtocol',
        'loadBalancerId'      => 'LoadBalancerId',
        'scheduler'           => 'Scheduler',
        'status'              => 'Status',
        'TCPListenerConfig'   => 'TCPListenerConfig',
        'tags'                => 'Tags',
        'UDPListenerConfig'   => 'UDPListenerConfig',
        'VServerGroupId'      => 'VServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclIds) {
            $res['AclIds'] = $this->aclIds;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->HTTPListenerConfig) {
            $res['HTTPListenerConfig'] = null !== $this->HTTPListenerConfig ? $this->HTTPListenerConfig->toMap() : null;
        }
        if (null !== $this->HTTPSListenerConfig) {
            $res['HTTPSListenerConfig'] = null !== $this->HTTPSListenerConfig ? $this->HTTPSListenerConfig->toMap() : null;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->TCPListenerConfig) {
            $res['TCPListenerConfig'] = null !== $this->TCPListenerConfig ? $this->TCPListenerConfig->toMap() : null;
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
        if (null !== $this->UDPListenerConfig) {
            $res['UDPListenerConfig'] = null !== $this->UDPListenerConfig ? $this->UDPListenerConfig->toMap() : null;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = $map['AclIds'];
            }
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HTTPListenerConfig'])) {
            $model->HTTPListenerConfig = HTTPListenerConfig::fromMap($map['HTTPListenerConfig']);
        }
        if (isset($map['HTTPSListenerConfig'])) {
            $model->HTTPSListenerConfig = HTTPSListenerConfig::fromMap($map['HTTPSListenerConfig']);
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TCPListenerConfig'])) {
            $model->TCPListenerConfig = TCPListenerConfig::fromMap($map['TCPListenerConfig']);
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
        if (isset($map['UDPListenerConfig'])) {
            $model->UDPListenerConfig = UDPListenerConfig::fromMap($map['UDPListenerConfig']);
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
