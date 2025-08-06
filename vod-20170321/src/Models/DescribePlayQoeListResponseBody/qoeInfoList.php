<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayQoeListResponseBody;

use AlibabaCloud\Dara\Model;

class qoeInfoList extends Model
{
    /**
     * @var float
     */
    public $qoeFinishedVV;

    /**
     * @var float
     */
    public $qoeFinishedVVRate;

    /**
     * @var float
     */
    public $qoeJumpRate5s;

    /**
     * @var float
     */
    public $qoeUFinishedVVTime;

    /**
     * @var float
     */
    public $qoeUV;

    /**
     * @var float
     */
    public $qoeUVVDuration;

    /**
     * @var float
     */
    public $qoeUVVTime;

    /**
     * @var float
     */
    public $qoeVDuration;

    /**
     * @var float
     */
    public $qoeVVDuration;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'qoeFinishedVV' => 'QoeFinishedVV',
        'qoeFinishedVVRate' => 'QoeFinishedVVRate',
        'qoeJumpRate5s' => 'QoeJumpRate5s',
        'qoeUFinishedVVTime' => 'QoeUFinishedVVTime',
        'qoeUV' => 'QoeUV',
        'qoeUVVDuration' => 'QoeUVVDuration',
        'qoeUVVTime' => 'QoeUVVTime',
        'qoeVDuration' => 'QoeVDuration',
        'qoeVVDuration' => 'QoeVVDuration',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qoeFinishedVV) {
            $res['QoeFinishedVV'] = $this->qoeFinishedVV;
        }

        if (null !== $this->qoeFinishedVVRate) {
            $res['QoeFinishedVVRate'] = $this->qoeFinishedVVRate;
        }

        if (null !== $this->qoeJumpRate5s) {
            $res['QoeJumpRate5s'] = $this->qoeJumpRate5s;
        }

        if (null !== $this->qoeUFinishedVVTime) {
            $res['QoeUFinishedVVTime'] = $this->qoeUFinishedVVTime;
        }

        if (null !== $this->qoeUV) {
            $res['QoeUV'] = $this->qoeUV;
        }

        if (null !== $this->qoeUVVDuration) {
            $res['QoeUVVDuration'] = $this->qoeUVVDuration;
        }

        if (null !== $this->qoeUVVTime) {
            $res['QoeUVVTime'] = $this->qoeUVVTime;
        }

        if (null !== $this->qoeVDuration) {
            $res['QoeVDuration'] = $this->qoeVDuration;
        }

        if (null !== $this->qoeVVDuration) {
            $res['QoeVVDuration'] = $this->qoeVVDuration;
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
        if (isset($map['QoeFinishedVV'])) {
            $model->qoeFinishedVV = $map['QoeFinishedVV'];
        }

        if (isset($map['QoeFinishedVVRate'])) {
            $model->qoeFinishedVVRate = $map['QoeFinishedVVRate'];
        }

        if (isset($map['QoeJumpRate5s'])) {
            $model->qoeJumpRate5s = $map['QoeJumpRate5s'];
        }

        if (isset($map['QoeUFinishedVVTime'])) {
            $model->qoeUFinishedVVTime = $map['QoeUFinishedVVTime'];
        }

        if (isset($map['QoeUV'])) {
            $model->qoeUV = $map['QoeUV'];
        }

        if (isset($map['QoeUVVDuration'])) {
            $model->qoeUVVDuration = $map['QoeUVVDuration'];
        }

        if (isset($map['QoeUVVTime'])) {
            $model->qoeUVVTime = $map['QoeUVVTime'];
        }

        if (isset($map['QoeVDuration'])) {
            $model->qoeVDuration = $map['QoeVDuration'];
        }

        if (isset($map['QoeVVDuration'])) {
            $model->qoeVVDuration = $map['QoeVVDuration'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
