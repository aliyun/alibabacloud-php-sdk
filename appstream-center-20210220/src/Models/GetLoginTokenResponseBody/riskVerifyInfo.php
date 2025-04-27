<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Dara\Model;

class riskVerifyInfo extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $lastLockDuration;

    /**
     * @var bool
     */
    public $locked;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'email' => 'Email',
        'lastLockDuration' => 'LastLockDuration',
        'locked' => 'Locked',
        'phone' => 'Phone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
