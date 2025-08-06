<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListResponseBody\result\modifyUser\name;

class modifyUser extends Model
{
    /**
     * @var name
     */
    public $name;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'name' => 'Name',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->name) {
            $this->name->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = null !== $this->name ? $this->name->toArray($noStream) : $this->name;
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
        if (isset($map['Name'])) {
            $model->name = name::fromMap($map['Name']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
