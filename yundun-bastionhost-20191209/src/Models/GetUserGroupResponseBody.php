<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupResponseBody\userGroup;
use AlibabaCloud\Tea\Model;

class GetUserGroupResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the user group returned.
     *
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
