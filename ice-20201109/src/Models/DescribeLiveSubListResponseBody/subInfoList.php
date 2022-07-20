<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubListResponseBody;

use AlibabaCloud\Tea\Model;

class subInfoList extends Model
{
    /**
     * @var string
     */
    public $cacheDuration;

    /**
     * @var string
     */
    public $cpuUsageRate;

    /**
     * @var string
     */
    public $firstFrameDuration;

    /**
     * @var string
     */
    public $playFps;

    /**
     * @var string
     */
    public $secondPlayRate;

    /**
     * @var string
     */
    public $subNetBitrate;

    /**
     * @var string
     */
    public $subRate;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $videoStuck;
    protected $_name = [
        'cacheDuration'      => 'CacheDuration',
        'cpuUsageRate'       => 'CpuUsageRate',
        'firstFrameDuration' => 'FirstFrameDuration',
        'playFps'            => 'PlayFps',
        'secondPlayRate'     => 'SecondPlayRate',
        'subNetBitrate'      => 'SubNetBitrate',
        'subRate'            => 'SubRate',
        'traceId'            => 'TraceId',
        'videoStuck'         => 'VideoStuck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheDuration) {
            $res['CacheDuration'] = $this->cacheDuration;
        }
        if (null !== $this->cpuUsageRate) {
            $res['CpuUsageRate'] = $this->cpuUsageRate;
        }
        if (null !== $this->firstFrameDuration) {
            $res['FirstFrameDuration'] = $this->firstFrameDuration;
        }
        if (null !== $this->playFps) {
            $res['PlayFps'] = $this->playFps;
        }
        if (null !== $this->secondPlayRate) {
            $res['SecondPlayRate'] = $this->secondPlayRate;
        }
        if (null !== $this->subNetBitrate) {
            $res['SubNetBitrate'] = $this->subNetBitrate;
        }
        if (null !== $this->subRate) {
            $res['SubRate'] = $this->subRate;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->videoStuck) {
            $res['VideoStuck'] = $this->videoStuck;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheDuration'])) {
            $model->cacheDuration = $map['CacheDuration'];
        }
        if (isset($map['CpuUsageRate'])) {
            $model->cpuUsageRate = $map['CpuUsageRate'];
        }
        if (isset($map['FirstFrameDuration'])) {
            $model->firstFrameDuration = $map['FirstFrameDuration'];
        }
        if (isset($map['PlayFps'])) {
            $model->playFps = $map['PlayFps'];
        }
        if (isset($map['SecondPlayRate'])) {
            $model->secondPlayRate = $map['SecondPlayRate'];
        }
        if (isset($map['SubNetBitrate'])) {
            $model->subNetBitrate = $map['SubNetBitrate'];
        }
        if (isset($map['SubRate'])) {
            $model->subRate = $map['SubRate'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['VideoStuck'])) {
            $model->videoStuck = $map['VideoStuck'];
        }

        return $model;
    }
}
