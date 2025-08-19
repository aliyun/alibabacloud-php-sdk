<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;

class EnableResourceDirectoryRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

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
        'dryRun' => 'DryRun',
        'enableMode' => 'EnableMode',
        'MAName' => 'MAName',
        'MASecureMobilePhone' => 'MASecureMobilePhone',
        'verificationCode' => 'VerificationCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

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
