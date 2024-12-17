<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key.
     *
     * @example Department
     *
     * @var string
     */
    public $key;

    /**
     * @description Specifies whether to propagate the tag that you want to add. Valid values:
     *
     *   true: propagates the tag to new instances.
     *   false: does not propagate the tag to any instance.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $propagate;

    /**
     * @description The tag value.
     *
     * @example Finance
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'       => 'Key',
        'propagate' => 'Propagate',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

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
