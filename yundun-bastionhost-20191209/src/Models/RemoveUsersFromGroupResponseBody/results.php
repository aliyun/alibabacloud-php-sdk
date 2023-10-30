<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveUsersFromGroupResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description RemoveUsersFromGroup
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description WB01014029
     *
     * @var string
     */
    public $message;

    /**
     * @description RemoveUsersFromGroup
     *
     * @example 1
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'userGroupId' => 'UserGroupId',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
