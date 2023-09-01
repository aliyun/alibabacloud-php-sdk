<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

class owner extends Model
{
    /**
     * @example 17915******4216
     *
     * @var string
     */
    public $userId;

    /**
     * @example 17915******4216
     *
     * @var string
     */
    public $userKp;

    /**
     * @example username
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'userId'   => 'UserId',
        'userKp'   => 'UserKp',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userKp) {
            $res['UserKp'] = $this->userKp;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return owner
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserKp'])) {
            $model->userKp = $map['UserKp'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
