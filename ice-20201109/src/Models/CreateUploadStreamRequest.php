<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadStreamRequest extends Model
{
    /**
     * @description The quality of the media stream. Valid values:
     *
     *   FD: low definition.
     *   LD: standard definition.
     *   SD: high definition.
     *   HD: ultra-high definition.
     *   OD: original quality.
     *   2K: 2K resolution.
     *   4K: 4K resolution.
     *   SQ: standard sound quality.
     *   HQ: high sound quality.
     *
     * @example HD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The file name extension of the media stream.
     *
     * @example MP4
     *
     * @var string
     */
    public $fileExtension;

    /**
     * @description The high dynamic range (HDR) format of the transcoded stream. Valid values:
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
     *   The value is not case-sensitive,
     *
     *   You can leave this parameter empty for non-HDR streams.
     *
     * @example HDR10
     *
     * @var string
     */
    public $HDRType;

    /**
     * @description The ID of the media asset.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The user data.
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadStreamRequest
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
