<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlanResponseBody\backupPlan;
use AlibabaCloud\Tea\Model;

class DescribeBackupPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupPlan
     */
    public $backupPlan;
    protected $_name = [
        'requestId'  => 'RequestId',
        'backupPlan' => 'BackupPlan',
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
        if (null !== $this->backupPlan) {
            $res['BackupPlan'] = null !== $this->backupPlan ? $this->backupPlan->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupPlan'])) {
            $model->backupPlan = backupPlan::fromMap($map['BackupPlan']);
        }

        return $model;
    }
}
