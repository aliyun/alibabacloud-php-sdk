<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeResponseBody\masterSlaveBackendServers;
use AlibabaCloud\Tea\Model;

class DescribeMasterSlaveServerGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $masterSlaveServerGroupName;

    /**
     * @var masterSlaveBackendServers[]
     */
    public $masterSlaveBackendServers;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'masterSlaveServerGroupId'   => 'MasterSlaveServerGroupId',
        'loadBalancerId'             => 'LoadBalancerId',
        'masterSlaveServerGroupName' => 'MasterSlaveServerGroupName',
        'masterSlaveBackendServers'  => 'MasterSlaveBackendServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->masterSlaveServerGroupName) {
            $res['MasterSlaveServerGroupName'] = $this->masterSlaveServerGroupName;
        }
        if (null !== $this->masterSlaveBackendServers) {
            $res['MasterSlaveBackendServers'] = [];
            if (null !== $this->masterSlaveBackendServers && \is_array($this->masterSlaveBackendServers)) {
                $n = 0;
                foreach ($this->masterSlaveBackendServers as $item) {
                    $res['MasterSlaveBackendServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMasterSlaveServerGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['MasterSlaveServerGroupName'])) {
            $model->masterSlaveServerGroupName = $map['MasterSlaveServerGroupName'];
        }
        if (isset($map['MasterSlaveBackendServers'])) {
            if (!empty($map['MasterSlaveBackendServers'])) {
                $model->masterSlaveBackendServers = [];
                $n                                = 0;
                foreach ($map['MasterSlaveBackendServers'] as $item) {
                    $model->masterSlaveBackendServers[$n++] = null !== $item ? masterSlaveBackendServers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
