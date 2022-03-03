<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody\data\castResults;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody\data\ocrResults;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody\data\subtitlesResults;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults;
use AlibabaCloud\Tea\Model;

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
     * @var subtitlesResults[]
     */
    public $subtitlesResults;

    /**
     * @var videoOcrResults[]
     */
    public $videoOcrResults;
    protected $_name = [
        'castResults'      => 'CastResults',
        'ocrResults'       => 'OcrResults',
        'subtitlesResults' => 'SubtitlesResults',
        'videoOcrResults'  => 'VideoOcrResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->castResults) {
            $res['CastResults'] = [];
            if (null !== $this->castResults && \is_array($this->castResults)) {
                $n = 0;
                foreach ($this->castResults as $item) {
                    $res['CastResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ocrResults) {
            $res['OcrResults'] = [];
            if (null !== $this->ocrResults && \is_array($this->ocrResults)) {
                $n = 0;
                foreach ($this->ocrResults as $item) {
                    $res['OcrResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subtitlesResults) {
            $res['SubtitlesResults'] = [];
            if (null !== $this->subtitlesResults && \is_array($this->subtitlesResults)) {
                $n = 0;
                foreach ($this->subtitlesResults as $item) {
                    $res['SubtitlesResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoOcrResults) {
            $res['VideoOcrResults'] = [];
            if (null !== $this->videoOcrResults && \is_array($this->videoOcrResults)) {
                $n = 0;
                foreach ($this->videoOcrResults as $item) {
                    $res['VideoOcrResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CastResults'])) {
            if (!empty($map['CastResults'])) {
                $model->castResults = [];
                $n                  = 0;
                foreach ($map['CastResults'] as $item) {
                    $model->castResults[$n++] = null !== $item ? castResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OcrResults'])) {
            if (!empty($map['OcrResults'])) {
                $model->ocrResults = [];
                $n                 = 0;
                foreach ($map['OcrResults'] as $item) {
                    $model->ocrResults[$n++] = null !== $item ? ocrResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubtitlesResults'])) {
            if (!empty($map['SubtitlesResults'])) {
                $model->subtitlesResults = [];
                $n                       = 0;
                foreach ($map['SubtitlesResults'] as $item) {
                    $model->subtitlesResults[$n++] = null !== $item ? subtitlesResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoOcrResults'])) {
            if (!empty($map['VideoOcrResults'])) {
                $model->videoOcrResults = [];
                $n                      = 0;
                foreach ($map['VideoOcrResults'] as $item) {
                    $model->videoOcrResults[$n++] = null !== $item ? videoOcrResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
