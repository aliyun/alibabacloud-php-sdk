<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsBackupPlanResponseBody\backupPlan;

class DescribePrinsBackupPlanResponseBody extends Model
{
    /**
     * @var backupPlan
     */
    public $backupPlan;

    /**
     * @var bool
     */
    public $ossHint;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupPlan' => 'BackupPlan',
        'ossHint' => 'OssHint',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->backupPlan) {
            $this->backupPlan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPlan) {
            $res['BackupPlan'] = null !== $this->backupPlan ? $this->backupPlan->toArray($noStream) : $this->backupPlan;
        }

        if (null !== $this->ossHint) {
            $res['OssHint'] = $this->ossHint;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlan'])) {
            $model->backupPlan = backupPlan::fromMap($map['BackupPlan']);
        }

        if (isset($map['OssHint'])) {
            $model->ossHint = $map['OssHint'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
