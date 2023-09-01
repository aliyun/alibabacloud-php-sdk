<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

class owner extends Model
{
    /**
     * @example mings****t
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1157******94123
     *
     * @var string
     */
    public $userId;

    /**
     * @example 1157******94123
     *
     * @var string
     */
    public $userKp;

    /**
     * @example mings****t
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'displayName' => 'DisplayName',
        'userId'      => 'UserId',
        'userKp'      => 'UserKp',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
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
