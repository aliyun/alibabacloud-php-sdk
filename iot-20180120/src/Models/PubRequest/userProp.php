<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PubRequest;

use AlibabaCloud\Tea\Model;

class userProp extends Model
{
    /**
     * @description The custom property key that is specified when you use MQTT 5.0 for communication.
     *
     * This parameter must be used together with the **UserProp.N.Value** parameter.
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The custom property value that is specified when you use MQTT 5.0 for communication.
     *
     * This parameter must be used together with the **UserProp.N.Key** parameter.
     * @example value1
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
     * @return userProp
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
