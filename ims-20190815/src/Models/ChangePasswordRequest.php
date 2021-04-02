<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ChangePasswordRequest extends Model
{
    /**
     * @var string
     */
    public $oldPassword;

    /**
     * @var string
     */
    public $newPassword;
    protected $_name = [
        'oldPassword' => 'OldPassword',
        'newPassword' => 'NewPassword',
    ];

    public function validate()
    {
        Model::validateRequired('oldPassword', $this->oldPassword, true);
        Model::validateRequired('newPassword', $this->newPassword, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oldPassword) {
            $res['OldPassword'] = $this->oldPassword;
        }
        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
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
        if (isset($map['OldPassword'])) {
            $model->oldPassword = $map['OldPassword'];
        }
        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }

        return $model;
    }
}
