<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos;

use AlibabaCloud\Tea\Model;

class userQuotaInfos extends Model
{
    /**
     * @description The maximum number of files that a user can create in the directory.
     *
     * @example 10000
     *
     * @var int
     */
    public $fileCountLimit;

    /**
     * @description The total number of files that a user has created in the directory.
     *
     * @example 5100
     *
     * @var int
     */
    public $fileCountReal;

    /**
     * @description The type of the quota. Valid values: Accounting and Enforcement.
     *
     * @example Accounting
     *
     * @var string
     */
    public $quotaType;

    /**
     * @description The maximum size of files that a user can create in the directory. Unit: GiB.
     *
     * @example 1024
     *
     * @var int
     */
    public $sizeLimit;

    /**
     * @description The total size of files that a user has created in the directory. Unit: GiB.
     *
     * @example 800
     *
     * @var int
     */
    public $sizeReal;

    /**
     * @description The ID of the user that you specify to create a quota for the directory. The value depends on the value of the UserType parameter. Valid values: Uid and Gid.
     *
     * @example 500
     *
     * @var string
     */
    public $userId;

    /**
     * @description The type of the user ID. Valid values: Uid, Gid, and AllUsers.
     *
     *   If the parameter is set to Uid or Gid, the value of the UserId parameter is returned.
     *   If the parameter is set to AllUsers, the value of the UserID parameter is empty.
     *
     * @example Uid
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'fileCountLimit' => 'FileCountLimit',
        'fileCountReal'  => 'FileCountReal',
        'quotaType'      => 'QuotaType',
        'sizeLimit'      => 'SizeLimit',
        'sizeReal'       => 'SizeReal',
        'userId'         => 'UserId',
        'userType'       => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }
        if (null !== $this->fileCountReal) {
            $res['FileCountReal'] = $this->fileCountReal;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }
        if (null !== $this->sizeReal) {
            $res['SizeReal'] = $this->sizeReal;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userQuotaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }
        if (isset($map['FileCountReal'])) {
            $model->fileCountReal = $map['FileCountReal'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }
        if (isset($map['SizeReal'])) {
            $model->sizeReal = $map['SizeReal'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
