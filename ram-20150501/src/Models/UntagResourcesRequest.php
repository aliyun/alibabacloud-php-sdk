<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string[]
     */
    public $resourceNames;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all' => 'All',
        'resourceNames' => 'ResourceNames',
        'resourceType' => 'ResourceType',
        'tagKeys' => 'TagKeys',
    ];

    public function validate()
    {
        if (\is_array($this->resourceNames)) {
            Model::validateArray($this->resourceNames);
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
            $res['All'] = $this->all;
        }

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

        if (null !== $this->tagKeys) {
            if (\is_array($this->tagKeys)) {
                $res['TagKeys'] = [];
                $n1 = 0;
                foreach ($this->tagKeys as $item1) {
                    $res['TagKeys'][$n1++] = $item1;
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
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }

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

        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = [];
                $n1 = 0;
                foreach ($map['TagKeys'] as $item1) {
                    $model->tagKeys[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
