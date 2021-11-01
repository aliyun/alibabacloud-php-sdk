<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ChangePasswordRequest
     */
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
