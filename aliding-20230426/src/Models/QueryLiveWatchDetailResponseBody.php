<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryLiveWatchDetailResponseBody extends Model
{
    /**
     * @example 84600
     *
     * @var int
     */
    public $avgWatchTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $liveUv;

    /**
     * @example 10000
     *
     * @var int
     */
    public $msgCount;

    /**
     * @example 20
     *
     * @var int
     */
    public $playbackUv;

    /**
     * @example 30
     *
     * @var int
     */
    public $praiseCount;

    /**
     * @example 1000
     *
     * @var int
     */
    public $pv;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1222000
     *
     * @var int
     */
    public $totalWatchTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $uv;
    protected $_name = [
        'avgWatchTime'   => 'avgWatchTime',
        'liveUv'         => 'liveUv',
        'msgCount'       => 'msgCount',
        'playbackUv'     => 'playbackUv',
        'praiseCount'    => 'praiseCount',
        'pv'             => 'pv',
        'requestId'      => 'requestId',
        'totalWatchTime' => 'totalWatchTime',
        'uv'             => 'uv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgWatchTime) {
            $res['avgWatchTime'] = $this->avgWatchTime;
        }
        if (null !== $this->liveUv) {
            $res['liveUv'] = $this->liveUv;
        }
        if (null !== $this->msgCount) {
            $res['msgCount'] = $this->msgCount;
        }
        if (null !== $this->playbackUv) {
            $res['playbackUv'] = $this->playbackUv;
        }
        if (null !== $this->praiseCount) {
            $res['praiseCount'] = $this->praiseCount;
        }
        if (null !== $this->pv) {
            $res['pv'] = $this->pv;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalWatchTime) {
            $res['totalWatchTime'] = $this->totalWatchTime;
        }
        if (null !== $this->uv) {
            $res['uv'] = $this->uv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLiveWatchDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avgWatchTime'])) {
            $model->avgWatchTime = $map['avgWatchTime'];
        }
        if (isset($map['liveUv'])) {
            $model->liveUv = $map['liveUv'];
        }
        if (isset($map['msgCount'])) {
            $model->msgCount = $map['msgCount'];
        }
        if (isset($map['playbackUv'])) {
            $model->playbackUv = $map['playbackUv'];
        }
        if (isset($map['praiseCount'])) {
            $model->praiseCount = $map['praiseCount'];
        }
        if (isset($map['pv'])) {
            $model->pv = $map['pv'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalWatchTime'])) {
            $model->totalWatchTime = $map['totalWatchTime'];
        }
        if (isset($map['uv'])) {
            $model->uv = $map['uv'];
        }

        return $model;
    }
}
