<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsResponseBody\tagSets;

use AlibabaCloud\Tea\Model;

class tagSet extends Model
{
    /**
     * @description The number of instances to which the tag is added.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The tag key.
     *
     * @example test
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value.
     *
     * @example api
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'instanceCount' => 'InstanceCount',
        'tagKey'        => 'TagKey',
        'tagValue'      => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
