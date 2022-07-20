<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQosListResponseBody;

use AlibabaCloud\Tea\Model;

class qosInfoList extends Model
{
    /**
     * @var string
     */
    public $qosFirstFrame;

    /**
     * @var string
     */
    public $qosKbps;

    /**
     * @var string
     */
    public $qosPlay;

    /**
     * @var string
     */
    public $qosPlayFail;

    /**
     * @var string
     */
    public $qosRealPlay;

    /**
     * @var string
     */
    public $qosSeedFailRate;

    /**
     * @var string
     */
    public $qosStuckRate;

    /**
     * @var string
     */
    public $vpsid;
    protected $_name = [
        'qosFirstFrame'   => 'QosFirstFrame',
        'qosKbps'         => 'QosKbps',
        'qosPlay'         => 'QosPlay',
        'qosPlayFail'     => 'QosPlayFail',
        'qosRealPlay'     => 'QosRealPlay',
        'qosSeedFailRate' => 'QosSeedFailRate',
        'qosStuckRate'    => 'QosStuckRate',
        'vpsid'           => 'Vpsid',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->qosSeedFailRate) {
            $res['QosSeedFailRate'] = $this->qosSeedFailRate;
        }
        if (null !== $this->qosStuckRate) {
            $res['QosStuckRate'] = $this->qosStuckRate;
        }
        if (null !== $this->vpsid) {
            $res['Vpsid'] = $this->vpsid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosInfoList
     */
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
        if (isset($map['QosSeedFailRate'])) {
            $model->qosSeedFailRate = $map['QosSeedFailRate'];
        }
        if (isset($map['QosStuckRate'])) {
            $model->qosStuckRate = $map['QosStuckRate'];
        }
        if (isset($map['Vpsid'])) {
            $model->vpsid = $map['Vpsid'];
        }

        return $model;
    }
}
