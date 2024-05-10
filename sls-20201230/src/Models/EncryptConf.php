<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class EncryptConf extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $enable;

    /**
     * @example default
     *
     * @var string
     */
    public $encryptType;

    /**
     * @var EncryptUserCmkConf
     */
    public $userCmkInfo;
    protected $_name = [
        'enable'      => 'enable',
        'encryptType' => 'encrypt_type',
        'userCmkInfo' => 'user_cmk_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->encryptType) {
            $res['encrypt_type'] = $this->encryptType;
        }
        if (null !== $this->userCmkInfo) {
            $res['user_cmk_info'] = null !== $this->userCmkInfo ? $this->userCmkInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptConf
     */
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
