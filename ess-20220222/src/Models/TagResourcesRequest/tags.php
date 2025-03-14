<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key.
     *
     * You cannot specify an empty string as a tag key. The tag key can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. The tag key cannot contain `http://` or `https://`.
     *
     * @example TestKey
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
     *
     * @example false
     *
     * @var bool
     */
    public $propagate;

    /**
     * @description The tag value.
     *
     * You can specify empty strings as tag values. The tag value can be up to 128 characters in length and cannot contain `http://` or `https://`.
     *
     * @example TestValue
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
