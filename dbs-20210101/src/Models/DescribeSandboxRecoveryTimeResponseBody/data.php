<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxRecoveryTimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The backup schedule of the sandbox instance.
     *
     * @example 1hxxxx8xxxxxa
     *
     * @var string
     */
    public $backupPlanId;

    /**
     * @description The beginning of the time range during which the sandbox instance can be restored. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-08-01T12:01:01Z
     *
     * @var string
     */
    public $recoveryBeginTime;

    /**
     * @description The end of the time range during which the sandbox instance can be restored. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-08-02T12:01:01Z
     *
     * @var string
     */
    public $recoveryEndTime;
    protected $_name = [
        'backupPlanId'      => 'BackupPlanId',
        'recoveryBeginTime' => 'RecoveryBeginTime',
        'recoveryEndTime'   => 'RecoveryEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->recoveryBeginTime) {
            $res['RecoveryBeginTime'] = $this->recoveryBeginTime;
        }
        if (null !== $this->recoveryEndTime) {
            $res['RecoveryEndTime'] = $this->recoveryEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['RecoveryBeginTime'])) {
            $model->recoveryBeginTime = $map['RecoveryBeginTime'];
        }
        if (isset($map['RecoveryEndTime'])) {
            $model->recoveryEndTime = $map['RecoveryEndTime'];
        }

        return $model;
    }
}
