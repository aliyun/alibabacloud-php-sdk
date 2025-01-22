<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserGroupResponseBody\userGroup;

class GetUserGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var userGroup
     */
    public $userGroup;
    protected $_name = [
        'requestId' => 'RequestId',
        'userGroup' => 'UserGroup',
    ];

    public function validate()
    {
        if (null !== $this->userGroup) {
            $this->userGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userGroup) {
            $res['UserGroup'] = null !== $this->userGroup ? $this->userGroup->toArray($noStream) : $this->userGroup;
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

        if (isset($map['UserGroup'])) {
            $model->userGroup = userGroup::fromMap($map['UserGroup']);
        }

        return $model;
    }
}
