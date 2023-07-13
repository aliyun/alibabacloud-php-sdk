<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteUsersRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The name of the user N that you want to delete. Valid values of N: 1 to 100.
     *
     * You can call the [ListUsers](~~188572~~) operation to query the users of the cluster.
     * @example user1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
