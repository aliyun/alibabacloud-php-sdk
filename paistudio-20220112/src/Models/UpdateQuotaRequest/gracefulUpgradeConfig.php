<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateQuotaRequest;

use AlibabaCloud\Dara\Model;

class gracefulUpgradeConfig extends Model
{
    /**
     * @var int
     */
    public $drainTimeoutSeconds;

    /**
     * @var string
     */
    public $maxUnavailable;

    /**
     * @var int
     */
    public $taskDrainReserveWorkers;
    protected $_name = [
        'drainTimeoutSeconds' => 'DrainTimeoutSeconds',
        'maxUnavailable' => 'MaxUnavailable',
        'taskDrainReserveWorkers' => 'TaskDrainReserveWorkers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drainTimeoutSeconds) {
            $res['DrainTimeoutSeconds'] = $this->drainTimeoutSeconds;
        }

        if (null !== $this->maxUnavailable) {
            $res['MaxUnavailable'] = $this->maxUnavailable;
        }

        if (null !== $this->taskDrainReserveWorkers) {
            $res['TaskDrainReserveWorkers'] = $this->taskDrainReserveWorkers;
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
        if (isset($map['DrainTimeoutSeconds'])) {
            $model->drainTimeoutSeconds = $map['DrainTimeoutSeconds'];
        }

        if (isset($map['MaxUnavailable'])) {
            $model->maxUnavailable = $map['MaxUnavailable'];
        }

        if (isset($map['TaskDrainReserveWorkers'])) {
            $model->taskDrainReserveWorkers = $map['TaskDrainReserveWorkers'];
        }

        return $model;
    }
}
