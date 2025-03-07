<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N.
     *
     * @example test-key
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N.
     *
     * @example test-value
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
