<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var bool
     */
    public $propagate;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'propagate' => 'Propagate',
        'tagKey'    => 'TagKey',
        'tagValue'  => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propagate) {
            $res['Propagate'] = $this->propagate;
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
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Propagate'])) {
            $model->propagate = $map['Propagate'];
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
