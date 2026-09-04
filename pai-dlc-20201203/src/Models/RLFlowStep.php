<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowStep extends Model
{
    /**
     * @var float
     */
    public $bufferWaitP50;

    /**
     * @var float
     */
    public $gapSec;

    /**
     * @var float
     */
    public $idleSec;

    /**
     * @var int
     */
    public $NSamples;

    /**
     * @var int
     */
    public $NTrajs;

    /**
     * @var int
     */
    public $prodEndMs;

    /**
     * @var int
     */
    public $prodStartMs;

    /**
     * @var float
     */
    public $rolloutP50;

    /**
     * @var float
     */
    public $rolloutSec;

    /**
     * @var int
     */
    public $step;

    /**
     * @var int
     */
    public $TFwdStartMs;

    /**
     * @var int
     */
    public $TOptEndMs;

    /**
     * @var int
     */
    public $TRolloutEndMs;

    /**
     * @var int
     */
    public $TRolloutStartMs;

    /**
     * @var int
     */
    public $TTrainEndMs;

    /**
     * @var int
     */
    public $TTrainStartMs;

    /**
     * @var int
     */
    public $TUpdateMs;

    /**
     * @var float
     */
    public $trainSec;
    protected $_name = [
        'bufferWaitP50' => 'BufferWaitP50',
        'gapSec' => 'GapSec',
        'idleSec' => 'IdleSec',
        'NSamples' => 'NSamples',
        'NTrajs' => 'NTrajs',
        'prodEndMs' => 'ProdEndMs',
        'prodStartMs' => 'ProdStartMs',
        'rolloutP50' => 'RolloutP50',
        'rolloutSec' => 'RolloutSec',
        'step' => 'Step',
        'TFwdStartMs' => 'TFwdStartMs',
        'TOptEndMs' => 'TOptEndMs',
        'TRolloutEndMs' => 'TRolloutEndMs',
        'TRolloutStartMs' => 'TRolloutStartMs',
        'TTrainEndMs' => 'TTrainEndMs',
        'TTrainStartMs' => 'TTrainStartMs',
        'TUpdateMs' => 'TUpdateMs',
        'trainSec' => 'TrainSec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bufferWaitP50) {
            $res['BufferWaitP50'] = $this->bufferWaitP50;
        }

        if (null !== $this->gapSec) {
            $res['GapSec'] = $this->gapSec;
        }

        if (null !== $this->idleSec) {
            $res['IdleSec'] = $this->idleSec;
        }

        if (null !== $this->NSamples) {
            $res['NSamples'] = $this->NSamples;
        }

        if (null !== $this->NTrajs) {
            $res['NTrajs'] = $this->NTrajs;
        }

        if (null !== $this->prodEndMs) {
            $res['ProdEndMs'] = $this->prodEndMs;
        }

        if (null !== $this->prodStartMs) {
            $res['ProdStartMs'] = $this->prodStartMs;
        }

        if (null !== $this->rolloutP50) {
            $res['RolloutP50'] = $this->rolloutP50;
        }

        if (null !== $this->rolloutSec) {
            $res['RolloutSec'] = $this->rolloutSec;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->TFwdStartMs) {
            $res['TFwdStartMs'] = $this->TFwdStartMs;
        }

        if (null !== $this->TOptEndMs) {
            $res['TOptEndMs'] = $this->TOptEndMs;
        }

        if (null !== $this->TRolloutEndMs) {
            $res['TRolloutEndMs'] = $this->TRolloutEndMs;
        }

        if (null !== $this->TRolloutStartMs) {
            $res['TRolloutStartMs'] = $this->TRolloutStartMs;
        }

        if (null !== $this->TTrainEndMs) {
            $res['TTrainEndMs'] = $this->TTrainEndMs;
        }

        if (null !== $this->TTrainStartMs) {
            $res['TTrainStartMs'] = $this->TTrainStartMs;
        }

        if (null !== $this->TUpdateMs) {
            $res['TUpdateMs'] = $this->TUpdateMs;
        }

        if (null !== $this->trainSec) {
            $res['TrainSec'] = $this->trainSec;
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
        if (isset($map['BufferWaitP50'])) {
            $model->bufferWaitP50 = $map['BufferWaitP50'];
        }

        if (isset($map['GapSec'])) {
            $model->gapSec = $map['GapSec'];
        }

        if (isset($map['IdleSec'])) {
            $model->idleSec = $map['IdleSec'];
        }

        if (isset($map['NSamples'])) {
            $model->NSamples = $map['NSamples'];
        }

        if (isset($map['NTrajs'])) {
            $model->NTrajs = $map['NTrajs'];
        }

        if (isset($map['ProdEndMs'])) {
            $model->prodEndMs = $map['ProdEndMs'];
        }

        if (isset($map['ProdStartMs'])) {
            $model->prodStartMs = $map['ProdStartMs'];
        }

        if (isset($map['RolloutP50'])) {
            $model->rolloutP50 = $map['RolloutP50'];
        }

        if (isset($map['RolloutSec'])) {
            $model->rolloutSec = $map['RolloutSec'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['TFwdStartMs'])) {
            $model->TFwdStartMs = $map['TFwdStartMs'];
        }

        if (isset($map['TOptEndMs'])) {
            $model->TOptEndMs = $map['TOptEndMs'];
        }

        if (isset($map['TRolloutEndMs'])) {
            $model->TRolloutEndMs = $map['TRolloutEndMs'];
        }

        if (isset($map['TRolloutStartMs'])) {
            $model->TRolloutStartMs = $map['TRolloutStartMs'];
        }

        if (isset($map['TTrainEndMs'])) {
            $model->TTrainEndMs = $map['TTrainEndMs'];
        }

        if (isset($map['TTrainStartMs'])) {
            $model->TTrainStartMs = $map['TTrainStartMs'];
        }

        if (isset($map['TUpdateMs'])) {
            $model->TUpdateMs = $map['TUpdateMs'];
        }

        if (isset($map['TrainSec'])) {
            $model->trainSec = $map['TrainSec'];
        }

        return $model;
    }
}
