<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class SetSecurityInfoPreferenceRequest extends Model
{
    /**
     * @var bool
     */
    public $allowUserManageSecurityEmail;

    /**
     * @var string
     */
    public $directoryId;
    protected $_name = [
        'allowUserManageSecurityEmail' => 'AllowUserManageSecurityEmail',
        'directoryId' => 'DirectoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserManageSecurityEmail) {
            $res['AllowUserManageSecurityEmail'] = $this->allowUserManageSecurityEmail;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
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
        if (isset($map['AllowUserManageSecurityEmail'])) {
            $model->allowUserManageSecurityEmail = $map['AllowUserManageSecurityEmail'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        return $model;
    }
}
