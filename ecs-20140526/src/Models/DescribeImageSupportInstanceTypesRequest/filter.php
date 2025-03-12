<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description Filter N used to filter instance types.
     *
     * @example imageId
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the image.
     *
     * @example m-o6w3gy99qf89rkga****
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
     * @return filter
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
