<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountRoleResponseBody\cloudAccountRole;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountRoleResponseBody\cloudAccountRole\cloudAccountRoleHealthCheckResult\errorReason;

class cloudAccountRoleHealthCheckResult extends Model
{
    /**
     * @var errorReason
     */
    public $errorReason;

    /**
     * @var int
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'errorReason' => 'ErrorReason',
        'lastCheckTime' => 'LastCheckTime',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->errorReason) {
            $this->errorReason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorReason) {
            $res['ErrorReason'] = null !== $this->errorReason ? $this->errorReason->toArray($noStream) : $this->errorReason;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['ErrorReason'])) {
            $model->errorReason = errorReason::fromMap($map['ErrorReason']);
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
