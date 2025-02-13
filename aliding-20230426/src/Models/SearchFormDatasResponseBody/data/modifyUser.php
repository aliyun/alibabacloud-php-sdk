<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data\modifyUser\userName;

class modifyUser extends Model
{
    /**
     * @var string
     */
    public $userId;
    /**
     * @var userName
     */
    public $userName;
    protected $_name = [
        'userId'   => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (null !== $this->userName) {
            $this->userName->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = null !== $this->userName ? $this->userName->toArray($noStream) : $this->userName;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = userName::fromMap($map['UserName']);
        }

        return $model;
    }
}
