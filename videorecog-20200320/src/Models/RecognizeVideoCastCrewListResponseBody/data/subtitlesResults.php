<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data;

use AlibabaCloud\Dara\Model;

class subtitlesResults extends Model
{
    /**
     * @var string[]
     */
    public $subtitlesAllResults;

    /**
     * @var string
     */
    public $subtitlesAllResultsUrl;

    /**
     * @var string[]
     */
    public $subtitlesChineseResults;

    /**
     * @var string
     */
    public $subtitlesChineseResultsUrl;

    /**
     * @var mixed[]
     */
    public $subtitlesEnglishResults;

    /**
     * @var string
     */
    public $subtitlesEnglishResultsUrl;
    protected $_name = [
        'subtitlesAllResults' => 'SubtitlesAllResults',
        'subtitlesAllResultsUrl' => 'SubtitlesAllResultsUrl',
        'subtitlesChineseResults' => 'SubtitlesChineseResults',
        'subtitlesChineseResultsUrl' => 'SubtitlesChineseResultsUrl',
        'subtitlesEnglishResults' => 'SubtitlesEnglishResults',
        'subtitlesEnglishResultsUrl' => 'SubtitlesEnglishResultsUrl',
    ];

    public function validate()
    {
        if (\is_array($this->subtitlesAllResults)) {
            Model::validateArray($this->subtitlesAllResults);
        }
        if (\is_array($this->subtitlesChineseResults)) {
            Model::validateArray($this->subtitlesChineseResults);
        }
        if (\is_array($this->subtitlesEnglishResults)) {
            Model::validateArray($this->subtitlesEnglishResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subtitlesAllResults) {
            if (\is_array($this->subtitlesAllResults)) {
                $res['SubtitlesAllResults'] = [];
                foreach ($this->subtitlesAllResults as $key1 => $value1) {
                    $res['SubtitlesAllResults'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->subtitlesAllResultsUrl) {
            $res['SubtitlesAllResultsUrl'] = $this->subtitlesAllResultsUrl;
        }

        if (null !== $this->subtitlesChineseResults) {
            if (\is_array($this->subtitlesChineseResults)) {
                $res['SubtitlesChineseResults'] = [];
                foreach ($this->subtitlesChineseResults as $key1 => $value1) {
                    $res['SubtitlesChineseResults'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->subtitlesChineseResultsUrl) {
            $res['SubtitlesChineseResultsUrl'] = $this->subtitlesChineseResultsUrl;
        }

        if (null !== $this->subtitlesEnglishResults) {
            if (\is_array($this->subtitlesEnglishResults)) {
                $res['SubtitlesEnglishResults'] = [];
                foreach ($this->subtitlesEnglishResults as $key1 => $value1) {
                    $res['SubtitlesEnglishResults'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->subtitlesEnglishResultsUrl) {
            $res['SubtitlesEnglishResultsUrl'] = $this->subtitlesEnglishResultsUrl;
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
        if (isset($map['SubtitlesAllResults'])) {
            if (!empty($map['SubtitlesAllResults'])) {
                $model->subtitlesAllResults = [];
                foreach ($map['SubtitlesAllResults'] as $key1 => $value1) {
                    $model->subtitlesAllResults[$key1] = $value1;
                }
            }
        }

        if (isset($map['SubtitlesAllResultsUrl'])) {
            $model->subtitlesAllResultsUrl = $map['SubtitlesAllResultsUrl'];
        }

        if (isset($map['SubtitlesChineseResults'])) {
            if (!empty($map['SubtitlesChineseResults'])) {
                $model->subtitlesChineseResults = [];
                foreach ($map['SubtitlesChineseResults'] as $key1 => $value1) {
                    $model->subtitlesChineseResults[$key1] = $value1;
                }
            }
        }

        if (isset($map['SubtitlesChineseResultsUrl'])) {
            $model->subtitlesChineseResultsUrl = $map['SubtitlesChineseResultsUrl'];
        }

        if (isset($map['SubtitlesEnglishResults'])) {
            if (!empty($map['SubtitlesEnglishResults'])) {
                $model->subtitlesEnglishResults = [];
                foreach ($map['SubtitlesEnglishResults'] as $key1 => $value1) {
                    $model->subtitlesEnglishResults[$key1] = $value1;
                }
            }
        }

        if (isset($map['SubtitlesEnglishResultsUrl'])) {
            $model->subtitlesEnglishResultsUrl = $map['SubtitlesEnglishResultsUrl'];
        }

        return $model;
    }
}
