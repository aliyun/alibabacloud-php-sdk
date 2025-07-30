<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class ChangeUserPasswordRequest extends Model
{
    /**
     * @example alice***
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example Admin@12***
     *
     * @var string
     */
    public $newPassword;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'newPassword' => 'NewPassword',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeUserPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }

        return $model;
    }
}
