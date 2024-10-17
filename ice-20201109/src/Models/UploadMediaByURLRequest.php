<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
{
    /**
     * @description The application ID.
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description The entity ID. You can call the CreateEntity operation to create an entity and specify a dynamic metadata structure.
     *
     * @example d67281da3c8743b8823ad12976187***
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The metadata of the media file that you want to upload. The value must be a JSON string.
     *
     *   This parameter takes effect only if its value matches a URL that is specified in UploadURLs.
     *   You must convert the JSON-formatted data, such as [UploadMetadata, UploadMetadata,…], into a JSON string.
     *   For more information, see the "UploadMetadata" section of this topic.
     *
     * @example [{"SourceURL":"https://example.aliyundoc.com/video01.mp4","Title":"urlUploadTest"}]
     *
     * @var string
     */
    public $mediaMetaData;

    /**
     * @description The postprocessing configurations. You can specify this parameter if Type is set to video or audio.
     *
     * Set ProcessType to Workflow.
     * @example {"ProcessType": "Workflow","ProcessID":"b72a06c6beeb4dcdb898feef067b1***"}
     *
     * @var string
     */
    public $postProcessConfig;

    /**
     * @description The destination storage address.
     *
     * Set StorageLocation to an address in ApsaraVideo VOD. You cannot set this field to an OSS URL.
     * @example {"StorageType":"oss","StorageLocation":"outin-***.oss-cn-shanghai.aliyuncs.com"}
     *
     * @var string
     */
    public $uploadTargetConfig;

    /**
     * @description The URL of the source file.
     *
     *   The URL must contain a file name extension, such as mp4 in `https://****.mp4`.
     *
     *   If the URL does not contain a file name extension, you can specify one by setting `FileExtension` in `UploadMetadata`.
     *   If the URL contains a file name extension and `FileExtension` is also specified, the value of `FileExtension` prevails.
     *
     *   URL encoding is required. Separate multiple URLs with commas (,). You can specify a maximum of 20 URLs.
     *
     *   Special characters may cause upload failures. Therefore, you must encode URLs before you separate them with commas (,).
     *
     * @example https://diffurl.mp4
     *
     * @var string
     */
    public $uploadURLs;

    /**
     * @description The user data. The value must be a JSON string. You can configure settings such as message callbacks.
     *
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId'              => 'AppId',
        'entityId'           => 'EntityId',
        'mediaMetaData'      => 'MediaMetaData',
        'postProcessConfig'  => 'PostProcessConfig',
        'uploadTargetConfig' => 'UploadTargetConfig',
        'uploadURLs'         => 'UploadURLs',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->mediaMetaData) {
            $res['MediaMetaData'] = $this->mediaMetaData;
        }
        if (null !== $this->postProcessConfig) {
            $res['PostProcessConfig'] = $this->postProcessConfig;
        }
        if (null !== $this->uploadTargetConfig) {
            $res['UploadTargetConfig'] = $this->uploadTargetConfig;
        }
        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMediaByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['MediaMetaData'])) {
            $model->mediaMetaData = $map['MediaMetaData'];
        }
        if (isset($map['PostProcessConfig'])) {
            $model->postProcessConfig = $map['PostProcessConfig'];
        }
        if (isset($map['UploadTargetConfig'])) {
            $model->uploadTargetConfig = $map['UploadTargetConfig'];
        }
        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
