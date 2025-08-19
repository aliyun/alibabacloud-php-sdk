<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

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
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all' => 'all',
        'regionId' => 'region_id',
        'resourceIds' => 'resource_ids',
        'resourceType' => 'resource_type',
        'tagKeys' => 'tag_keys',
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
        if (null !== $this->all) {
            $res['all'] = $this->all;
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

        if (null !== $this->tagKeys) {
            if (\is_array($this->tagKeys)) {
                $res['tag_keys'] = [];
                $n1 = 0;
                foreach ($this->tagKeys as $item1) {
                    $res['tag_keys'][$n1] = $item1;
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
        if (isset($map['all'])) {
            $model->all = $map['all'];
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

        if (isset($map['tag_keys'])) {
            if (!empty($map['tag_keys'])) {
                $model->tagKeys = [];
                $n1 = 0;
                foreach ($map['tag_keys'] as $item1) {
                    $model->tagKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
