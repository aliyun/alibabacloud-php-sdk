<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class ChangeUserPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $newPassword;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'newPassword' => 'NewPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
