<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag that you want to create for the cluster. To create multiple tags for a cluster at a time, click the **+** icon.
     *
     * > You can create up to 20 key-value pairs of tags at a time. Each value of the `Tag.N.Key` parameter is paired with a value of the `Tag.N.Value` parameter.
     * @example type
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that you want to create for the cluster. To create multiple tags for a cluster at a time, click the **+** icon.
     *
     * > You can create up to 20 key-value pairs of tags at a time. Each value of the `Tag.N.Value` parameter is paired with a value of the `Tag.N.Key` parameter.
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
