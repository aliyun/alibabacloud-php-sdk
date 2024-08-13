<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Tea\Model;

class riskVerifyInfo extends Model
{
    /**
     * @description The email used for authentication.
     *
     * @example user@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The duration of the lock.
     *
     * @example 1713749778
     *
     * @var int
     */
    public $lastLockDuration;

    /**
     * @description Whether the account is locked or not.
     *
     * @example true
     *
     * @var string
     */
    public $locked;

    /**
     * @description The mobile number used for authentication.
     *
     * @example 1388888****
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'email'            => 'Email',
        'lastLockDuration' => 'LastLockDuration',
        'locked'           => 'Locked',
        'phone'            => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->lastLockDuration) {
            $res['LastLockDuration'] = $this->lastLockDuration;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskVerifyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['LastLockDuration'])) {
            $model->lastLockDuration = $map['LastLockDuration'];
        }
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
