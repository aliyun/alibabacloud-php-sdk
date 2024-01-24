<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalResponseBody\backupPolicyDO;
use AlibabaCloud\Tea\Model;

class DescribeBackupLocalResponseBody extends Model
{
    /**
     * @description The information about the backup policy.
     *
     * @var backupPolicyDO
     */
    public $backupPolicyDO;

    /**
     * @description The ID of the request.
     *
     * @example FDC9CFD5-306D-4A23-9D8C-057274C6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the request.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'backupPolicyDO' => 'BackupPolicyDO',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPolicyDO) {
            $res['BackupPolicyDO'] = null !== $this->backupPolicyDO ? $this->backupPolicyDO->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupLocalResponseBody
     */
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
