<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key of the elastic container instance.
     *
     * The tag key cannot be an empty string. The tag key can be up to 128 characters in length. It cannot start with `acs:` or `aliyun` or contain `http://` or `https://`.
     * @example version
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the elastic container instance.
     *
     * The tag value can be an empty string. The tag value can be up to 128 characters in length. It cannot start with `acs:` and cannot contain `http://` or `https://`.
     * @example 3
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
