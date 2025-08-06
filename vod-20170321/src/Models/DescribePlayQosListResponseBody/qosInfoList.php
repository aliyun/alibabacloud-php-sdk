<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayQosListResponseBody;

use AlibabaCloud\Dara\Model;

class qosInfoList extends Model
{
    /**
     * @var float
     */
    public $qosFirstFrame;

    /**
     * @var float
     */
    public $qosKbps;

    /**
     * @var float
     */
    public $qosPlay;

    /**
     * @var float
     */
    public $qosPlayFail;

    /**
     * @var float
     */
    public $qosRealPlay;

    /**
     * @var float
     */
    public $qosSecondPlayRate;

    /**
     * @var float
     */
    public $qosSeedFailRate;

    /**
     * @var float
     */
    public $qosSeekDuration;

    /**
     * @var float
     */
    public $qosSlowPlayRate;

    /**
     * @var float
     */
    public $qosStuckDuration100s;

    /**
     * @var float
     */
    public $qosStuckRate;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'qosFirstFrame' => 'QosFirstFrame',
        'qosKbps' => 'QosKbps',
        'qosPlay' => 'QosPlay',
        'qosPlayFail' => 'QosPlayFail',
        'qosRealPlay' => 'QosRealPlay',
        'qosSecondPlayRate' => 'QosSecondPlayRate',
        'qosSeedFailRate' => 'QosSeedFailRate',
        'qosSeekDuration' => 'QosSeekDuration',
        'qosSlowPlayRate' => 'QosSlowPlayRate',
        'qosStuckDuration100s' => 'QosStuckDuration100s',
        'qosStuckRate' => 'QosStuckRate',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosFirstFrame) {
            $res['QosFirstFrame'] = $this->qosFirstFrame;
        }

        if (null !== $this->qosKbps) {
            $res['QosKbps'] = $this->qosKbps;
        }

        if (null !== $this->qosPlay) {
            $res['QosPlay'] = $this->qosPlay;
        }

        if (null !== $this->qosPlayFail) {
            $res['QosPlayFail'] = $this->qosPlayFail;
        }

        if (null !== $this->qosRealPlay) {
            $res['QosRealPlay'] = $this->qosRealPlay;
        }

        if (null !== $this->qosSecondPlayRate) {
            $res['QosSecondPlayRate'] = $this->qosSecondPlayRate;
        }

        if (null !== $this->qosSeedFailRate) {
            $res['QosSeedFailRate'] = $this->qosSeedFailRate;
        }

        if (null !== $this->qosSeekDuration) {
            $res['QosSeekDuration'] = $this->qosSeekDuration;
        }

        if (null !== $this->qosSlowPlayRate) {
            $res['QosSlowPlayRate'] = $this->qosSlowPlayRate;
        }

        if (null !== $this->qosStuckDuration100s) {
            $res['QosStuckDuration100s'] = $this->qosStuckDuration100s;
        }

        if (null !== $this->qosStuckRate) {
            $res['QosStuckRate'] = $this->qosStuckRate;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['QosFirstFrame'])) {
            $model->qosFirstFrame = $map['QosFirstFrame'];
        }

        if (isset($map['QosKbps'])) {
            $model->qosKbps = $map['QosKbps'];
        }

        if (isset($map['QosPlay'])) {
            $model->qosPlay = $map['QosPlay'];
        }

        if (isset($map['QosPlayFail'])) {
            $model->qosPlayFail = $map['QosPlayFail'];
        }

        if (isset($map['QosRealPlay'])) {
            $model->qosRealPlay = $map['QosRealPlay'];
        }

        if (isset($map['QosSecondPlayRate'])) {
            $model->qosSecondPlayRate = $map['QosSecondPlayRate'];
        }

        if (isset($map['QosSeedFailRate'])) {
            $model->qosSeedFailRate = $map['QosSeedFailRate'];
        }

        if (isset($map['QosSeekDuration'])) {
            $model->qosSeekDuration = $map['QosSeekDuration'];
        }

        if (isset($map['QosSlowPlayRate'])) {
            $model->qosSlowPlayRate = $map['QosSlowPlayRate'];
        }

        if (isset($map['QosStuckDuration100s'])) {
            $model->qosStuckDuration100s = $map['QosStuckDuration100s'];
        }

        if (isset($map['QosStuckRate'])) {
            $model->qosStuckRate = $map['QosStuckRate'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
