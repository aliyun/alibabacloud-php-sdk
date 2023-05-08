<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStateLogsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @example false
     *
     * @var bool
     */
    public $outboundScenario;

    /**
     * @example 1620259200000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example Break
     *
     * @var string
     */
    public $state;

    /**
     * @example CHECK_IN_BREAK
     *
     * @var string
     */
    public $stateCode;
    protected $_name = [
        'duration'         => 'Duration',
        'outboundScenario' => 'OutboundScenario',
        'startTime'        => 'StartTime',
        'state'            => 'State',
        'stateCode'        => 'StateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
