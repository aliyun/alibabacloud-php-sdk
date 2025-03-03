<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class EnableResourceDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $enableMode;
    /**
     * @var string
     */
    public $MAName;
    /**
     * @var string
     */
    public $MASecureMobilePhone;
    /**
     * @var string
     */
    public $verificationCode;
    protected $_name = [
        'enableMode'          => 'EnableMode',
        'MAName'              => 'MAName',
        'MASecureMobilePhone' => 'MASecureMobilePhone',
        'verificationCode'    => 'VerificationCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableMode) {
            $res['EnableMode'] = $this->enableMode;
        }

        if (null !== $this->MAName) {
            $res['MAName'] = $this->MAName;
        }

        if (null !== $this->MASecureMobilePhone) {
            $res['MASecureMobilePhone'] = $this->MASecureMobilePhone;
        }

        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
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
        if (isset($map['EnableMode'])) {
            $model->enableMode = $map['EnableMode'];
        }

        if (isset($map['MAName'])) {
            $model->MAName = $map['MAName'];
        }

        if (isset($map['MASecureMobilePhone'])) {
            $model->MASecureMobilePhone = $map['MASecureMobilePhone'];
        }

        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        return $model;
    }
}
