<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var int
     */
    public $maxExecuteCount;

    /**
     * @var int
     */
    public $maxResultCount;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $roleNames;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $uid;

    /**
     * @var string
     */
    public $uidString;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'maxExecuteCount' => 'MaxExecuteCount',
        'maxResultCount' => 'MaxResultCount',
        'mobile' => 'Mobile',
        'roleNames' => 'RoleNames',
        'tid' => 'Tid',
        'uid' => 'Uid',
        'uidString' => 'UidString',
        'userNick' => 'UserNick',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxExecuteCount) {
            $res['MaxExecuteCount'] = $this->maxExecuteCount;
        }

        if (null !== $this->maxResultCount) {
            $res['MaxResultCount'] = $this->maxResultCount;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->roleNames) {
            $res['RoleNames'] = $this->roleNames;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->uidString) {
            $res['UidString'] = $this->uidString;
        }

        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
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
        if (isset($map['MaxExecuteCount'])) {
            $model->maxExecuteCount = $map['MaxExecuteCount'];
        }

        if (isset($map['MaxResultCount'])) {
            $model->maxResultCount = $map['MaxResultCount'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['RoleNames'])) {
            $model->roleNames = $map['RoleNames'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UidString'])) {
            $model->uidString = $map['UidString'];
        }

        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
