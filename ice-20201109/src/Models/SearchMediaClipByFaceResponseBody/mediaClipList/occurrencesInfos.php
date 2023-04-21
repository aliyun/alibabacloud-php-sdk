<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos\trackData;
use AlibabaCloud\Tea\Model;

class occurrencesInfos extends Model
{
    /**
     * @example 69.06635
     *
     * @var float
     */
    public $endTime;

    /**
     * @example 61.066353
     *
     * @var float
     */
    public $startTime;

    /**
     * @var trackData[]
     */
    public $trackData;
    protected $_name = [
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'trackData' => 'TrackData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->trackData) {
            $res['TrackData'] = [];
            if (null !== $this->trackData && \is_array($this->trackData)) {
                $n = 0;
                foreach ($this->trackData as $item) {
                    $res['TrackData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return occurrencesInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TrackData'])) {
            if (!empty($map['TrackData'])) {
                $model->trackData = [];
                $n                = 0;
                foreach ($map['TrackData'] as $item) {
                    $model->trackData[$n++] = null !== $item ? trackData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
