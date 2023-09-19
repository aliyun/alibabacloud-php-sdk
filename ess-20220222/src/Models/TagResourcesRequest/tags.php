<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the tag that you want to add to the Auto Scaling resource.
     *
     * You cannot specify empty strings as tag keys. The tag key must be 1 to 128 characters in length and cannot contain `http://` or `https://`. The tag key cannot start with `acs:` or `aliyun`.
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description Specifies whether to propagate the tag that you want to add. Valid values:
     *
     *   true: propagates the tag only to instances that are newly created and does not propagate the tag to instances that are already running in the scaling group.
     *   false: does not propagate the tag to any instances.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $propagate;

    /**
     * @description The value of the tag that you want to add to the Auto Scaling resource.
     *
     * You can specify empty strings as tag values. The tag value must be 0 to 128 characters in length and cannot contain `http://` or `https://`. The tag value cannot start with `acs:`.
     * @example TestValue
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
