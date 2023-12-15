<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlanResponseBody\backupPlan;
use AlibabaCloud\Tea\Model;

class DescribeBackupPlanResponseBody extends Model
{
    /**
     * @var backupPlan
     */
    public $backupPlan;

    /**
     * @example 0EA95AA2-860C-42CB-97CF-78CA3937E0D5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupPlan' => 'BackupPlan',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlan) {
            $res['BackupPlan'] = null !== $this->backupPlan ? $this->backupPlan->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlan'])) {
            $model->backupPlan = backupPlan::fromMap($map['BackupPlan']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
