<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyResponseBody\backupPolicy;

class CreateBackupPolicyResponseBody extends Model
{
    /**
     * @var backupPolicy
     */
    public $backupPolicy;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupPolicy' => 'BackupPolicy',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->backupPolicy) {
            $this->backupPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPolicy) {
            $res['BackupPolicy'] = null !== $this->backupPolicy ? $this->backupPolicy->toArray($noStream) : $this->backupPolicy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupPolicy'])) {
            $model->backupPolicy = backupPolicy::fromMap($map['BackupPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
