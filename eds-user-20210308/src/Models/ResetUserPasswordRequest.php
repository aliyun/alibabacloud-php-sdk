<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class ResetUserPasswordRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $notifyType;

    /**
     * @example test1
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'notifyType' => 'NotifyType',
        'users'      => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetUserPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
