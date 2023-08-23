<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectUsersResponseBody\data;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The name of the user.
     *
     * @example userA
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'name' => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
