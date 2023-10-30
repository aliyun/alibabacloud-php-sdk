<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserGroupResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserGroupResponseBody\results\hostAccountNames;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The return code that indicates whether the call was successful. Valid values:
     *
     *   **OK**: The call was successful.
     *   **UNEXPECTED**: An unknown error occurred.
     *   **INVALID_ARGUMENT**: A request parameter is invalid.
     *   **OBJECT_NOT_FOUND**: The specified object on which you want to perform the operation does not exist.
     *   **OBJECT_AlREADY_EXISTS**: The specified object on which you want to perform the operation already exists.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The result of revoking permissions on the specified host accounts from the user group.
     *
     * @var hostAccountNames[]
     */
    public $hostAccountNames;

    /**
     * @description The ID of the host group.
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description This parameter is deprecated.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the group.
     *
     * @example 1
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'code'             => 'Code',
        'hostAccountNames' => 'HostAccountNames',
        'hostGroupId'      => 'HostGroupId',
        'message'          => 'Message',
        'userGroupId'      => 'UserGroupId',
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
        if (null !== $this->hostAccountNames) {
            $res['HostAccountNames'] = [];
            if (null !== $this->hostAccountNames && \is_array($this->hostAccountNames)) {
                $n = 0;
                foreach ($this->hostAccountNames as $item) {
                    $res['HostAccountNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = [];
                $n                       = 0;
                foreach ($map['HostAccountNames'] as $item) {
                    $model->hostAccountNames[$n++] = null !== $item ? hostAccountNames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
