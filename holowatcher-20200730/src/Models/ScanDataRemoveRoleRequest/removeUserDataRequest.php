<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataRemoveRoleRequest;

use AlibabaCloud\Tea\Model;

class removeUserDataRequest extends Model
{
    /**
     * @description 会员手机号码
     *
     * @var string
     */
    public $userMobNum;

    /**
     * @description 会员昵称
     *
     * @var string
     */
    public $userNick;

    /**
     * @description 会员类型，目前只支持TB淘宝
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'userMobNum' => 'UserMobNum',
        'userNick'   => 'UserNick',
        'userType'   => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userMobNum) {
            $res['UserMobNum'] = $this->userMobNum;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removeUserDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserMobNum'])) {
            $model->userMobNum = $map['UserMobNum'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
