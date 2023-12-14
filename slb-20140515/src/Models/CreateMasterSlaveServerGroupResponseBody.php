<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupResponseBody\masterSlaveBackendServers;
use AlibabaCloud\Tea\Model;

class CreateMasterSlaveServerGroupResponseBody extends Model
{
    /**
     * @description The backend servers in the primary/secondary server group.
     *
     * @var masterSlaveBackendServers
     */
    public $masterSlaveBackendServers;

    /**
     * @description The primary/secondary server group ID.
     *
     * @example rsp-bp19au4******
     *
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @description The request ID.
     *
     * @example 7CA4DB76-4D32-523B-822E-5C9494613D46
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'masterSlaveBackendServers' => 'MasterSlaveBackendServers',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterSlaveBackendServers) {
            $res['MasterSlaveBackendServers'] = null !== $this->masterSlaveBackendServers ? $this->masterSlaveBackendServers->toMap() : null;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MasterSlaveBackendServers'])) {
            $model->masterSlaveBackendServers = masterSlaveBackendServers::fromMap($map['MasterSlaveBackendServers']);
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
