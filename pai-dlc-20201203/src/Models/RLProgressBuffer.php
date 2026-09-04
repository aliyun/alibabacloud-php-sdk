<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressBuffer extends Model
{
    /**
     * @var int
     */
    public $consumed;

    /**
     * @var RLProgressBufferDetail[]
     */
    public $detail;

    /**
     * @var int
     */
    public $etaSec;

    /**
     * @var float
     */
    public $fillRatePerMin;

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
    public $ready;

    /**
     * @var int
     */
    public $target;

    /**
     * @var int
     */
    public $trainBatchSize;

    /**
     * @var bool
     */
    public $training;
    protected $_name = [
        'consumed' => 'Consumed',
        'detail' => 'Detail',
        'etaSec' => 'EtaSec',
        'fillRatePerMin' => 'FillRatePerMin',
        'finished' => 'Finished',
        'pct' => 'Pct',
        'ready' => 'Ready',
        'target' => 'Target',
        'trainBatchSize' => 'TrainBatchSize',
        'training' => 'Training',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumed) {
            $res['Consumed'] = $this->consumed;
        }

        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                $n1 = 0;
                foreach ($this->detail as $item1) {
                    $res['Detail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->etaSec) {
            $res['EtaSec'] = $this->etaSec;
        }

        if (null !== $this->fillRatePerMin) {
            $res['FillRatePerMin'] = $this->fillRatePerMin;
        }

        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }

        if (null !== $this->pct) {
            $res['Pct'] = $this->pct;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->trainBatchSize) {
            $res['TrainBatchSize'] = $this->trainBatchSize;
        }

        if (null !== $this->training) {
            $res['Training'] = $this->training;
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
        if (isset($map['Consumed'])) {
            $model->consumed = $map['Consumed'];
        }

        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n1 = 0;
                foreach ($map['Detail'] as $item1) {
                    $model->detail[$n1] = RLProgressBufferDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EtaSec'])) {
            $model->etaSec = $map['EtaSec'];
        }

        if (isset($map['FillRatePerMin'])) {
            $model->fillRatePerMin = $map['FillRatePerMin'];
        }

        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        if (isset($map['Pct'])) {
            $model->pct = $map['Pct'];
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TrainBatchSize'])) {
            $model->trainBatchSize = $map['TrainBatchSize'];
        }

        if (isset($map['Training'])) {
            $model->training = $map['Training'];
        }

        return $model;
    }
}
