<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadMediaRequest extends Model
{
    /**
     * @description The application ID. Default value: app-1000000.
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description The entity ID. You can call the CreateEntity operation to create an entity and specify a dynamic metadata structure.
     *
     * @example 9e177cac2fb44f8b8c67b199fcc7bffd
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The file information, which is in the JSON format and contains the following fields:
     *
     *   Type: required. The file type. Valid values: video, image, audio, text, and other.
     *   Name: required. The file name without the extension.
     *   Size: optional. The file size.
     *   Ext: required. The file name extension.
     *
     * @example {\\"Type\\":\\"video\\",\\"Name\\":\\"test.mp4\\",\\"Size\\":108078336,\\"Ext\\":\\"mp4\\"}
     *
     * @var string
     */
    public $fileInfo;

    /**
     * @description The metadata of the media asset, which is a JSON string that contains the following fields:
     *
     * Title: required.
     *
     *   The value can be up to 128 characters in length.
     *   The value must be encoded in UTF-8.
     *
     * Description: optional.
     *
     *   The value can be up to 1,024 characters in length.
     *   The value must be encoded in UTF-8.
     *
     * BusinessType: required. Valid values:
     *
     *   opening or ending if Type is set to video
     *   default or cover if Type is set to image
     *   subtitles or font if Type is set to text
     *   watermark if Type is set to material
     *   general CoverURL: optional.
     *
     * DynamicMetaData: The value is a string.
     * @example {\\"Title\\": \\"UploadTest\\", \\"Description\\": \\"UploadImageTest\\", \\"Tags\\": \\"tag1,tag2\\",\\"BusinessType\\":\\"cover\\"}
     *
     * @var string
     */
    public $mediaMetaData;

    /**
     * @description The postprocessing configurations. You can specify this parameter if Type is set to video or audio.
     *
     * Set ProcessType to Workflow.
     * @example {\\"ProcessType\\":\\"Workflow\\",\\"ProcessID\\":\\"74ba870f1a4873a3ba238e0bf6fa9***\\"}
     *
     * @var string
     */
    public $postProcessConfig;

    /**
     * @description The destination storage address.
     *
     * Set StorageLocation to an address in ApsaraVideo VOD. You cannot set this field to an OSS URL.
     * @example {\\"StorageType\\":\\"oss\\",\\"StorageLocation\\":\\"outin-***.oss-cn-shanghai.aliyuncs.com\\"}
     *
     * @var string
     */
    public $uploadTargetConfig;

    /**
     * @description The user data. The value must be a JSON string. You can configure settings such as message callbacks.
     *
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"*****","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId'              => 'AppId',
        'entityId'           => 'EntityId',
        'fileInfo'           => 'FileInfo',
        'mediaMetaData'      => 'MediaMetaData',
        'postProcessConfig'  => 'PostProcessConfig',
        'uploadTargetConfig' => 'UploadTargetConfig',
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
        if (null !== $this->fileInfo) {
            $res['FileInfo'] = $this->fileInfo;
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadMediaRequest
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
        if (isset($map['FileInfo'])) {
            $model->fileInfo = $map['FileInfo'];
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
