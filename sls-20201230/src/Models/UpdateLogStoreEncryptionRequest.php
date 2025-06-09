<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreEncryptionRequest\userCmkInfo;

class UpdateLogStoreEncryptionRequest extends Model
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
     * @var userCmkInfo
     */
    public $userCmkInfo;
    protected $_name = [
        'enable' => 'enable',
        'encryptType' => 'encryptType',
        'userCmkInfo' => 'userCmkInfo',
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
            $res['encryptType'] = $this->encryptType;
        }

        if (null !== $this->userCmkInfo) {
            $res['userCmkInfo'] = null !== $this->userCmkInfo ? $this->userCmkInfo->toArray($noStream) : $this->userCmkInfo;
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

        if (isset($map['encryptType'])) {
            $model->encryptType = $map['encryptType'];
        }

        if (isset($map['userCmkInfo'])) {
            $model->userCmkInfo = userCmkInfo::fromMap($map['userCmkInfo']);
        }

        return $model;
    }
}
