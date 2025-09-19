<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyResponseBody\backupPolicyDetail;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var backupPolicyDetail
     */
    public $backupPolicyDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupPolicyDetail' => 'BackupPolicyDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->backupPolicyDetail) {
            $this->backupPolicyDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPolicyDetail) {
            $res['BackupPolicyDetail'] = null !== $this->backupPolicyDetail ? $this->backupPolicyDetail->toArray($noStream) : $this->backupPolicyDetail;
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
        if (isset($map['BackupPolicyDetail'])) {
            $model->backupPolicyDetail = backupPolicyDetail::fromMap($map['BackupPolicyDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
