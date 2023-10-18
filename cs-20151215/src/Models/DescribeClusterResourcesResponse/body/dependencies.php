<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @description 依赖资源的集群ID。
     *
     * @example cc5ee03f63e43425cb6f71f1a1756****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 依赖资源类型。
     *
     * @example ALIYUN::VPC::NatGateway
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 依赖资源实例ID。
     *
     * @example ngw-wz9sphwk42sdtjixo****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clusterId'    => 'cluster_id',
        'resourceType' => 'resource_type',
        'instanceId'   => 'instance_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        return $model;
    }
}
