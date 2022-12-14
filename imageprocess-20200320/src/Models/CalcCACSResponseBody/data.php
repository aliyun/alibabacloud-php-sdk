<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSResponseBody\data\detections;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detections[]
     */
    public $detections;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-cacs/2020-09-29/2020-09-29-11%3A07%3A41-D74FE0DF-8F80-41EB-B08B-2E67053587EC.tar.gz?Expires=1601350661&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iB16ms28Y5mzB11ghYUd7upCi4****
     *
     * @var string
     */
    public $resultUrl;

    /**
     * @example 117.61
     *
     * @var string
     */
    public $score;

    /**
     * @example 111.96
     *
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
     * @return data
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
