<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class taskStats extends Model
{
    /**
     * @var int
     */
    public $nrUninterruptible;

    /**
     * @var int
     */
    public $nrRunning;

    /**
     * @var int
     */
    public $nrSleeping;

    /**
     * @var int
     */
    public $nrIoWait;

    /**
     * @var int
     */
    public $nrStopped;
    protected $_name = [
        'nrUninterruptible' => 'NrUninterruptible',
        'nrRunning'         => 'NrRunning',
        'nrSleeping'        => 'NrSleeping',
        'nrIoWait'          => 'NrIoWait',
        'nrStopped'         => 'NrStopped',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nrUninterruptible) {
            $res['NrUninterruptible'] = $this->nrUninterruptible;
        }
        if (null !== $this->nrRunning) {
            $res['NrRunning'] = $this->nrRunning;
        }
        if (null !== $this->nrSleeping) {
            $res['NrSleeping'] = $this->nrSleeping;
        }
        if (null !== $this->nrIoWait) {
            $res['NrIoWait'] = $this->nrIoWait;
        }
        if (null !== $this->nrStopped) {
            $res['NrStopped'] = $this->nrStopped;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NrUninterruptible'])) {
            $model->nrUninterruptible = $map['NrUninterruptible'];
        }
        if (isset($map['NrRunning'])) {
            $model->nrRunning = $map['NrRunning'];
        }
        if (isset($map['NrSleeping'])) {
            $model->nrSleeping = $map['NrSleeping'];
        }
        if (isset($map['NrIoWait'])) {
            $model->nrIoWait = $map['NrIoWait'];
        }
        if (isset($map['NrStopped'])) {
            $model->nrStopped = $map['NrStopped'];
        }

        return $model;
    }
}
