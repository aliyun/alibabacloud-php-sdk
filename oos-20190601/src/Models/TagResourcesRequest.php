<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class TagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var mixed[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'regionId' => 'RegionId',
        'resourceIds' => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tags' => 'Tags',
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

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                foreach ($this->resourceIds as $key1 => $value1) {
                    $res['ResourceIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
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

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                foreach ($map['ResourceIds'] as $key1 => $value1) {
                    $model->resourceIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
