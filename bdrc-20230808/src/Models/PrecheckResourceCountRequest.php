<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BDRC\V20230808\Models\PrecheckResourceCountRequest\tagResourceMatchers;

class PrecheckResourceCountRequest extends Model
{
    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var tagResourceMatchers[]
     */
    public $tagResourceMatchers;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'tagResourceMatchers' => 'TagResourceMatchers',
    ];

    public function validate()
    {
        if (\is_array($this->tagResourceMatchers)) {
            Model::validateArray($this->tagResourceMatchers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tagResourceMatchers) {
            if (\is_array($this->tagResourceMatchers)) {
                $res['TagResourceMatchers'] = [];
                $n1 = 0;
                foreach ($this->tagResourceMatchers as $item1) {
                    $res['TagResourceMatchers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['TagResourceMatchers'])) {
            if (!empty($map['TagResourceMatchers'])) {
                $model->tagResourceMatchers = [];
                $n1 = 0;
                foreach ($map['TagResourceMatchers'] as $item1) {
                    $model->tagResourceMatchers[$n1] = tagResourceMatchers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
