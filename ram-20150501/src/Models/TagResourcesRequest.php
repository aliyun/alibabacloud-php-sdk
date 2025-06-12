<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\TagResourcesRequest\tag;

class TagResourcesRequest extends Model
{
    /**
     * @var string[]
     */
    public $resourceNames;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'resourceNames' => 'ResourceNames',
        'resourceType' => 'ResourceType',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->resourceNames)) {
            Model::validateArray($this->resourceNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceNames) {
            if (\is_array($this->resourceNames)) {
                $res['ResourceNames'] = [];
                $n1 = 0;
                foreach ($this->resourceNames as $item1) {
                    $res['ResourceNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourceNames'])) {
            if (!empty($map['ResourceNames'])) {
                $model->resourceNames = [];
                $n1 = 0;
                foreach ($map['ResourceNames'] as $item1) {
                    $model->resourceNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
