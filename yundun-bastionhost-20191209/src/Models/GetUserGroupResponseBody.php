<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupResponseBody\userGroup;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userGroup) {
            $res['UserGroup'] = null !== $this->userGroup ? $this->userGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserGroupResponseBody
     */
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
