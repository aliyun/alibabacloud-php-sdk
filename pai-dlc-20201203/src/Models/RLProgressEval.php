<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressEval extends Model
{
    /**
     * @var bool
     */
    public $done;

    /**
     * @var int
     */
    public $finished;

    /**
     * @var float
     */
    public $pct;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $ready;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'done' => 'Done',
        'finished' => 'Finished',
        'pct' => 'Pct',
        'progress' => 'Progress',
        'ready' => 'Ready',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->done) {
            $res['Done'] = $this->done;
        }

        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }

        if (null !== $this->pct) {
            $res['Pct'] = $this->pct;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Done'])) {
            $model->done = $map['Done'];
        }

        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        if (isset($map['Pct'])) {
            $model->pct = $map['Pct'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
