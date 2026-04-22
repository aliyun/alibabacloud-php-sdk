<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceAccountRequest extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'accountStatus' => 'accountStatus',
        'password' => 'password',
        'remark' => 'remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['accountStatus'] = $this->accountStatus;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['accountStatus'])) {
            $model->accountStatus = $map['accountStatus'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
