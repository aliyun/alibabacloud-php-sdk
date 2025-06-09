<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesRequest\tags;

class ListTagResourcesRequest extends Model
{
    /**
     * @var string[]
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->resourceId)) {
            Model::validateArray($this->resourceId);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceId) {
            if (\is_array($this->resourceId)) {
                $res['resourceId'] = [];
                $n1 = 0;
                foreach ($this->resourceId as $item1) {
                    $res['resourceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = [];
                $n1 = 0;
                foreach ($map['resourceId'] as $item1) {
                    $model->resourceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
