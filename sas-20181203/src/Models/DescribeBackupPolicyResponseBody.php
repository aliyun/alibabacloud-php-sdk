<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyResponseBody\backupPolicyDetail;
use AlibabaCloud\Tea\Model;

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
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPolicyDetail) {
            $res['BackupPolicyDetail'] = null !== $this->backupPolicyDetail ? $this->backupPolicyDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPolicyResponseBody
     */
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
