<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N.
     *
     *   **N** specifies the serial number of the tag. Examples:
     *
     *   **Tag.1.Key** specifies the key of the first tag.
     *   **Tag.2.Key** specifies the key of the second tag.
     *
     *   If no tag key exists, a key is automatically created.
     *
     * @example demokey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N.
     *
     *   **N** specifies the serial number of the tag. Examples:
     *
     *   **Tag.1.Value** specifies the value of the first tag.
     *   **Tag.2.Value** specifies the value of the second tag.
     *
     *   If no tag value exists, a value is automatically created.
     *
     * @example demovalue
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
