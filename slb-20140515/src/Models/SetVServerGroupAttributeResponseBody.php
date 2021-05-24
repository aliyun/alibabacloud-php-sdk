<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\SetVServerGroupAttributeResponseBody\backendServers;
use AlibabaCloud\Tea\Model;

class SetVServerGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $VServerGroupName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backendServers
     */
    public $backendServers;
    protected $_name = [
        'VServerGroupId'   => 'VServerGroupId',
        'VServerGroupName' => 'VServerGroupName',
        'requestId'        => 'RequestId',
        'backendServers'   => 'BackendServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetVServerGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }

        return $model;
    }
}
