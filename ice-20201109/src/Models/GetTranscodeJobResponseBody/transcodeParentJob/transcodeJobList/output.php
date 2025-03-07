<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @description The media object.
     *
     *   If Type is set to OSS, the URL of an OSS object is returned. Both the OSS and HTTP protocols are supported.
     *   If Type is set to Media, the ID of a media asset is returned.
     *
     * @example oss://bucket/path/to/video.mp4
     *
     * @var string
     */
    public $media;

    /**
     * @description The path of the transcoded output stream. This parameter is required only when the output is a media asset.
     *
     * @example oss://bucket/path/to/{MediaId}/{JobId}.mp4
     *
     * @var string
     */
    public $outputUrl;

    /**
     * @description The type of the media object. Valid values:
     *
     *   OSS: an OSS object.
     *   Media: a media asset.
     *
     * @example OSS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'media'     => 'Media',
        'outputUrl' => 'OutputUrl',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = $this->media;
        }
        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }
        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
