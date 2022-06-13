<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\CACS\detections;
use AlibabaCloud\Tea\Model;

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
    public $volumeScore;
    protected $_name = [
        'detections'  => 'Detections',
        'resultUrl'   => 'ResultUrl',
        'score'       => 'Score',
        'volumeScore' => 'VolumeScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detections) {
            $res['Detections'] = [];
            if (null !== $this->detections && \is_array($this->detections)) {
                $n = 0;
                foreach ($this->detections as $item) {
                    $res['Detections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->volumeScore) {
            $res['VolumeScore'] = $this->volumeScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CACS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = [];
                $n                 = 0;
                foreach ($map['Detections'] as $item) {
                    $model->detections[$n++] = null !== $item ? detections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['VolumeScore'])) {
            $model->volumeScore = $map['VolumeScore'];
        }

        return $model;
    }
}
