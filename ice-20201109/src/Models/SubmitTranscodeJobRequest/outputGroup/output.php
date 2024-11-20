<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @description The media object.
     *
     *   If Type is set to OSS, set this parameter to the URL of an OSS object. Both the OSS and HTTP protocols are supported.
     *
     * >  Before you use the OSS bucket in the URL, you must add the bucket on the [Storage Management](https://help.aliyun.com/document_detail/440592.html) page of the IMS console.
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
     * @description The URL of the output stream.\\
     * Supported placeholders:
     *
     *   {MediaId}: the ID of the media asset.
     *   {JobId}: the ID of the transcoding subjob.
     *   {MediaBucket}: the bucket to which the media asset belongs.
     *   {ExtName}: the file suffix, which uses the output format of the transcoding template.
     *   {DestMd5}: the MD5 value of the transcoded output file.\\
     * 2.  The output bucket is the same as the bucket to which the media asset belongs.
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
     * This parameter is required.
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
