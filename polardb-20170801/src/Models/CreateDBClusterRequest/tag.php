<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description Tag key. If you need to add multiple tags to the target cluster at once, click **Add** to add a tag key.
     *
     * > Up to 20 pairs of tags can be added each time, where `Tag.N.Key` corresponds to `Tag.N.Value`.
     * @example type
     *
     * @var string
     */
    public $key;

    /**
     * @description Tag value. If you need to add multiple tags to the target cluster at once, click **Add** to add tag values.
     *
     * > Up to 20 pairs of tags can be added each time, where `Tag.N.Value` corresponds to `Tag.N.Key`.
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
