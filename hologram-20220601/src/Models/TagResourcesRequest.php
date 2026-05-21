<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\TagResourcesRequest\tags;

class TagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var int
     */
    public $tagOwnerUid;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'category' => 'category',
        'resourceIds' => 'resourceIds',
        'tagOwnerUid' => 'tagOwnerUid',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['resourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['resourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagOwnerUid) {
            $res['tagOwnerUid'] = $this->tagOwnerUid;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['resourceIds'])) {
            if (!empty($map['resourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['resourceIds'] as $item1) {
                    $model->resourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tagOwnerUid'])) {
            $model->tagOwnerUid = $map['tagOwnerUid'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
