<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPSListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\tags;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\TCPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\UDPListenerConfig;

class listeners extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string[]
     */
    public $aclIds;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $description;

    /**
     * @var HTTPListenerConfig
     */
    public $HTTPListenerConfig;

    /**
     * @var HTTPSListenerConfig
     */
    public $HTTPSListenerConfig;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $listenerProtocol;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $status;

    /**
     * @var TCPListenerConfig
     */
    public $TCPListenerConfig;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var UDPListenerConfig
     */
    public $UDPListenerConfig;

    /**
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'aclId' => 'AclId',
        'aclIds' => 'AclIds',
        'aclStatus' => 'AclStatus',
        'aclType' => 'AclType',
        'backendServerPort' => 'BackendServerPort',
        'bandwidth' => 'Bandwidth',
        'description' => 'Description',
        'HTTPListenerConfig' => 'HTTPListenerConfig',
        'HTTPSListenerConfig' => 'HTTPSListenerConfig',
        'listenerPort' => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalancerId' => 'LoadBalancerId',
        'scheduler' => 'Scheduler',
        'status' => 'Status',
        'TCPListenerConfig' => 'TCPListenerConfig',
        'tags' => 'Tags',
        'UDPListenerConfig' => 'UDPListenerConfig',
        'VServerGroupId' => 'VServerGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->aclIds)) {
            Model::validateArray($this->aclIds);
        }
        if (null !== $this->HTTPListenerConfig) {
            $this->HTTPListenerConfig->validate();
        }
        if (null !== $this->HTTPSListenerConfig) {
            $this->HTTPSListenerConfig->validate();
        }
        if (null !== $this->TCPListenerConfig) {
            $this->TCPListenerConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->UDPListenerConfig) {
            $this->UDPListenerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->aclIds) {
            if (\is_array($this->aclIds)) {
                $res['AclIds'] = [];
                $n1 = 0;
                foreach ($this->aclIds as $item1) {
                    $res['AclIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $res['HTTPListenerConfig'] = null !== $this->HTTPListenerConfig ? $this->HTTPListenerConfig->toArray($noStream) : $this->HTTPListenerConfig;
        }

        if (null !== $this->HTTPSListenerConfig) {
            $res['HTTPSListenerConfig'] = null !== $this->HTTPSListenerConfig ? $this->HTTPSListenerConfig->toArray($noStream) : $this->HTTPSListenerConfig;
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
            $res['TCPListenerConfig'] = null !== $this->TCPListenerConfig ? $this->TCPListenerConfig->toArray($noStream) : $this->TCPListenerConfig;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->UDPListenerConfig) {
            $res['UDPListenerConfig'] = null !== $this->UDPListenerConfig ? $this->UDPListenerConfig->toArray($noStream) : $this->UDPListenerConfig;
        }

        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = [];
                $n1 = 0;
                foreach ($map['AclIds'] as $item1) {
                    $model->aclIds[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
