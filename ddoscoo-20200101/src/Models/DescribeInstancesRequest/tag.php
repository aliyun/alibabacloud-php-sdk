<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag that is added to the instance to query. You can specify up to 200 tag keys. When you specify tags, take note of the following rules:
     *
     *   Each tag consists of a key (**Key**) and a value (**Value**), which are separated with a comma (,).
     *   Separate multiple tags with commas (,).
     *
     * >  The tag key (**Key**) and tag value (**Value**) must be specified in pairs.
     * @example test-key
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that is added to the instance to query. You can specify up to 200 tag values. When you specify tags, take note of the following rules:
     *
     *   Each tag consists of a key (**Key**) and a value (**Value**), which are separated with a comma (,).
     *   Separate multiple tags with commas (,).
     *
     * >  The tag key (**Key**) and tag value (**Value**) must be specified in pairs.
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
