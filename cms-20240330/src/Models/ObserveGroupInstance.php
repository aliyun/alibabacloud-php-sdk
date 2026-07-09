<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveGroupInstance extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string[]
     */
    public $dimension;

    /**
     * @var string
     */
    public $entityDomain;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'category' => 'category',
        'dimension' => 'dimension',
        'entityDomain' => 'entityDomain',
        'entityType' => 'entityType',
        'groupId' => 'groupId',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'tags' => 'tags',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->dimension)) {
            Model::validateArray($this->dimension);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->dimension) {
            if (\is_array($this->dimension)) {
                $res['dimension'] = [];
                foreach ($this->dimension as $key1 => $value1) {
                    $res['dimension'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->entityDomain) {
            $res['entityDomain'] = $this->entityDomain;
        }

        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['dimension'])) {
            if (!empty($map['dimension'])) {
                $model->dimension = [];
                foreach ($map['dimension'] as $key1 => $value1) {
                    $model->dimension[$key1] = $value1;
                }
            }
        }

        if (isset($map['entityDomain'])) {
            $model->entityDomain = $map['entityDomain'];
        }

        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
