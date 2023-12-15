<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlansResponseBody\backupPlans;
use AlibabaCloud\Tea\Model;

class DescribeBackupPlansResponseBody extends Model
{
    /**
     * @var backupPlans
     */
    public $backupPlans;

    /**
     * @example 200FB963-9359-4CAD-90B7-96395C88FD9D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupPlans' => 'BackupPlans',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlans) {
            $res['BackupPlans'] = null !== $this->backupPlans ? $this->backupPlans->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPlansResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlans'])) {
            $model->backupPlans = backupPlans::fromMap($map['BackupPlans']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
