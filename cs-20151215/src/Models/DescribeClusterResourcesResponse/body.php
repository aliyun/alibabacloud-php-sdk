<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example cb95aa626a47740afbf6aa099b65****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the resource was created.
     *
     * @example 2020-09-11T10:11:54+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The ID of the resource.
     *
     * @example lb-wz9poz4r0ymh8u0uf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The information about the resource. For more information about how to query the source information about a resource, see [ListStackResources](~~133836~~).
     *
     * @example {\"Id\":\"k8s_master_slb\",\"Name\":\"k8s_master_slb\",\"Type\":\"ALIYUN::SLB::LoadBalancer\",\"Status\":\"CREATE_COMPLETE\",\"StatusReason\":\"state changed\",\"Updated\":\"2020-05-21T13:25:02\",\"PhysicalId\":\"lb-wz9poz4r0ymh8u0uf****\"}
     *
     * @var string
     */
    public $resourceInfo;

    /**
     * @description The type of resource.
     *
     * @example ALIYUN::SLB::LoadBalancer
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the resource. Valid values:
     *
     *   `CREATE_COMPLETE`: The resource is created.
     *   `CREATE_FAILED`: The resource failed to be created.
     *   `CREATE_IN_PROGRESS`: The resource is being created.
     *   `DELETE_FAILED`: The resource failed to be deleted.
     *   `DELETE_IN_PROGRESS`: The resource is being deleted.
     *   `ROLLBACK_COMPLETE`: The resource is rolled back.
     *   `ROLLBACK_FAILED`: The resource failed to be rolled back.
     *   `ROLLBACK_IN_PROGRESS`: The resource is being rolled back.
     *
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $state;

    /**
     * @description Indicates whether the resource is created by Container Service for Kubernetes (ACK). Valid values:
     *
     *   1: The resource is created by ACK.
     *   0: The resource is an existing resource.
     *
     * @example 1
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
