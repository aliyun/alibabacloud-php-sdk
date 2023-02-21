<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data;

use AlibabaCloud\Tea\Model;

class subtitlesResults extends Model
{
    /**
     * @var string[]
     */
    public $subtitlesAllResults;

    /**
     * @example url
     *
     * @var string
     */
    public $subtitlesAllResultsUrl;

    /**
     * @var string[]
     */
    public $subtitlesChineseResults;

    /**
     * @example url1
     *
     * @var string
     */
    public $subtitlesChineseResultsUrl;

    /**
     * @example hello
     *
     * @var mixed[]
     */
    public $subtitlesEnglishResults;

    /**
     * @example url2
     *
     * @var string
     */
    public $subtitlesEnglishResultsUrl;
    protected $_name = [
        'subtitlesAllResults'        => 'SubtitlesAllResults',
        'subtitlesAllResultsUrl'     => 'SubtitlesAllResultsUrl',
        'subtitlesChineseResults'    => 'SubtitlesChineseResults',
        'subtitlesChineseResultsUrl' => 'SubtitlesChineseResultsUrl',
        'subtitlesEnglishResults'    => 'SubtitlesEnglishResults',
        'subtitlesEnglishResultsUrl' => 'SubtitlesEnglishResultsUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subtitlesAllResults) {
            $res['SubtitlesAllResults'] = $this->subtitlesAllResults;
        }
        if (null !== $this->subtitlesAllResultsUrl) {
            $res['SubtitlesAllResultsUrl'] = $this->subtitlesAllResultsUrl;
        }
        if (null !== $this->subtitlesChineseResults) {
            $res['SubtitlesChineseResults'] = $this->subtitlesChineseResults;
        }
        if (null !== $this->subtitlesChineseResultsUrl) {
            $res['SubtitlesChineseResultsUrl'] = $this->subtitlesChineseResultsUrl;
        }
        if (null !== $this->subtitlesEnglishResults) {
            $res['SubtitlesEnglishResults'] = $this->subtitlesEnglishResults;
        }
        if (null !== $this->subtitlesEnglishResultsUrl) {
            $res['SubtitlesEnglishResultsUrl'] = $this->subtitlesEnglishResultsUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitlesResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubtitlesAllResults'])) {
            $model->subtitlesAllResults = $map['SubtitlesAllResults'];
        }
        if (isset($map['SubtitlesAllResultsUrl'])) {
            $model->subtitlesAllResultsUrl = $map['SubtitlesAllResultsUrl'];
        }
        if (isset($map['SubtitlesChineseResults'])) {
            $model->subtitlesChineseResults = $map['SubtitlesChineseResults'];
        }
        if (isset($map['SubtitlesChineseResultsUrl'])) {
            $model->subtitlesChineseResultsUrl = $map['SubtitlesChineseResultsUrl'];
        }
        if (isset($map['SubtitlesEnglishResults'])) {
            $model->subtitlesEnglishResults = $map['SubtitlesEnglishResults'];
        }
        if (isset($map['SubtitlesEnglishResultsUrl'])) {
            $model->subtitlesEnglishResultsUrl = $map['SubtitlesEnglishResultsUrl'];
        }

        return $model;
    }
}
