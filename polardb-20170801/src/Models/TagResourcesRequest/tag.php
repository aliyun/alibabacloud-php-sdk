<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag. To create multiple tags for a cluster at a time, click **Add** to add tag keys.
     *
     * >  You can create up to 20 tags at a time. A tag consists of a key and a value. Each value of `Tag.N.Key` is paired with a value of `Tag.N.Value`.
     * @example type
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag. To create multiple tags for a cluster at a time, click **Add** to add tag values.
     *
     * >  You can create up to 20 tags at a time. A tag consists of a key and a value. Each value of `Tag.N.Value` is paired with a value of `Tag.N.Key`.
     * @example test
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
