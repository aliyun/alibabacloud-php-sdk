<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails\modelDetail\tags;

use AlibabaCloud\Tea\Model;

class tagInfo extends Model
{
    /**
     * @description The tag key.
     *
     * @example ENV
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     * @example ST4
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

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
     * @return tagInfo
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
