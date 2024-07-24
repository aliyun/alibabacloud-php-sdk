<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body\associatedObject;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body\deleteBehavior;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body\dependencies;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The cluster ID.
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
     * @description The resource ID.
     *
     * @example lb-wz9poz4r0ymh8u0uf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The resource information. For more information about how to query the source information about the resource, see [ListStackResources](https://help.aliyun.com/document_detail/133836.html).
     *
     * @example {\\"Id\\":\\"k8s_master_slb\\",\\"Name\\":\\"k8s_master_slb\\",\\"Type\\":\\"ALIYUN::SLB::LoadBalancer\\",\\"Status\\":\\"CREATE_COMPLETE\\",\\"StatusReason\\":\\"state changed\\",\\"Updated\\":\\"2020-05-21T13:25:02\\",\\"PhysicalId\\":\\"lb-wz9poz4r0ymh8u0uf****\\"}
     *
     * @var string
     */
    public $resourceInfo;

    /**
     * @description The resource type.
     *
     * @example ALIYUN::SLB::LoadBalancer
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The resource status. Valid values:
     *
     *   `CREATE_COMPLETE`: the resource is created.
     *   `CREATE_FAILED`: the resource failed to be created.
     *   `CREATE_IN_PROGRESS`: the resource is being created.
     *   `DELETE_FAILED`: the resource failed to be deleted.
     *   `DELETE_IN_PROGRESS`: the resource is being deleted.
     *   `ROLLBACK_COMPLETE`: the resource is rolled back.
     *   `ROLLBACK_FAILED`: the resource failed to be rolled back.
     *   `ROLLBACK_IN_PROGRESS`: the resource is being rolled back.
     *
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $state;

    /**
     * @description Specifies whether the resource is created by Container Service for Kubernetes (ACK). Valid values:
     *
     *   1: the resource is created by ACK.
     *   0: the resource is an existing resource.
     *
     * @example 1
     *
     * @var int
     */
    public $autoCreate;

    /**
     * @description The dependent resources.
     *
     * @var dependencies[]
     */
    public $dependencies;

    /**
     * @description The Kubernetes object with which the resource is associated.
     *
     * @var associatedObject
     */
    public $associatedObject;

    /**
     * @description The deletion behavior of the resource when the cluster is deleted.
     *
     * @var deleteBehavior
     */
    public $deleteBehavior;

    /**
     * @description The type of the resource creator. Valid values:
     *
     *   user: the resource is created by the user.
     *   system: the resource is created by the ACK management system.
     *   addon: the resource is created by a cluster component.
     *
     * @example addon
     *
     * @var string
     */
    public $creatorType;

    /**
     * @description The additional information about the resource.
     *
     * @example {"IP": "xx.xx.xx.xx"}
     *
     * @var mixed[]
     */
    public $extraInfo;
    protected $_name = [
        'clusterId'        => 'cluster_id',
        'created'          => 'created',
        'instanceId'       => 'instance_id',
        'resourceInfo'     => 'resource_info',
        'resourceType'     => 'resource_type',
        'state'            => 'state',
        'autoCreate'       => 'auto_create',
        'dependencies'     => 'dependencies',
        'associatedObject' => 'associated_object',
        'deleteBehavior'   => 'delete_behavior',
        'creatorType'      => 'creator_type',
        'extraInfo'        => 'extra_info',
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
        if (null !== $this->dependencies) {
            $res['dependencies'] = [];
            if (null !== $this->dependencies && \is_array($this->dependencies)) {
                $n = 0;
                foreach ($this->dependencies as $item) {
                    $res['dependencies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->associatedObject) {
            $res['associated_object'] = null !== $this->associatedObject ? $this->associatedObject->toMap() : null;
        }
        if (null !== $this->deleteBehavior) {
            $res['delete_behavior'] = null !== $this->deleteBehavior ? $this->deleteBehavior->toMap() : null;
        }
        if (null !== $this->creatorType) {
            $res['creator_type'] = $this->creatorType;
        }
        if (null !== $this->extraInfo) {
            $res['extra_info'] = $this->extraInfo;
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
        if (isset($map['dependencies'])) {
            if (!empty($map['dependencies'])) {
                $model->dependencies = [];
                $n                   = 0;
                foreach ($map['dependencies'] as $item) {
                    $model->dependencies[$n++] = null !== $item ? dependencies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['associated_object'])) {
            $model->associatedObject = associatedObject::fromMap($map['associated_object']);
        }
        if (isset($map['delete_behavior'])) {
            $model->deleteBehavior = deleteBehavior::fromMap($map['delete_behavior']);
        }
        if (isset($map['creator_type'])) {
            $model->creatorType = $map['creator_type'];
        }
        if (isset($map['extra_info'])) {
            $model->extraInfo = $map['extra_info'];
        }

        return $model;
    }
}
