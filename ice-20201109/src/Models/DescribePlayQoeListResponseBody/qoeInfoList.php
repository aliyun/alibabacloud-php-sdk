<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQoeListResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $vpsid;
    protected $_name = [
        'qoeFinishedVV'      => 'QoeFinishedVV',
        'qoeFinishedVVRate'  => 'QoeFinishedVVRate',
        'qoeUFinishedVVTime' => 'QoeUFinishedVVTime',
        'qoeUV'              => 'QoeUV',
        'qoeUVVDuration'     => 'QoeUVVDuration',
        'qoeUVVTime'         => 'QoeUVVTime',
        'qoeVDuration'       => 'QoeVDuration',
        'qoeVVDuration'      => 'QoeVVDuration',
        'vpsid'              => 'Vpsid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qoeFinishedVV) {
            $res['QoeFinishedVV'] = $this->qoeFinishedVV;
        }
        if (null !== $this->qoeFinishedVVRate) {
            $res['QoeFinishedVVRate'] = $this->qoeFinishedVVRate;
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
        if (null !== $this->vpsid) {
            $res['Vpsid'] = $this->vpsid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qoeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QoeFinishedVV'])) {
            $model->qoeFinishedVV = $map['QoeFinishedVV'];
        }
        if (isset($map['QoeFinishedVVRate'])) {
            $model->qoeFinishedVVRate = $map['QoeFinishedVVRate'];
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
        if (isset($map['Vpsid'])) {
            $model->vpsid = $map['Vpsid'];
        }

        return $model;
    }
}
