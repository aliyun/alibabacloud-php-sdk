<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectUsersResponseBody\data\users;

class data extends Model
{
    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'users' => 'users',
    ];

    public function validate()
    {
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['users'] = [];
                $n1           = 0;
                foreach ($this->users as $item1) {
                    $res['users'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['users'])) {
            if (!empty($map['users'])) {
                $model->users = [];
                $n1           = 0;
                foreach ($map['users'] as $item1) {
                    $model->users[$n1++] = users::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
