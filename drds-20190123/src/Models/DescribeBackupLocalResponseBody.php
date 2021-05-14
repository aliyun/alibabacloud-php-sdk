<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalResponseBody\backupPolicyDO;
use AlibabaCloud\Tea\Model;

class DescribeBackupLocalResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupPolicyDO
     */
    public $backupPolicyDO;
    protected $_name = [
        'success'        => 'Success',
        'requestId'      => 'RequestId',
        'backupPolicyDO' => 'BackupPolicyDO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupPolicyDO) {
            $res['BackupPolicyDO'] = null !== $this->backupPolicyDO ? $this->backupPolicyDO->toMap() : null;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupPolicyDO'])) {
            $model->backupPolicyDO = backupPolicyDO::fromMap($map['BackupPolicyDO']);
        }

        return $model;
    }
}
