<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSandboxRecoveryTimeRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;
    protected $_name = [
        'backupPlanId' => 'BackupPlanId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSandboxRecoveryTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }

        return $model;
    }
}
