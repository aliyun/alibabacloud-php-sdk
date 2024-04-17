<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description Indicates whether the tags of the scaling group can be propagated to instances. Valid values:
     *
     *   true: The tags of the scaling group can be propagated to only instances that are newly created.
     *   false: The tags of the scaling group cannot be propagated to instances.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $propagate;

    /**
     * @description The tag key of the scaling group.
     *
     * @example Department
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value of the scaling group.
     *
     * @example Finance
     *
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
