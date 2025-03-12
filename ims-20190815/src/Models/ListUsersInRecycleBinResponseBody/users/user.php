<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersInRecycleBinResponseBody\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The time when the RAM user was created.
     *
     * @example 2020-10-12T09:12:00Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The time when the RAM user will be permanently deleted from the recycle bin.
     *
     * @example 2020-11-15T09:12:00Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The display name of the RAM user.
     *
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the RAM user was deleted and moved to the recycle bin.
     *
     * @example 2020-10-15T09:12:00Z
     *
     * @var string
     */
    public $recycleDate;

    /**
     * @description The ID of the RAM user.
     *
     * @example 20732900249392****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The logon name of the RAM user.
     *
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'createDate'        => 'CreateDate',
        'deleteDate'        => 'DeleteDate',
        'displayName'       => 'DisplayName',
        'recycleDate'       => 'RecycleDate',
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->recycleDate) {
            $res['RecycleDate'] = $this->recycleDate;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['RecycleDate'])) {
            $model->recycleDate = $map['RecycleDate'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
