<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryLiveWatchDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $avgWatchTime;
    /**
     * @var int
     */
    public $liveUv;
    /**
     * @var int
     */
    public $msgCount;
    /**
     * @var int
     */
    public $playbackUv;
    /**
     * @var int
     */
    public $praiseCount;
    /**
     * @var int
     */
    public $pv;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalWatchTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
