<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeResponseBody\masterSlaveBackendServers;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeMasterSlaveServerGroupAttributeResponseBody extends Model
{
    /**
     * @description The time when the CLB instance was created. The time follows the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2022-12-02T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the associated CLB instance.
     *
     * @example lb-14fadafw4343a******
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The list of backend servers in the primary/secondary server group.
     *
     * @var masterSlaveBackendServers
     */
    public $masterSlaveBackendServers;

    /**
     * @description The ID of the primary/secondary server group.
     *
     * @example rsp-cige6******
     *
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @description The name of the primary/secondary server group.
     *
     * @example Group1
     *
     * @var string
     */
    public $masterSlaveServerGroupName;

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
    protected $_name = [
        'createTime'                 => 'CreateTime',
        'loadBalancerId'             => 'LoadBalancerId',
        'masterSlaveBackendServers'  => 'MasterSlaveBackendServers',
        'masterSlaveServerGroupId'   => 'MasterSlaveServerGroupId',
        'masterSlaveServerGroupName' => 'MasterSlaveServerGroupName',
        'requestId'                  => 'RequestId',
        'tags'                       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->masterSlaveBackendServers) {
            $res['MasterSlaveBackendServers'] = null !== $this->masterSlaveBackendServers ? $this->masterSlaveBackendServers->toMap() : null;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->masterSlaveServerGroupName) {
            $res['MasterSlaveServerGroupName'] = $this->masterSlaveServerGroupName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['MasterSlaveBackendServers'])) {
            $model->masterSlaveBackendServers = masterSlaveBackendServers::fromMap($map['MasterSlaveBackendServers']);
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['MasterSlaveServerGroupName'])) {
            $model->masterSlaveServerGroupName = $map['MasterSlaveServerGroupName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
