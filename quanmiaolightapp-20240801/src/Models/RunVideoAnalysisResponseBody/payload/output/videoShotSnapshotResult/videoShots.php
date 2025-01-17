<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoShotSnapshotResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoShotSnapshotResult\videoShots\videoSnapshots;

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
        'endTime'         => 'endTime',
        'endTimeFormat'   => 'endTimeFormat',
        'startTime'       => 'startTime',
        'startTimeFormat' => 'startTimeFormat',
        'videoSnapshots'  => 'videoSnapshots',
    ];

    public function validate()
    {
        if (\is_array($this->videoSnapshots)) {
            Model::validateArray($this->videoSnapshots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->videoSnapshots)) {
                $res['videoSnapshots'] = [];
                $n1                    = 0;
                foreach ($this->videoSnapshots as $item1) {
                    $res['videoSnapshots'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                    = 0;
                foreach ($map['videoSnapshots'] as $item1) {
                    $model->videoSnapshots[$n1++] = videoSnapshots::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
