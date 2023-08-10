<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key.
     *
     * >
     *   N specifies the serial number of the tag. For example, Tag.1.Key specifies the key of the first tag and Tag.2.Key specifies the key of the second tag.
     *   This parameter cannot be an empty string.
     *
     * @example testkey1
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     * >
     *   N specifies the serial number of the tag. For example, Tag.1.Value specifies the value of the first tag and Tag.2.Value specifies the value of the second tag.
     *   This parameter can be an empty string.
     *
     * @example testvalue1
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
     * @return tag
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
