<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $tagKeys;

    /**
     * @var int
     */
    public $tagOwnerUid;
    protected $_name = [
        'regionId' => 'RegionId',
        'category' => 'category',
        'resourceIds' => 'resourceIds',
        'resourceType' => 'resourceType',
        'tagKeys' => 'tagKeys',
        'tagOwnerUid' => 'tagOwnerUid',
    ];

    public function validate()
    {
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->tagKeys)) {
            Model::validateArray($this->tagKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->tagKeys) {
            if (\is_array($this->tagKeys)) {
                $res['tagKeys'] = [];
                $n1 = 0;
                foreach ($this->tagKeys as $item1) {
                    $res['tagKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagOwnerUid) {
            $res['tagOwnerUid'] = $this->tagOwnerUid;
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

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['tagKeys'])) {
            if (!empty($map['tagKeys'])) {
                $model->tagKeys = [];
                $n1 = 0;
                foreach ($map['tagKeys'] as $item1) {
                    $model->tagKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tagOwnerUid'])) {
            $model->tagOwnerUid = $map['tagOwnerUid'];
        }

        return $model;
    }
}
