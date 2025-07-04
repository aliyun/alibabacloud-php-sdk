<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'nextToken' => 'next_token',
        'regionId' => 'region_id',
        'resourceIds' => 'resource_ids',
        'resourceType' => 'resource_type',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['resource_ids'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['resource_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }

        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        if (isset($map['resource_ids'])) {
            if (!empty($map['resource_ids'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['resource_ids'] as $item1) {
                    $model->resourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
