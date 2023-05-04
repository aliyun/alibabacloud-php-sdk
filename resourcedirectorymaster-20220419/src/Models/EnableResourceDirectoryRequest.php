<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class EnableResourceDirectoryRequest extends Model
{
    /**
     * @example CurrentAccount
     *
     * @var string
     */
    public $enableMode;

    /**
     * @example user01@rdadmin.aliyunid.com
     *
     * @var string
     */
    public $MAName;

    /**
     * @example xx-13900001234
     *
     * @var string
     */
    public $MASecureMobilePhone;

    /**
     * @example 123456
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return EnableResourceDirectoryRequest
     */
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
