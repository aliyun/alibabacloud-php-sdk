<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class RemoveUsersRequest extends Model
{
    /**
     * @description The usernames of the convenience users that you want to remove.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'users' => 'Users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
