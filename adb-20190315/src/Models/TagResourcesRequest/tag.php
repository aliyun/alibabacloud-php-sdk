<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag. If you want to add multiple tags to a single cluster at a time, click **Add** and enter tag keys and values.
     *
     * > You can add up to 20 tags at a time.
     * @example testkey1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag. If you want to add multiple tags to a single cluster at a time, click **Add** and enter tag keys and values.
     *
     * > You can add up to 20 tags at a time.
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
