<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientsResponseBody\users;

class DescribeUserOnlineClientsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var users
     */
    public $users;
    protected $_name = [
        'requestId' => 'RequestId',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (null !== $this->users) {
            $this->users->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toArray($noStream) : $this->users;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Users'])) {
            $model->users = users::fromMap($map['Users']);
        }

        return $model;
    }
}
