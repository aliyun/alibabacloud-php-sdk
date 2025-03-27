<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoShotSnapshotResult\videoShots;

class videoShotSnapshotResult extends Model
{
    /**
     * @var videoShots[]
     */
    public $videoShots;
    protected $_name = [
        'videoShots' => 'videoShots',
    ];

    public function validate()
    {
        if (\is_array($this->videoShots)) {
            Model::validateArray($this->videoShots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoShots) {
            if (\is_array($this->videoShots)) {
                $res['videoShots'] = [];
                $n1 = 0;
                foreach ($this->videoShots as $item1) {
                    $res['videoShots'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['videoShots'])) {
            if (!empty($map['videoShots'])) {
                $model->videoShots = [];
                $n1 = 0;
                foreach ($map['videoShots'] as $item1) {
                    $model->videoShots[$n1++] = videoShots::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
