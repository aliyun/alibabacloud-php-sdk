<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeL4EventsSelectiveResponseBody;

use AlibabaCloud\Tea\Model;

class esnL4EventList extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $targetRegion;

    /**
     * @var int
     */
    public $attackType;

    /**
     * @var int
     */
    public $result;

    /**
     * @var string
     */
    public $attackSrc;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $attackTime;

    /**
     * @var int
     */
    public $maxAttack;

    /**
     * @var string
     */
    public $target;

    /**
     * @var int
     */
    public $targetType;
    protected $_name = [
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'targetRegion' => 'TargetRegion',
        'attackType'   => 'AttackType',
        'result'       => 'Result',
        'attackSrc'    => 'AttackSrc',
        'duration'     => 'Duration',
        'attackTime'   => 'AttackTime',
        'maxAttack'    => 'MaxAttack',
        'target'       => 'Target',
        'targetType'   => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->attackSrc) {
            $res['AttackSrc'] = $this->attackSrc;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->attackTime) {
            $res['AttackTime'] = $this->attackTime;
        }
        if (null !== $this->maxAttack) {
            $res['MaxAttack'] = $this->maxAttack;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return esnL4EventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['AttackSrc'])) {
            $model->attackSrc = $map['AttackSrc'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['AttackTime'])) {
            $model->attackTime = $map['AttackTime'];
        }
        if (isset($map['MaxAttack'])) {
            $model->maxAttack = $map['MaxAttack'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
