<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\CACS\detections;

class CACS extends Model
{
    /**
     * @var detections[]
     */
    public $detections;

    /**
     * @var string
     */
    public $resultUrl;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $seriesInstanceUID;

    /**
     * @var string
     */
    public $volumeScore;
    protected $_name = [
        'detections' => 'Detections',
        'resultUrl' => 'ResultUrl',
        'score' => 'Score',
        'seriesInstanceUID' => 'SeriesInstanceUID',
        'volumeScore' => 'VolumeScore',
    ];

    public function validate()
    {
        if (\is_array($this->detections)) {
            Model::validateArray($this->detections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detections) {
            if (\is_array($this->detections)) {
                $res['Detections'] = [];
                $n1 = 0;
                foreach ($this->detections as $item1) {
                    $res['Detections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->seriesInstanceUID) {
            $res['SeriesInstanceUID'] = $this->seriesInstanceUID;
        }

        if (null !== $this->volumeScore) {
            $res['VolumeScore'] = $this->volumeScore;
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
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = [];
                $n1 = 0;
                foreach ($map['Detections'] as $item1) {
                    $model->detections[$n1++] = detections::fromMap($item1);
                }
            }
        }

        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SeriesInstanceUID'])) {
            $model->seriesInstanceUID = $map['SeriesInstanceUID'];
        }

        if (isset($map['VolumeScore'])) {
            $model->volumeScore = $map['VolumeScore'];
        }

        return $model;
    }
}
