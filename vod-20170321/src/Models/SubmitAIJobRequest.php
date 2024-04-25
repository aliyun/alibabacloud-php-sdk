<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIJobRequest extends Model
{
    /**
     * @description The configurations of the AI job. The value is a JSON string.
     *
     *   If you set `Types` to `AIVideoTag`, you can specify `AnalyseTypes` for `Config` to set the analysis algorithm of a smart tagging job. Valid values:
     *
     *   ASR: automatic speech recognition (ASR)
     *   OCR: image optical character recognition (OCR)
     *
     *   If you set `Types` to `AIMediaDNA`, you can specify `DNADBId` for `Config` to set the ID of the media fingerprint library for video fingerprinting jobs.
     *
     * @example {"AIVideoTag": {"AnalyseTypes": "Face,ASR"} }
     *
     * @var string
     */
    public $config;

    /**
     * @description The ID of the video. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the audio or video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of VideoId from the response to the [CreateUploadVideo](~~55407~~) operation that you call to upload media files.
     *   Obtain the value of VideoId from the response to the [SearchMedia](~~86044~~) operation after you upload media files.
     *
     * @example 3D3D12340d9401fab46a0b847****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description The type of the AI job. Separate multiple types with commas (,). Valid values:
     *
     *   **AIMediaDNA**: The media fingerprinting job.
     *   **AIVideoTag**: The smart tagging job.
     *
     * @example AIVideoTag
     *
     * @var string
     */
    public $types;

    /**
     * @description The custom settings. The value is a JSON string. For more information, see [Request parameters](~~86952#h2--userdata-div-id-userdata-div-3~~).
     *
     * @example {"Extend":{"localId":"***","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'config'               => 'Config',
        'mediaId'              => 'MediaId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'types'                => 'Types',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAIJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
