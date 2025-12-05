<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class SetDeletionProtectionRequest extends Model
{
    /**
     * @var string
     */
    public $deletionProtectionDescription;

    /**
     * @var bool
     */
    public $enableDeletionProtection;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $protectedResourceArn;
    protected $_name = [
        'deletionProtectionDescription' => 'DeletionProtectionDescription',
        'enableDeletionProtection' => 'EnableDeletionProtection',
        'keyId' => 'KeyId',
        'protectedResourceArn' => 'ProtectedResourceArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletionProtectionDescription) {
            $res['DeletionProtectionDescription'] = $this->deletionProtectionDescription;
        }

        if (null !== $this->enableDeletionProtection) {
            $res['EnableDeletionProtection'] = $this->enableDeletionProtection;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->protectedResourceArn) {
            $res['ProtectedResourceArn'] = $this->protectedResourceArn;
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
        if (isset($map['DeletionProtectionDescription'])) {
            $model->deletionProtectionDescription = $map['DeletionProtectionDescription'];
        }

        if (isset($map['EnableDeletionProtection'])) {
            $model->enableDeletionProtection = $map['EnableDeletionProtection'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['ProtectedResourceArn'])) {
            $model->protectedResourceArn = $map['ProtectedResourceArn'];
        }

        return $model;
    }
}
