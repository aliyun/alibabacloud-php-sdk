<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerStatsSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $otherWorkers;

    /**
     * @var int
     */
    public $runningWorkers;

    /**
     * @var int
     */
    public $stoppedWorkers;

    /**
     * @var int
     */
    public $totalWorkers;
    protected $_name = [
        'otherWorkers' => 'OtherWorkers',
        'runningWorkers' => 'RunningWorkers',
        'stoppedWorkers' => 'StoppedWorkers',
        'totalWorkers' => 'TotalWorkers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->otherWorkers) {
            $res['OtherWorkers'] = $this->otherWorkers;
        }

        if (null !== $this->runningWorkers) {
            $res['RunningWorkers'] = $this->runningWorkers;
        }

        if (null !== $this->stoppedWorkers) {
            $res['StoppedWorkers'] = $this->stoppedWorkers;
        }

        if (null !== $this->totalWorkers) {
            $res['TotalWorkers'] = $this->totalWorkers;
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
        if (isset($map['OtherWorkers'])) {
            $model->otherWorkers = $map['OtherWorkers'];
        }

        if (isset($map['RunningWorkers'])) {
            $model->runningWorkers = $map['RunningWorkers'];
        }

        if (isset($map['StoppedWorkers'])) {
            $model->stoppedWorkers = $map['StoppedWorkers'];
        }

        if (isset($map['TotalWorkers'])) {
            $model->totalWorkers = $map['TotalWorkers'];
        }

        return $model;
    }
}
