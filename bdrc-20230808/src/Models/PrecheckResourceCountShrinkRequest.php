<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class PrecheckResourceCountShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tagResourceMatchersShrink;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'tagResourceMatchersShrink' => 'TagResourceMatchers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tagResourceMatchersShrink) {
            $res['TagResourceMatchers'] = $this->tagResourceMatchersShrink;
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
            $model->tagResourceMatchersShrink = $map['TagResourceMatchers'];
        }

        return $model;
    }
}
