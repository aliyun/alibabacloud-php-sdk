<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadStreamByURLRequest extends Model
{
    /**
     * @description The quality of the video stream.
     *
     * For more information about valid values of this parameter, see [Parameters for media assets](~~124671~~).
     * @example HD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The file name extension of the transcoded stream.
     *
     * >  This parameter is required if you do not specify a file name extension in StreamURL.
     * @example mp4
     *
     * @var string
     */
    public $fileExtension;

    /**
     * @description The HDR type of the transcoded stream. Valid values:
     *
     *   HDR
     *   HDR10
     *   HLG
     *   DolbyVision
     *   HDRVivid
     *   SDR+
     *
     * >
     *
     *   The HDR type of the transcoded stream is not case-sensitive.
     *
     *   You can leave this parameter empty for non-HDR streams.
     *
     * @example HDR10
     *
     * @var string
     */
    public $HDRType;

    /**
     * @description The media ID in ApsaraVideo VOD.
     *
     * @example ca3a8f6e49*****57b65806709586
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The URL of the transcoded stream.
     *
     * If URL authentication is required, you must pass authentication information in this parameter and make sure that the URL can be accessed over the Internet.
     * @example https://example.com/lesson-01.mp4
     *
     * @var string
     */
    public $streamURL;

    /**
     * @description The user-defined parameter. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952~~) topic.
     *
     * >  The callback configurations you specify for this parameter take effect only after you specify the HTTP callback URL and select specific callback events in the ApsaraVideo VOD console. For more information about how to configure HTTP callback settings in the ApsaraVideo VOD console, see [Configure callback settings](~~86071~~).
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
