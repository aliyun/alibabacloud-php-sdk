<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListResponseBody\result;

use AlibabaCloud\Dara\Model;

class usersModel extends Model
{
    /**
     * @var string[]
     */
    public $userGroups;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'userGroups' => 'UserGroups',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->userGroups)) {
            Model::validateArray($this->userGroups);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userGroups) {
            if (\is_array($this->userGroups)) {
                $res['UserGroups'] = [];
                $n1 = 0;
                foreach ($this->userGroups as $item1) {
                    $res['UserGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1++] = $item1;
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
        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n1 = 0;
                foreach ($map['UserGroups'] as $item1) {
                    $model->userGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
