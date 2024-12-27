<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\sources;

use AlibabaCloud\Tea\Model;

class subtitles extends Model
{
    /**
     * @description The subtitle language. If you specify this parameter, comply with the ISO 639-2 standard. This parameter is left empty by default.
     *
     * @example eng
     *
     * @var string
     */
    public $language;

    /**
     * @description The time offset of the subtitle. Unit: seconds. Default value: 0.
     *
     * @example 10.5
     *
     * @var float
     */
    public $timeOffset;

    /**
     * @description The URI of the Object Storage Service (OSS) bucket. Specify the value in the `oss://${Bucket}/${Object}` format. `${Bucket}` specifies the name of the OSS bucket that resides in the same region with the current project. `${Object}` specifies the complete path to the file whose name contains an extension. The following subtitle formats are supported: srt, vtt, mov_text, ass, dvd_sub, and pgs.
     *
     * @example oss://test-bucket/subtitles
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'language'   => 'Language',
        'timeOffset' => 'TimeOffset',
        'URI'        => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->timeOffset) {
            $res['TimeOffset'] = $this->timeOffset;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['TimeOffset'])) {
            $model->timeOffset = $map['TimeOffset'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
