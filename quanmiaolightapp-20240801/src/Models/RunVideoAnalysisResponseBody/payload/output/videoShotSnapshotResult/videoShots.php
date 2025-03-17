<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoShotSnapshotResult;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoShotSnapshotResult\videoShots\videoSnapshots;
use AlibabaCloud\Tea\Model;

class videoShots extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $endTimeFormat;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $startTimeFormat;

    /**
     * @var videoSnapshots[]
     */
    public $videoSnapshots;
    protected $_name = [
        'endTime' => 'endTime',
        'endTimeFormat' => 'endTimeFormat',
        'startTime' => 'startTime',
        'startTimeFormat' => 'startTimeFormat',
        'videoSnapshots' => 'videoSnapshots',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->endTimeFormat) {
            $res['endTimeFormat'] = $this->endTimeFormat;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->startTimeFormat) {
            $res['startTimeFormat'] = $this->startTimeFormat;
        }
        if (null !== $this->videoSnapshots) {
            $res['videoSnapshots'] = [];
            if (null !== $this->videoSnapshots && \is_array($this->videoSnapshots)) {
                $n = 0;
                foreach ($this->videoSnapshots as $item) {
                    $res['videoSnapshots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoShots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['endTimeFormat'])) {
            $model->endTimeFormat = $map['endTimeFormat'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['startTimeFormat'])) {
            $model->startTimeFormat = $map['startTimeFormat'];
        }
        if (isset($map['videoSnapshots'])) {
            if (!empty($map['videoSnapshots'])) {
                $model->videoSnapshots = [];
                $n = 0;
                foreach ($map['videoSnapshots'] as $item) {
                    $model->videoSnapshots[$n++] = null !== $item ? videoSnapshots::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
