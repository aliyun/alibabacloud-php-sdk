<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag.
     *
     * N specifies the serial number of the tag. The following example shows how to calculate consumption intervals:
     *
     * - **Tag.1.Key** specifies the key of the first tag.
     * - **Tag.2.Key** specifies the key of the second tag.
     * @example Development team
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag.
     *
     * N specifies the serial number of the tag. The following example shows how to calculate consumption intervals:
     *
     * - **Tag.1.Value** specifies the value of the first tag.
     * - **Tag.2.Value** specifies the value of the second tag.
     * @example MongoDB 4.0 environment
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
