<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyResponseBody\backupPolicyDetail;
use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupPolicyDetail
     */
    public $backupPolicyDetail;
    protected $_name = [
        'requestId'          => 'RequestId',
        'backupPolicyDetail' => 'BackupPolicyDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupPolicyDetail) {
            $res['BackupPolicyDetail'] = null !== $this->backupPolicyDetail ? $this->backupPolicyDetail->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupPolicyDetail'])) {
            $model->backupPolicyDetail = backupPolicyDetail::fromMap($map['BackupPolicyDetail']);
        }

        return $model;
    }
}
