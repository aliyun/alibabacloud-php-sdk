<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowStuckItem extends Model
{
    /**
     * @var int
     */
    public $idleSec;

    /**
     * @var int
     */
    public $lastTsMs;

    /**
     * @var string
     */
    public $milestone;

    /**
     * @var int
     */
    public $NTurns;

    /**
     * @var string
     */
    public $promptUid;

    /**
     * @var string
     */
    public $sampleIndex;
    protected $_name = [
        'idleSec' => 'IdleSec',
        'lastTsMs' => 'LastTsMs',
        'milestone' => 'Milestone',
        'NTurns' => 'NTurns',
        'promptUid' => 'PromptUid',
        'sampleIndex' => 'SampleIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idleSec) {
            $res['IdleSec'] = $this->idleSec;
        }

        if (null !== $this->lastTsMs) {
            $res['LastTsMs'] = $this->lastTsMs;
        }

        if (null !== $this->milestone) {
            $res['Milestone'] = $this->milestone;
        }

        if (null !== $this->NTurns) {
            $res['NTurns'] = $this->NTurns;
        }

        if (null !== $this->promptUid) {
            $res['PromptUid'] = $this->promptUid;
        }

        if (null !== $this->sampleIndex) {
            $res['SampleIndex'] = $this->sampleIndex;
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
        if (isset($map['IdleSec'])) {
            $model->idleSec = $map['IdleSec'];
        }

        if (isset($map['LastTsMs'])) {
            $model->lastTsMs = $map['LastTsMs'];
        }

        if (isset($map['Milestone'])) {
            $model->milestone = $map['Milestone'];
        }

        if (isset($map['NTurns'])) {
            $model->NTurns = $map['NTurns'];
        }

        if (isset($map['PromptUid'])) {
            $model->promptUid = $map['PromptUid'];
        }

        if (isset($map['SampleIndex'])) {
            $model->sampleIndex = $map['SampleIndex'];
        }

        return $model;
    }
}
