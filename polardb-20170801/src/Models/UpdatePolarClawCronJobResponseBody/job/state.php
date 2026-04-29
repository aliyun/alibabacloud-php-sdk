<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\UpdatePolarClawCronJobResponseBody\job;

use AlibabaCloud\Dara\Model;

class state extends Model
{
    /**
     * @var int
     */
    public $consecutiveErrors;

    /**
     * @var int
     */
    public $lastRunAtMs;

    /**
     * @var string
     */
    public $lastRunStatus;

    /**
     * @var int
     */
    public $nextRunAtMs;
    protected $_name = [
        'consecutiveErrors' => 'ConsecutiveErrors',
        'lastRunAtMs' => 'LastRunAtMs',
        'lastRunStatus' => 'LastRunStatus',
        'nextRunAtMs' => 'NextRunAtMs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consecutiveErrors) {
            $res['ConsecutiveErrors'] = $this->consecutiveErrors;
        }

        if (null !== $this->lastRunAtMs) {
            $res['LastRunAtMs'] = $this->lastRunAtMs;
        }

        if (null !== $this->lastRunStatus) {
            $res['LastRunStatus'] = $this->lastRunStatus;
        }

        if (null !== $this->nextRunAtMs) {
            $res['NextRunAtMs'] = $this->nextRunAtMs;
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
        if (isset($map['ConsecutiveErrors'])) {
            $model->consecutiveErrors = $map['ConsecutiveErrors'];
        }

        if (isset($map['LastRunAtMs'])) {
            $model->lastRunAtMs = $map['LastRunAtMs'];
        }

        if (isset($map['LastRunStatus'])) {
            $model->lastRunStatus = $map['LastRunStatus'];
        }

        if (isset($map['NextRunAtMs'])) {
            $model->nextRunAtMs = $map['NextRunAtMs'];
        }

        return $model;
    }
}
