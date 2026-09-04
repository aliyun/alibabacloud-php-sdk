<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressSlowDetail extends Model
{
    /**
     * @var float
     */
    public $elapsed;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $ipc;

    /**
     * @var string
     */
    public $isPause;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $outQueue;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $statePresent;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $tokenizerPid;

    /**
     * @var int
     */
    public $workerPid;
    protected $_name = [
        'elapsed' => 'Elapsed',
        'ip' => 'Ip',
        'ipc' => 'Ipc',
        'isPause' => 'IsPause',
        'message' => 'Message',
        'outQueue' => 'OutQueue',
        'pod' => 'Pod',
        'rank' => 'Rank',
        'rid' => 'Rid',
        'statePresent' => 'StatePresent',
        'time' => 'Time',
        'tokenizerPid' => 'TokenizerPid',
        'workerPid' => 'WorkerPid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elapsed) {
            $res['Elapsed'] = $this->elapsed;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipc) {
            $res['Ipc'] = $this->ipc;
        }

        if (null !== $this->isPause) {
            $res['IsPause'] = $this->isPause;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->outQueue) {
            $res['OutQueue'] = $this->outQueue;
        }

        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }

        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->statePresent) {
            $res['StatePresent'] = $this->statePresent;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->tokenizerPid) {
            $res['TokenizerPid'] = $this->tokenizerPid;
        }

        if (null !== $this->workerPid) {
            $res['WorkerPid'] = $this->workerPid;
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
        if (isset($map['Elapsed'])) {
            $model->elapsed = $map['Elapsed'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Ipc'])) {
            $model->ipc = $map['Ipc'];
        }

        if (isset($map['IsPause'])) {
            $model->isPause = $map['IsPause'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OutQueue'])) {
            $model->outQueue = $map['OutQueue'];
        }

        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }

        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['StatePresent'])) {
            $model->statePresent = $map['StatePresent'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TokenizerPid'])) {
            $model->tokenizerPid = $map['TokenizerPid'];
        }

        if (isset($map['WorkerPid'])) {
            $model->workerPid = $map['WorkerPid'];
        }

        return $model;
    }
}
