<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body\associatedObject;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body\deleteBehavior;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body\dependencies;

class body extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceInfo;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $autoCreate;

    /**
     * @var dependencies[]
     */
    public $dependencies;

    /**
     * @var associatedObject
     */
    public $associatedObject;

    /**
     * @var deleteBehavior
     */
    public $deleteBehavior;

    /**
     * @var string
     */
    public $creatorType;

    /**
     * @var mixed[]
     */
    public $extraInfo;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'created' => 'created',
        'instanceId' => 'instance_id',
        'resourceInfo' => 'resource_info',
        'resourceType' => 'resource_type',
        'state' => 'state',
        'autoCreate' => 'auto_create',
        'dependencies' => 'dependencies',
        'associatedObject' => 'associated_object',
        'deleteBehavior' => 'delete_behavior',
        'creatorType' => 'creator_type',
        'extraInfo' => 'extra_info',
    ];

    public function validate()
    {
        if (\is_array($this->dependencies)) {
            Model::validateArray($this->dependencies);
        }
        if (null !== $this->associatedObject) {
            $this->associatedObject->validate();
        }
        if (null !== $this->deleteBehavior) {
            $this->deleteBehavior->validate();
        }
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dependencies)) {
                $res['dependencies'] = [];
                $n1 = 0;
                foreach ($this->dependencies as $item1) {
                    $res['dependencies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->associatedObject) {
            $res['associated_object'] = null !== $this->associatedObject ? $this->associatedObject->toArray($noStream) : $this->associatedObject;
        }

        if (null !== $this->deleteBehavior) {
            $res['delete_behavior'] = null !== $this->deleteBehavior ? $this->deleteBehavior->toArray($noStream) : $this->deleteBehavior;
        }

        if (null !== $this->creatorType) {
            $res['creator_type'] = $this->creatorType;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['extra_info'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['extra_info'][$key1] = $value1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['dependencies'] as $item1) {
                    $model->dependencies[$n1] = dependencies::fromMap($item1);
                    ++$n1;
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
            if (!empty($map['extra_info'])) {
                $model->extraInfo = [];
                foreach ($map['extra_info'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
