<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForApplicationResponseBody\users\applicationRoles;

class users extends Model
{
    /**
     * @var applicationRoles[]
     */
    public $applicationRoles;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicationRoles' => 'ApplicationRoles',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationRoles)) {
            Model::validateArray($this->applicationRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationRoles) {
            if (\is_array($this->applicationRoles)) {
                $res['ApplicationRoles'] = [];
                $n1 = 0;
                foreach ($this->applicationRoles as $item1) {
                    $res['ApplicationRoles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ApplicationRoles'])) {
            if (!empty($map['ApplicationRoles'])) {
                $model->applicationRoles = [];
                $n1 = 0;
                foreach ($map['ApplicationRoles'] as $item1) {
                    $model->applicationRoles[$n1] = applicationRoles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
