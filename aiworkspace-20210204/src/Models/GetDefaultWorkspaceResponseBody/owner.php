<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceResponseBody;

use AlibabaCloud\Dara\Model;

class owner extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userKp;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'userId' => 'UserId',
        'userKp' => 'UserKp',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
