<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class EncryptConf extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var EncryptUserCmkConf
     */
    public $userCmkInfo;
    protected $_name = [
        'enable' => 'enable',
        'encryptType' => 'encrypt_type',
        'userCmkInfo' => 'user_cmk_info',
    ];

    public function validate()
    {
        if (null !== $this->userCmkInfo) {
            $this->userCmkInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->encryptType) {
            $res['encrypt_type'] = $this->encryptType;
        }

        if (null !== $this->userCmkInfo) {
            $res['user_cmk_info'] = null !== $this->userCmkInfo ? $this->userCmkInfo->toArray($noStream) : $this->userCmkInfo;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['encrypt_type'])) {
            $model->encryptType = $map['encrypt_type'];
        }

        if (isset($map['user_cmk_info'])) {
            $model->userCmkInfo = EncryptUserCmkConf::fromMap($map['user_cmk_info']);
        }

        return $model;
    }
}
