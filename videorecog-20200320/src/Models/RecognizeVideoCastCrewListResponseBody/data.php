<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\castResults;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\ocrResults;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\subtitlesResults;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults;

class data extends Model
{
    /**
     * @var castResults[]
     */
    public $castResults;

    /**
     * @var ocrResults[]
     */
    public $ocrResults;

    /**
     * @var string
     */
    public $ocrResultsUrl;

    /**
     * @var string
     */
    public $ocrVideoResultsUrl;

    /**
     * @var subtitlesResults[]
     */
    public $subtitlesResults;

    /**
     * @var videoOcrResults[]
     */
    public $videoOcrResults;
    protected $_name = [
        'castResults' => 'CastResults',
        'ocrResults' => 'OcrResults',
        'ocrResultsUrl' => 'OcrResultsUrl',
        'ocrVideoResultsUrl' => 'OcrVideoResultsUrl',
        'subtitlesResults' => 'SubtitlesResults',
        'videoOcrResults' => 'VideoOcrResults',
    ];

    public function validate()
    {
        if (\is_array($this->castResults)) {
            Model::validateArray($this->castResults);
        }
        if (\is_array($this->ocrResults)) {
            Model::validateArray($this->ocrResults);
        }
        if (\is_array($this->subtitlesResults)) {
            Model::validateArray($this->subtitlesResults);
        }
        if (\is_array($this->videoOcrResults)) {
            Model::validateArray($this->videoOcrResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->castResults) {
            if (\is_array($this->castResults)) {
                $res['CastResults'] = [];
                $n1 = 0;
                foreach ($this->castResults as $item1) {
                    $res['CastResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ocrResults) {
            if (\is_array($this->ocrResults)) {
                $res['OcrResults'] = [];
                $n1 = 0;
                foreach ($this->ocrResults as $item1) {
                    $res['OcrResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ocrResultsUrl) {
            $res['OcrResultsUrl'] = $this->ocrResultsUrl;
        }

        if (null !== $this->ocrVideoResultsUrl) {
            $res['OcrVideoResultsUrl'] = $this->ocrVideoResultsUrl;
        }

        if (null !== $this->subtitlesResults) {
            if (\is_array($this->subtitlesResults)) {
                $res['SubtitlesResults'] = [];
                $n1 = 0;
                foreach ($this->subtitlesResults as $item1) {
                    $res['SubtitlesResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->videoOcrResults) {
            if (\is_array($this->videoOcrResults)) {
                $res['VideoOcrResults'] = [];
                $n1 = 0;
                foreach ($this->videoOcrResults as $item1) {
                    $res['VideoOcrResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CastResults'])) {
            if (!empty($map['CastResults'])) {
                $model->castResults = [];
                $n1 = 0;
                foreach ($map['CastResults'] as $item1) {
                    $model->castResults[$n1++] = castResults::fromMap($item1);
                }
            }
        }

        if (isset($map['OcrResults'])) {
            if (!empty($map['OcrResults'])) {
                $model->ocrResults = [];
                $n1 = 0;
                foreach ($map['OcrResults'] as $item1) {
                    $model->ocrResults[$n1++] = ocrResults::fromMap($item1);
                }
            }
        }

        if (isset($map['OcrResultsUrl'])) {
            $model->ocrResultsUrl = $map['OcrResultsUrl'];
        }

        if (isset($map['OcrVideoResultsUrl'])) {
            $model->ocrVideoResultsUrl = $map['OcrVideoResultsUrl'];
        }

        if (isset($map['SubtitlesResults'])) {
            if (!empty($map['SubtitlesResults'])) {
                $model->subtitlesResults = [];
                $n1 = 0;
                foreach ($map['SubtitlesResults'] as $item1) {
                    $model->subtitlesResults[$n1++] = subtitlesResults::fromMap($item1);
                }
            }
        }

        if (isset($map['VideoOcrResults'])) {
            if (!empty($map['VideoOcrResults'])) {
                $model->videoOcrResults = [];
                $n1 = 0;
                foreach ($map['VideoOcrResults'] as $item1) {
                    $model->videoOcrResults[$n1++] = videoOcrResults::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
