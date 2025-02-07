<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class ChangePasswordRequest extends Model
{
    /**
     * @var string
     */
    public $newPassword;
    /**
     * @var string
     */
    public $oldPassword;
    protected $_name = [
        'newPassword' => 'NewPassword',
        'oldPassword' => 'OldPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
        }

        if (null !== $this->oldPassword) {
            $res['OldPassword'] = $this->oldPassword;
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
        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }

        if (isset($map['OldPassword'])) {
            $model->oldPassword = $map['OldPassword'];
        }

        return $model;
    }
}
