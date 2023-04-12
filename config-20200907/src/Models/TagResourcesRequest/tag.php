<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key of the resource.
     *
     * You can specify up to 20 tag keys.
     * @example Env
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the resource.
     *
     * You can specify up to 20 tag values.
     * @example prod
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
