<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @example supplierName
     *
     * @var string
     */
    public $key;

    /**
     * @example cmj0000000
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
