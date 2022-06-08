<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

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
    public $protectedResourceArn;
    protected $_name = [
        'deletionProtectionDescription' => 'DeletionProtectionDescription',
        'enableDeletionProtection'      => 'EnableDeletionProtection',
        'protectedResourceArn'          => 'ProtectedResourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionProtectionDescription) {
            $res['DeletionProtectionDescription'] = $this->deletionProtectionDescription;
        }
        if (null !== $this->enableDeletionProtection) {
            $res['EnableDeletionProtection'] = $this->enableDeletionProtection;
        }
        if (null !== $this->protectedResourceArn) {
            $res['ProtectedResourceArn'] = $this->protectedResourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeletionProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionProtectionDescription'])) {
            $model->deletionProtectionDescription = $map['DeletionProtectionDescription'];
        }
        if (isset($map['EnableDeletionProtection'])) {
            $model->enableDeletionProtection = $map['EnableDeletionProtection'];
        }
        if (isset($map['ProtectedResourceArn'])) {
            $model->protectedResourceArn = $map['ProtectedResourceArn'];
        }

        return $model;
    }
}
