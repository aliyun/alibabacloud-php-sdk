<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\SetVServerGroupAttributeResponseBody\backendServers;
use AlibabaCloud\Tea\Model;

class SetVServerGroupAttributeResponseBody extends Model
{
    /**
     * @description The list of backend servers.
     *
     * @var backendServers
     */
    public $backendServers;

    /**
     * @description The ID of the request.
     *
     * @example 9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the vServer group.
     *
     * @example rsp-cige6****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description The name of the vServer group.
     *
     * @example Group1
     *
     * @var string
     */
    public $VServerGroupName;
    protected $_name = [
        'backendServers'   => 'BackendServers',
        'requestId'        => 'RequestId',
        'VServerGroupId'   => 'VServerGroupId',
        'VServerGroupName' => 'VServerGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
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
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }

        return $model;
    }
}
