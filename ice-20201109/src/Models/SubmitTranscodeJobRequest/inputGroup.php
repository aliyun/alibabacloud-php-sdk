<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest;

use AlibabaCloud\Tea\Model;

class inputGroup extends Model
{
    /**
     * @description The URL of the input stream.
     *
     *   This parameter takes effect only when Type is set to Media. You can select a specific file within the media asset as an input.
     *   The system checks whether the input URL exists within the media asset.
     *
     * @example oss://bucket/path/to/video.mp4
     *
     * @var string
     */
    public $inputUrl;

    /**
     * @description The media object.
     *
     *   If Type is set to OSS, set this parameter to the URL of an OSS object. Both the OSS and HTTP protocols are supported.
     *
     * >  Before you use the OSS bucket in the URL, you must add the bucket on the [Storage Management](https://help.aliyun.com/document_detail/609918.html) page of the Intelligent Media Services (IMS) console.
     *
     *   If Type is set to Media, set this parameter to the ID of a media asset.
     *
     * This parameter is required.
     * @example oss://bucket/path/to/video.mp4
     *
     * @var string
     */
    public $media;

    /**
     * @description The type of the media object. Valid values:
     *
     *   OSS: an Object Storage Service (OSS) object.
     *   Media: a media asset.
     *
     * This parameter is required.
     * @example OSS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'inputUrl' => 'InputUrl',
        'media'    => 'Media',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputUrl) {
            $res['InputUrl'] = $this->inputUrl;
        }
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
     * @return inputGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputUrl'])) {
            $model->inputUrl = $map['InputUrl'];
        }
        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
