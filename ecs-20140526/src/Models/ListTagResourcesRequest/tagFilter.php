<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tagFilter extends Model
{
    /**
     * @var string[]
     */
    public $tagValues;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'tagValues' => 'TagValues',
        'tagKey'    => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValues) {
            $res['TagValues'] = $this->tagValues;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = $map['TagValues'];
            }
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
