<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\LiveUpstreamQosDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class detailData extends Model
{
    /**
     * @var int
     */
    public $connectDur;

    /**
     * @var int
     */
    public $connectFailedCount;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $firstDataDur;

    /**
     * @var int
     */
    public $firstDataFailedCount;

    /**
     * @var int
     */
    public $firstFrameDur;

    /**
     * @var int
     */
    public $firstFrameSuccessCount;

    /**
     * @var int
     */
    public $statusCode2Xx;

    /**
     * @var int
     */
    public $statusCode3Xx;

    /**
     * @var int
     */
    public $statusCode4Xx;

    /**
     * @var int
     */
    public $statusCode5Xx;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'connectDur' => 'ConnectDur',
        'connectFailedCount' => 'ConnectFailedCount',
        'count' => 'Count',
        'firstDataDur' => 'FirstDataDur',
        'firstDataFailedCount' => 'FirstDataFailedCount',
        'firstFrameDur' => 'FirstFrameDur',
        'firstFrameSuccessCount' => 'FirstFrameSuccessCount',
        'statusCode2Xx' => 'StatusCode2Xx',
        'statusCode3Xx' => 'StatusCode3Xx',
        'statusCode4Xx' => 'StatusCode4Xx',
        'statusCode5Xx' => 'StatusCode5Xx',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectDur) {
            $res['ConnectDur'] = $this->connectDur;
        }
        if (null !== $this->connectFailedCount) {
            $res['ConnectFailedCount'] = $this->connectFailedCount;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->firstDataDur) {
            $res['FirstDataDur'] = $this->firstDataDur;
        }
        if (null !== $this->firstDataFailedCount) {
            $res['FirstDataFailedCount'] = $this->firstDataFailedCount;
        }
        if (null !== $this->firstFrameDur) {
            $res['FirstFrameDur'] = $this->firstFrameDur;
        }
        if (null !== $this->firstFrameSuccessCount) {
            $res['FirstFrameSuccessCount'] = $this->firstFrameSuccessCount;
        }
        if (null !== $this->statusCode2Xx) {
            $res['StatusCode2Xx'] = $this->statusCode2Xx;
        }
        if (null !== $this->statusCode3Xx) {
            $res['StatusCode3Xx'] = $this->statusCode3Xx;
        }
        if (null !== $this->statusCode4Xx) {
            $res['StatusCode4Xx'] = $this->statusCode4Xx;
        }
        if (null !== $this->statusCode5Xx) {
            $res['StatusCode5Xx'] = $this->statusCode5Xx;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectDur'])) {
            $model->connectDur = $map['ConnectDur'];
        }
        if (isset($map['ConnectFailedCount'])) {
            $model->connectFailedCount = $map['ConnectFailedCount'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FirstDataDur'])) {
            $model->firstDataDur = $map['FirstDataDur'];
        }
        if (isset($map['FirstDataFailedCount'])) {
            $model->firstDataFailedCount = $map['FirstDataFailedCount'];
        }
        if (isset($map['FirstFrameDur'])) {
            $model->firstFrameDur = $map['FirstFrameDur'];
        }
        if (isset($map['FirstFrameSuccessCount'])) {
            $model->firstFrameSuccessCount = $map['FirstFrameSuccessCount'];
        }
        if (isset($map['StatusCode2Xx'])) {
            $model->statusCode2Xx = $map['StatusCode2Xx'];
        }
        if (isset($map['StatusCode3Xx'])) {
            $model->statusCode3Xx = $map['StatusCode3Xx'];
        }
        if (isset($map['StatusCode4Xx'])) {
            $model->statusCode4Xx = $map['StatusCode4Xx'];
        }
        if (isset($map['StatusCode5Xx'])) {
            $model->statusCode5Xx = $map['StatusCode5Xx'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
