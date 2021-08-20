<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result\mergeRequestSetting;

use AlibabaCloud\Tea\Model;

class defaultAssignees extends Model
{
    /**
     * @description 姓名
     *
     * @var string
     */
    public $name;

    /**
     * @description 云效用户ID
     *
     * @var string
     */
    public $externUid;

    /**
     * @description 头像地址
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @description 用户ID
     *
     * @var int
     */
    public $id;

    /**
     * @description 邮箱
     *
     * @var string
     */
    public $email;
    protected $_name = [
        'name'      => 'Name',
        'externUid' => 'ExternUid',
        'avatarUrl' => 'AvatarUrl',
        'id'        => 'Id',
        'email'     => 'Email',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->externUid) {
            $res['ExternUid'] = $this->externUid;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultAssignees
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ExternUid'])) {
            $model->externUid = $map['ExternUid'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        return $model;
    }
}
