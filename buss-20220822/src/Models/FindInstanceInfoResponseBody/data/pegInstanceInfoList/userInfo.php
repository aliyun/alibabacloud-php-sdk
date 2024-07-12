<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody\data\pegInstanceInfoList;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @var string
     */
    public $gcLevel;

    /**
     * @var string
     */
    public $hitWhiteReason;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userSite;

    /**
     * @var bool
     */
    public $whiteUser;
    protected $_name = [
        'gcLevel'        => 'GcLevel',
        'hitWhiteReason' => 'HitWhiteReason',
        'userId'         => 'UserId',
        'userSite'       => 'UserSite',
        'whiteUser'      => 'WhiteUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gcLevel) {
            $res['GcLevel'] = $this->gcLevel;
        }
        if (null !== $this->hitWhiteReason) {
            $res['HitWhiteReason'] = $this->hitWhiteReason;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userSite) {
            $res['UserSite'] = $this->userSite;
        }
        if (null !== $this->whiteUser) {
            $res['WhiteUser'] = $this->whiteUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GcLevel'])) {
            $model->gcLevel = $map['GcLevel'];
        }
        if (isset($map['HitWhiteReason'])) {
            $model->hitWhiteReason = $map['HitWhiteReason'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserSite'])) {
            $model->userSite = $map['UserSite'];
        }
        if (isset($map['WhiteUser'])) {
            $model->whiteUser = $map['WhiteUser'];
        }

        return $model;
    }
}
