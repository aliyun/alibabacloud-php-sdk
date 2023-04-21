<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordResponseBody;

use AlibabaCloud\Tea\Model;

class desktopUsers extends Model
{
    /**
     * @description The display name of the user.
     *
     * @example alice_1365*****
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the end user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The password of the user.
     *
     * @example tes123
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'displayName' => 'DisplayName',
        'endUserId'   => 'EndUserId',
        'password'    => 'Password',
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
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
