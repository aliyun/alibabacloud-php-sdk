<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class SetDeletionProtectionRequest extends Model
{
    /**
     * @description The description of deletion protection.
     *
     * >  This parameter takes effect only when you set the EnableDeletionProtection parameter to true.
     * @example This key is being used by XXX service. You are protected from deletion.
     *
     * @var string
     */
    public $deletionProtectionDescription;

    /**
     * @description Specifies whether to enable deletion protection. Valid values:
     *
     *   true: enables deletion protection.
     *   false: disables deletion protection.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDeletionProtection;

    /**
     * @description The ARN of the CMK for which you want to set deletion protection.
     *
     * You can call the [DescribeKey](~~28952~~) operation to query the CMK ARN.
     * @example acs:kms:cn-hangzhou:123213123****:key/0225f411-b21d-46d1-be5b-93931c82****
     *
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
