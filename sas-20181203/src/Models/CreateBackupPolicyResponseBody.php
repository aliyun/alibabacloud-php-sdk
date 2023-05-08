<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyResponseBody\backupPolicy;
use AlibabaCloud\Tea\Model;

class CreateBackupPolicyResponseBody extends Model
{
    /**
     * @var backupPolicy
     */
    public $backupPolicy;

    /**
     * @example 24A20733-10A0-4AF6-BE6B-E3322413BB68
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupPolicy' => 'BackupPolicy',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPolicy) {
            $res['BackupPolicy'] = null !== $this->backupPolicy ? $this->backupPolicy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPolicy'])) {
            $model->backupPolicy = backupPolicy::fromMap($map['BackupPolicy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
