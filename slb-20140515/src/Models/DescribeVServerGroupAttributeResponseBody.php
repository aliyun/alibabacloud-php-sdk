<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupAttributeResponseBody\backendServers;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeVServerGroupAttributeResponseBody extends Model
{
    /**
     * @description The list of backend servers.
     *
     * @var backendServers
     */
    public $backendServers;

    /**
     * @description The time when the CLB instance was created. The time follows the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2022-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-jfakd****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The ID of the request.
     *
     * @example 9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag list.
     *
     * @var tags
     */
    public $tags;

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
        'createTime'       => 'CreateTime',
        'loadBalancerId'   => 'LoadBalancerId',
        'requestId'        => 'RequestId',
        'tags'             => 'Tags',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
     * @return DescribeVServerGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
