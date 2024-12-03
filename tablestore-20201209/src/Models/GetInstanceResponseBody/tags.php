<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key.
     *
     * @example tag
     *
     * @var string
     */
    public $key;

    /**
     * @description (Deprecated) The tag key.
     *
     * @example keyTestA
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description (Deprecated) The tag value.
     *
     * @example 00004a20240452b0
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description The tag value.
     *
     * @example 333
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'      => 'Key',
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
        'value'    => 'Value',
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
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
