<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The keys of the tags that are added to resources in the workspace. The tag keys must meet the following conditions:
     *
     *   The number of tag keys that can be added to resources ranges from 1 to 20.
     *   Each tag key can be a maximum of 128 characters in length.
     *   The tag keys cannot start with acs: or aliyun:.
     *   The tag keys cannot contain http:// or https://.
     *
     * @example Env
     *
     * @var string
     */
    public $key;

    /**
     * @description The values of the tags that are added to resources in the workspace. The tag values must meet the following conditions:
     *
     *   The number of tag values that can be added to resources ranges from 1 to 20.
     *   Each tag value can be a maximum of 128 characters in length.
     *   The tag values cannot start with acs:.
     *   The tag values cannot contain http:// or https://.
     *
     * @example Test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
