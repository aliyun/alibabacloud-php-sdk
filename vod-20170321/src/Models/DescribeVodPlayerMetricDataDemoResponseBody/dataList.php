<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerMetricDataDemoResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var float
     */
    public $avgPerCompletionVv;

    /**
     * @var float
     */
    public $avgPerPlayDuration;

    /**
     * @var float
     */
    public $avgPerVv;

    /**
     * @var float
     */
    public $avgPlayBitrate;

    /**
     * @var float
     */
    public $avgPlayDuration;

    /**
     * @var float
     */
    public $avgStartBitrate;

    /**
     * @var float
     */
    public $avgVideoDuration;

    /**
     * @var float
     */
    public $bps;

    /**
     * @var float
     */
    public $completionDegree;

    /**
     * @var float
     */
    public $completionRate;

    /**
     * @var float
     */
    public $completionVv;

    /**
     * @var float
     */
    public $cuv;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var float
     */
    public $errorCount100s;

    /**
     * @var float
     */
    public $firstFrame;

    /**
     * @var float
     */
    public $jumpRate5s;

    /**
     * @var float
     */
    public $playFailRate;

    /**
     * @var float
     */
    public $realVv;

    /**
     * @var float
     */
    public $replayRate;

    /**
     * @var float
     */
    public $secondPlayRate;

    /**
     * @var float
     */
    public $seedFailRate;

    /**
     * @var float
     */
    public $seekDuration;

    /**
     * @var float
     */
    public $slowPlayRate;

    /**
     * @var string
     */
    public $stuckCount100s;

    /**
     * @var float
     */
    public $stuckCountRate;

    /**
     * @var float
     */
    public $stuckDuration100s;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var float
     */
    public $totalPlayDuration;

    /**
     * @var float
     */
    public $traf;

    /**
     * @var float
     */
    public $uv;

    /**
     * @var float
     */
    public $videoBitrate;

    /**
     * @var float
     */
    public $vv;
    protected $_name = [
        'avgPerCompletionVv' => 'AvgPerCompletionVv',
        'avgPerPlayDuration' => 'AvgPerPlayDuration',
        'avgPerVv' => 'AvgPerVv',
        'avgPlayBitrate' => 'AvgPlayBitrate',
        'avgPlayDuration' => 'AvgPlayDuration',
        'avgStartBitrate' => 'AvgStartBitrate',
        'avgVideoDuration' => 'AvgVideoDuration',
        'bps' => 'Bps',
        'completionDegree' => 'CompletionDegree',
        'completionRate' => 'CompletionRate',
        'completionVv' => 'CompletionVv',
        'cuv' => 'Cuv',
        'dimension' => 'Dimension',
        'errorCount100s' => 'ErrorCount100s',
        'firstFrame' => 'FirstFrame',
        'jumpRate5s' => 'JumpRate5s',
        'playFailRate' => 'PlayFailRate',
        'realVv' => 'RealVv',
        'replayRate' => 'ReplayRate',
        'secondPlayRate' => 'SecondPlayRate',
        'seedFailRate' => 'SeedFailRate',
        'seekDuration' => 'SeekDuration',
        'slowPlayRate' => 'SlowPlayRate',
        'stuckCount100s' => 'StuckCount100s',
        'stuckCountRate' => 'StuckCountRate',
        'stuckDuration100s' => 'StuckDuration100s',
        'timeStamp' => 'TimeStamp',
        'totalPlayDuration' => 'TotalPlayDuration',
        'traf' => 'Traf',
        'uv' => 'Uv',
        'videoBitrate' => 'VideoBitrate',
        'vv' => 'Vv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgPerCompletionVv) {
            $res['AvgPerCompletionVv'] = $this->avgPerCompletionVv;
        }

        if (null !== $this->avgPerPlayDuration) {
            $res['AvgPerPlayDuration'] = $this->avgPerPlayDuration;
        }

        if (null !== $this->avgPerVv) {
            $res['AvgPerVv'] = $this->avgPerVv;
        }

        if (null !== $this->avgPlayBitrate) {
            $res['AvgPlayBitrate'] = $this->avgPlayBitrate;
        }

        if (null !== $this->avgPlayDuration) {
            $res['AvgPlayDuration'] = $this->avgPlayDuration;
        }

        if (null !== $this->avgStartBitrate) {
            $res['AvgStartBitrate'] = $this->avgStartBitrate;
        }

        if (null !== $this->avgVideoDuration) {
            $res['AvgVideoDuration'] = $this->avgVideoDuration;
        }

        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }

        if (null !== $this->completionDegree) {
            $res['CompletionDegree'] = $this->completionDegree;
        }

        if (null !== $this->completionRate) {
            $res['CompletionRate'] = $this->completionRate;
        }

        if (null !== $this->completionVv) {
            $res['CompletionVv'] = $this->completionVv;
        }

        if (null !== $this->cuv) {
            $res['Cuv'] = $this->cuv;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->errorCount100s) {
            $res['ErrorCount100s'] = $this->errorCount100s;
        }

        if (null !== $this->firstFrame) {
            $res['FirstFrame'] = $this->firstFrame;
        }

        if (null !== $this->jumpRate5s) {
            $res['JumpRate5s'] = $this->jumpRate5s;
        }

        if (null !== $this->playFailRate) {
            $res['PlayFailRate'] = $this->playFailRate;
        }

        if (null !== $this->realVv) {
            $res['RealVv'] = $this->realVv;
        }

        if (null !== $this->replayRate) {
            $res['ReplayRate'] = $this->replayRate;
        }

        if (null !== $this->secondPlayRate) {
            $res['SecondPlayRate'] = $this->secondPlayRate;
        }

        if (null !== $this->seedFailRate) {
            $res['SeedFailRate'] = $this->seedFailRate;
        }

        if (null !== $this->seekDuration) {
            $res['SeekDuration'] = $this->seekDuration;
        }

        if (null !== $this->slowPlayRate) {
            $res['SlowPlayRate'] = $this->slowPlayRate;
        }

        if (null !== $this->stuckCount100s) {
            $res['StuckCount100s'] = $this->stuckCount100s;
        }

        if (null !== $this->stuckCountRate) {
            $res['StuckCountRate'] = $this->stuckCountRate;
        }

        if (null !== $this->stuckDuration100s) {
            $res['StuckDuration100s'] = $this->stuckDuration100s;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->totalPlayDuration) {
            $res['TotalPlayDuration'] = $this->totalPlayDuration;
        }

        if (null !== $this->traf) {
            $res['Traf'] = $this->traf;
        }

        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }

        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }

        if (null !== $this->vv) {
            $res['Vv'] = $this->vv;
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
        if (isset($map['AvgPerCompletionVv'])) {
            $model->avgPerCompletionVv = $map['AvgPerCompletionVv'];
        }

        if (isset($map['AvgPerPlayDuration'])) {
            $model->avgPerPlayDuration = $map['AvgPerPlayDuration'];
        }

        if (isset($map['AvgPerVv'])) {
            $model->avgPerVv = $map['AvgPerVv'];
        }

        if (isset($map['AvgPlayBitrate'])) {
            $model->avgPlayBitrate = $map['AvgPlayBitrate'];
        }

        if (isset($map['AvgPlayDuration'])) {
            $model->avgPlayDuration = $map['AvgPlayDuration'];
        }

        if (isset($map['AvgStartBitrate'])) {
            $model->avgStartBitrate = $map['AvgStartBitrate'];
        }

        if (isset($map['AvgVideoDuration'])) {
            $model->avgVideoDuration = $map['AvgVideoDuration'];
        }

        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }

        if (isset($map['CompletionDegree'])) {
            $model->completionDegree = $map['CompletionDegree'];
        }

        if (isset($map['CompletionRate'])) {
            $model->completionRate = $map['CompletionRate'];
        }

        if (isset($map['CompletionVv'])) {
            $model->completionVv = $map['CompletionVv'];
        }

        if (isset($map['Cuv'])) {
            $model->cuv = $map['Cuv'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['ErrorCount100s'])) {
            $model->errorCount100s = $map['ErrorCount100s'];
        }

        if (isset($map['FirstFrame'])) {
            $model->firstFrame = $map['FirstFrame'];
        }

        if (isset($map['JumpRate5s'])) {
            $model->jumpRate5s = $map['JumpRate5s'];
        }

        if (isset($map['PlayFailRate'])) {
            $model->playFailRate = $map['PlayFailRate'];
        }

        if (isset($map['RealVv'])) {
            $model->realVv = $map['RealVv'];
        }

        if (isset($map['ReplayRate'])) {
            $model->replayRate = $map['ReplayRate'];
        }

        if (isset($map['SecondPlayRate'])) {
            $model->secondPlayRate = $map['SecondPlayRate'];
        }

        if (isset($map['SeedFailRate'])) {
            $model->seedFailRate = $map['SeedFailRate'];
        }

        if (isset($map['SeekDuration'])) {
            $model->seekDuration = $map['SeekDuration'];
        }

        if (isset($map['SlowPlayRate'])) {
            $model->slowPlayRate = $map['SlowPlayRate'];
        }

        if (isset($map['StuckCount100s'])) {
            $model->stuckCount100s = $map['StuckCount100s'];
        }

        if (isset($map['StuckCountRate'])) {
            $model->stuckCountRate = $map['StuckCountRate'];
        }

        if (isset($map['StuckDuration100s'])) {
            $model->stuckDuration100s = $map['StuckDuration100s'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['TotalPlayDuration'])) {
            $model->totalPlayDuration = $map['TotalPlayDuration'];
        }

        if (isset($map['Traf'])) {
            $model->traf = $map['Traf'];
        }

        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }

        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }

        if (isset($map['Vv'])) {
            $model->vv = $map['Vv'];
        }

        return $model;
    }
}
