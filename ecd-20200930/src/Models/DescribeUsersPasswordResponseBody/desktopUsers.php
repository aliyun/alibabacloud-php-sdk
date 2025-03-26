<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordResponseBody;

use AlibabaCloud\Dara\Model;

class desktopUsers extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'displayName' => 'DisplayName',
        'endUserId' => 'EndUserId',
        'password' => 'Password',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
