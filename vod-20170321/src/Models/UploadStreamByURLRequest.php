<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadStreamByURLRequest extends Model
{
    /**
     * @description The media ID in ApsaraVideo VOD.
     *
     * @example HD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The quality of the video stream.
     *
     * For more information about valid values of this parameter, see [Parameters for media assets](~~124671~~).
     * @example mp4
     *
     * @var string
     */
    public $fileExtension;

    /**
     * @description The file name extension of the transcoded stream.
     *
     * >  This parameter is required if you do not specify a file name extension in StreamURL.
     * @example HDR10
     *
     * @var string
     */
    public $HDRType;

    /**
     * @description The URL of the OSS object.
     *
     * @example ca3a8f6e49*****57b65806709586
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The basic information.
     *
     * @example https://example.com/lesson-01.mp4
     *
     * @var string
     */
    public $streamURL;

    /**
     * @description The ID of the request.
     *
     * @example {"MessageCallback":{"CallbackURL":"http://aliyundoc.com"}, "Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'definition'    => 'Definition',
        'fileExtension' => 'FileExtension',
        'HDRType'       => 'HDRType',
        'mediaId'       => 'MediaId',
        'streamURL'     => 'StreamURL',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->fileExtension) {
            $res['FileExtension'] = $this->fileExtension;
        }
        if (null !== $this->HDRType) {
            $res['HDRType'] = $this->HDRType;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadStreamByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['FileExtension'])) {
            $model->fileExtension = $map['FileExtension'];
        }
        if (isset($map['HDRType'])) {
            $model->HDRType = $map['HDRType'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
