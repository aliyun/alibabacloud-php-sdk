<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key that you want to add to the scaling group.
     *
     * @example Department
     *
     * @var string
     */
    public $key;

    /**
     * @description Specifies whether to propagate the tag that you want to add to the scaling group. Valid values:
     *
     *   true: propagates the tag to only instances that are newly created.
     *   false: does not propagate the tag to any instances.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $propagate;

    /**
     * @description The tag value that you want to add to the scaling group.
     *
     * @example Finance
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'propagate' => 'Propagate',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->propagate) {
            $res['Propagate'] = $this->propagate;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Propagate'])) {
            $model->propagate = $map['Propagate'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
