<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupResponseBody\masterSlaveBackendServers;
use AlibabaCloud\Tea\Model;

class CreateMasterSlaveServerGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var masterSlaveBackendServers
     */
    public $masterSlaveBackendServers;
    protected $_name = [
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'requestId'                 => 'RequestId',
        'masterSlaveBackendServers' => 'MasterSlaveBackendServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->masterSlaveBackendServers) {
            $res['MasterSlaveBackendServers'] = null !== $this->masterSlaveBackendServers ? $this->masterSlaveBackendServers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMasterSlaveServerGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MasterSlaveBackendServers'])) {
            $model->masterSlaveBackendServers = masterSlaveBackendServers::fromMap($map['MasterSlaveBackendServers']);
        }

        return $model;
    }
}
