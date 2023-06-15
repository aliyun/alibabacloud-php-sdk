<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag. You can use this parameter to add tags to the instance.
     *
     *   If the specified tag key is an existing key, the system directly adds the tag key to the instance. You can call the [ListTagResources](~~141258~~) operation to query the details of the existing tags.
     *   If the specified tag key is not an existing key, the system creates the tag key and adds the tag key to the instance.
     *   A tag key cannot be an empty string.
     *   This parameter must be used together with **Tag.Value**.
     *
     * @example testkey1
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value that is associated with the specified tag key. You can use this parameter to add tags to the instance.
     *
     *   If the specified tag value is found in the specified tag key, the system directly adds the tag value to the instance. You can call the [ListTagResources](~~141258~~) operation to query the details of the existing tags.
     *   If the specified tag value is not found in the specified tag key, the system creates the tag value and adds the tag value to the instance.
     *   This parameter must be used together with **Tag.Key**.
     *
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
