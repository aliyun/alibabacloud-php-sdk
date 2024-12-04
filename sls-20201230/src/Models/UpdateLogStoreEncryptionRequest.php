<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreEncryptionRequest\userCmkInfo;
use AlibabaCloud\Tea\Model;

class UpdateLogStoreEncryptionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
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
     * @var userCmkInfo
     */
    public $userCmkInfo;
    protected $_name = [
        'enable'      => 'enable',
        'encryptType' => 'encryptType',
        'userCmkInfo' => 'userCmkInfo',
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
            $res['encryptType'] = $this->encryptType;
        }
        if (null !== $this->userCmkInfo) {
            $res['userCmkInfo'] = null !== $this->userCmkInfo ? $this->userCmkInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLogStoreEncryptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['encryptType'])) {
            $model->encryptType = $map['encryptType'];
        }
        if (isset($map['userCmkInfo'])) {
            $model->userCmkInfo = userCmkInfo::fromMap($map['userCmkInfo']);
        }

        return $model;
    }
}
