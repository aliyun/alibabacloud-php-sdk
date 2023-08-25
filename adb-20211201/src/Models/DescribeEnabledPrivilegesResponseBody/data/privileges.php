<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEnabledPrivilegesResponseBody\data;

use AlibabaCloud\Tea\Model;

class privileges extends Model
{
    /**
     * @description The description of the permission.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the permission.
     *
     * @example select
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'description' => 'Description',
        'key'         => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
