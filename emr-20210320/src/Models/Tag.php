<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Tag extends Model
{
    /**
     * @description 标签键。必填参数，不允许为空字符串。最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或https://。
     *
     * This parameter is required.
     * @example department
     *
     * @var string
     */
    public $key;

    /**
     * @description 标签值。非必填，可以为空字符串。最多支持128个字符，不能以acs:开头，不能包含http://或者https://。
     *
     * @example IT
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
     * @return Tag
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
