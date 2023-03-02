<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class PutMeasureReadyFlagRequest extends Model
{
    /**
     * @example esp.bookkeeping
     *
     * @var string
     */
    public $bizType;

    /**
     * @example d
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 1634784240000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $readyFlag;

    /**
     * @example 1634969692175
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bizType'   => 'BizType',
        'dataType'  => 'DataType',
        'endTime'   => 'EndTime',
        'readyFlag' => 'ReadyFlag',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->readyFlag) {
            $res['ReadyFlag'] = $this->readyFlag;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutMeasureReadyFlagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReadyFlag'])) {
            $model->readyFlag = $map['ReadyFlag'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
