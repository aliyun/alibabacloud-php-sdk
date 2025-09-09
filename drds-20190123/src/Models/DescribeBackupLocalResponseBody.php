<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalResponseBody\backupPolicyDO;

class DescribeBackupLocalResponseBody extends Model
{
    /**
     * @var backupPolicyDO
     */
    public $backupPolicyDO;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'backupPolicyDO' => 'BackupPolicyDO',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->backupPolicyDO) {
            $this->backupPolicyDO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPolicyDO) {
            $res['BackupPolicyDO'] = null !== $this->backupPolicyDO ? $this->backupPolicyDO->toArray($noStream) : $this->backupPolicyDO;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['BackupPolicyDO'])) {
            $model->backupPolicyDO = backupPolicyDO::fromMap($map['BackupPolicyDO']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
