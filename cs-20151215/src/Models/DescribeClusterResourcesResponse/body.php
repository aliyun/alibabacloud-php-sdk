<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 资源创建时间。
     *
     * @var string
     */
    public $created;

    /**
     * @description 资源实例ID。
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 资源元信息。
     *
     * @var string
     */
    public $resourceInfo;

    /**
     * @description 资源类型。
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 资源状态。
     *
     * @var string
     */
    public $state;

    /**
     * @description 是否为自动创建。
     *
     * @var int
     */
    public $autoCreate;
    protected $_name = [
        'clusterId'    => 'cluster_id',
        'created'      => 'created',
        'instanceId'   => 'instance_id',
        'resourceInfo' => 'resource_info',
        'resourceType' => 'resource_type',
        'state'        => 'state',
        'autoCreate'   => 'auto_create',
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
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->resourceInfo) {
            $res['resource_info'] = $this->resourceInfo;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->autoCreate) {
            $res['auto_create'] = $this->autoCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['resource_info'])) {
            $model->resourceInfo = $map['resource_info'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['auto_create'])) {
            $model->autoCreate = $map['auto_create'];
        }

        return $model;
    }
}
