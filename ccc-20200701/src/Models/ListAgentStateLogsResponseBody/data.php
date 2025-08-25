<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStateLogsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $breakCode;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $outboundScenario;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $stateCode;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'breakCode' => 'BreakCode',
        'duration' => 'Duration',
        'outboundScenario' => 'OutboundScenario',
        'startTime' => 'StartTime',
        'state' => 'State',
        'stateCode' => 'StateCode',
        'workMode' => 'WorkMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->breakCode) {
            $res['BreakCode'] = $this->breakCode;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->stateCode) {
            $res['StateCode'] = $this->stateCode;
        }

        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
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
        if (isset($map['BreakCode'])) {
            $model->breakCode = $map['BreakCode'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['StateCode'])) {
            $model->stateCode = $map['StateCode'];
        }

        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
