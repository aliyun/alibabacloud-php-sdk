<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlansResponseBody\backupPlans;
use AlibabaCloud\Tea\Model;

class DescribeBackupPlansResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupPlans
     */
    public $backupPlans;
    protected $_name = [
        'requestId'   => 'RequestId',
        'backupPlans' => 'BackupPlans',
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
        if (null !== $this->backupPlans) {
            $res['BackupPlans'] = null !== $this->backupPlans ? $this->backupPlans->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupPlans'])) {
            $model->backupPlans = backupPlans::fromMap($map['BackupPlans']);
        }

        return $model;
    }
}
