<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyInfoInRecycleBinResponseBody;

use AlibabaCloud\Tea\Model;

class accessKey extends Model
{
    /**
     * @description The AccessKey ID.
     *
     * @example LTAI4GFTgcR8m8cZQDTH****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The time when the AccessKey pair was created.
     *
     * @example 2020-10-12T09:12:00Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The time when the AccessKey pair will be permanently deleted from the recycle bin.
     *
     * @example 2020-11-12T10:12:00Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The time when the AccessKey pair was deleted and moved to the recycle bin.
     *
     * @example 2020-10-12T10:12:00Z
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

    /**
     * @description Indicates whether the RAM user to which the AccessKey pair belongs is in the recycle bin. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $userRecycled;
    protected $_name = [
        'accessKeyId'       => 'AccessKeyId',
        'createDate'        => 'CreateDate',
        'deleteDate'        => 'DeleteDate',
        'recycleDate'       => 'RecycleDate',
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
        'userRecycled'      => 'UserRecycled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
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
        if (null !== $this->userRecycled) {
            $res['UserRecycled'] = $this->userRecycled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
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
        if (isset($map['UserRecycled'])) {
            $model->userRecycled = $map['UserRecycled'];
        }

        return $model;
    }
}
