<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\imageWatermarks\overwriteParams;

use AlibabaCloud\Tea\Model;

class file extends Model
{
    /**
     * @description The media object.
     *
     *   If Type is set to OSS, set this parameter to the URL of an OSS object. Both the OSS and HTTP protocols are supported.
     *   If Type is set to Media, set this parameter to the ID of a media asset.
     *
     * @example oss://bucket/path/to/video.mp4
     *
     * @var string
     */
    public $media;

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
        'media' => 'Media',
        'type'  => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return file
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
