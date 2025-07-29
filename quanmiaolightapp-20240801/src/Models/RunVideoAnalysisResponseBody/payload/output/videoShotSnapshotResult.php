<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoShotSnapshotResult\videoShots;
use AlibabaCloud\Tea\Model;

class videoShotSnapshotResult extends Model
{
    /**
     * @var videoShots[]
     */
    public $videoShots;
    protected $_name = [
        'videoShots' => 'videoShots',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoShots) {
            $res['videoShots'] = [];
            if (null !== $this->videoShots && \is_array($this->videoShots)) {
                $n = 0;
                foreach ($this->videoShots as $item) {
                    $res['videoShots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoShotSnapshotResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['videoShots'])) {
            if (!empty($map['videoShots'])) {
                $model->videoShots = [];
                $n = 0;
                foreach ($map['videoShots'] as $item) {
                    $model->videoShots[$n++] = null !== $item ? videoShots::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
