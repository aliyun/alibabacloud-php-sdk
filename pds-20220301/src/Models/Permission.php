<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\Permission\actionList;
use AlibabaCloud\Tea\Model;

class Permission extends Model
{
    /**
     * @var actionList[]
     */
    public $actionList;

    /**
     * @var string
     */
    public $collection;

    /**
     * @var PermissionCondition
     */
    public $condition;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string[]
     */
    public $userTags;
    protected $_name = [
        'actionList'   => 'action_list',
        'collection'   => 'collection',
        'condition'    => 'condition',
        'createdAt'    => 'created_at',
        'effect'       => 'effect',
        'identityId'   => 'identity_id',
        'identityType' => 'identity_type',
        'resource'     => 'resource',
        'resourceType' => 'resource_type',
        'updatedAt'    => 'updated_at',
        'userTags'     => 'user_tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['action_list'] = [];
            if (null !== $this->actionList && \is_array($this->actionList)) {
                $n = 0;
                foreach ($this->actionList as $item) {
                    $res['action_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->collection) {
            $res['collection'] = $this->collection;
        }
        if (null !== $this->condition) {
            $res['condition'] = null !== $this->condition ? $this->condition->toMap() : null;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->identityId) {
            $res['identity_id'] = $this->identityId;
        }
        if (null !== $this->identityType) {
            $res['identity_type'] = $this->identityType;
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->userTags) {
            $res['user_tags'] = $this->userTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Permission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_list'])) {
            if (!empty($map['action_list'])) {
                $model->actionList = [];
                $n                 = 0;
                foreach ($map['action_list'] as $item) {
                    $model->actionList[$n++] = null !== $item ? actionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['collection'])) {
            $model->collection = $map['collection'];
        }
        if (isset($map['condition'])) {
            $model->condition = PermissionCondition::fromMap($map['condition']);
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['identity_id'])) {
            $model->identityId = $map['identity_id'];
        }
        if (isset($map['identity_type'])) {
            $model->identityType = $map['identity_type'];
        }
        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['user_tags'])) {
            if (!empty($map['user_tags'])) {
                $model->userTags = $map['user_tags'];
            }
        }

        return $model;
    }
}
