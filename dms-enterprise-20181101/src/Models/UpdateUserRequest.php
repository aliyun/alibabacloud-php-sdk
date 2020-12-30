<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
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
    public $userNick;

    /**
     * @var string
     */
    public $roleNames;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $maxExecuteCount;

    /**
     * @var int
     */
    public $maxResultCount;
    protected $_name = [
        'tid'             => 'Tid',
        'uid'             => 'Uid',
        'userNick'        => 'UserNick',
        'roleNames'       => 'RoleNames',
        'mobile'          => 'Mobile',
        'maxExecuteCount' => 'MaxExecuteCount',
        'maxResultCount'  => 'MaxResultCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->roleNames) {
            $res['RoleNames'] = $this->roleNames;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->maxExecuteCount) {
            $res['MaxExecuteCount'] = $this->maxExecuteCount;
        }
        if (null !== $this->maxResultCount) {
            $res['MaxResultCount'] = $this->maxResultCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['RoleNames'])) {
            $model->roleNames = $map['RoleNames'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['MaxExecuteCount'])) {
            $model->maxExecuteCount = $map['MaxExecuteCount'];
        }
        if (isset($map['MaxResultCount'])) {
            $model->maxResultCount = $map['MaxResultCount'];
        }

        return $model;
    }
}
