<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadAttachedMediaRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](https://help.aliyun.com/document_detail/113600.html).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The type of the media asset. Valid values:
     *
     *   **watermark**
     *   **subtitle**
     *   **material**
     *
     * This parameter is required.
     * @example watermark
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The one or more category IDs of the auxiliary media asset. Separate multiple category IDs with commas (,). A maximum of five category IDs can be specified. You can use one of the following methods to obtain the category ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Categories**. On the Categories page, you can view the category ID.
     *   View the value of the CateId parameter returned by the [AddCategory](https://help.aliyun.com/document_detail/56401.html) operation that you called to create a category.
     *   View the value of the CateId parameter returned by the [GetCategories](https://help.aliyun.com/document_detail/56406.html) operation that you called to query a category.
     *
     * @example 1298****,0813****
     *
     * @var string
     */
    public $cateIds;

    /**
     * @description The description of the auxiliary media asset. Take note of the following items:
     *
     *   The description can be up to 1,024 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example uploadTest
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the source file.
     *
     * @example D:\\test.png
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The size of the auxiliary media asset. Unit: byte.
     *
     * @example 123
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The file name extension. Valid values:
     *
     *   Valid values for watermarks: **png, gif, apng, and mov**
     *   Valid values for subtitles: **srt, ass, stl, ttml, and vtt**
     *   Valid values for materials: **jpg, gif, png, mp4, mat, zip, and apk**
     *
     * @example png
     *
     * @var string
     */
    public $mediaExt;

    /**
     * @description The storage location. You can use one of the following methods to obtain the storage location:
     *
     * Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Storage**. On the Storage page, you can view the storage location.
     *
     * >  If this parameter is set to a specific value, the auxiliary media asset is uploaded to the specified storage location.
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The one or more tags of the auxiliary media asset. Take note of the following items:
     *
     *   You can specify a maximum of 16 tags.
     *   If you need to specify multiple tags, separate the tags with commas (,).
     *   Each tag can be up to 32 characters in length.
     *   The value must be encoded in UTF-8.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the media asset. Take note of the following items:
     *
     *   The title can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example testTitle
     *
     * @var string
     */
    public $title;

    /**
     * @description The custom configurations, including callback configurations and upload acceleration configurations. The value is a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](https://help.aliyun.com/document_detail/86952.html) topic.
     *
     * > *   The callback configurations take effect only after you specify the HTTP callback URL and select the specific callback events in the ApsaraVideo VOD console. For more information about how to configure an HTTP callback in the ApsaraVideo VOD console, see [Configure callback settings](https://help.aliyun.com/document_detail/86071.html).
     * >*   To use the upload acceleration feature, submit a [ticket](https://ticket-intl.console.aliyun.com/#/ticket/createIndex) to enable this feature. For more information, see [Overview](https://help.aliyun.com/document_detail/55396.html).
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId'           => 'AppId',
        'businessType'    => 'BusinessType',
        'cateIds'         => 'CateIds',
        'description'     => 'Description',
        'fileName'        => 'FileName',
        'fileSize'        => 'FileSize',
        'mediaExt'        => 'MediaExt',
        'storageLocation' => 'StorageLocation',
        'tags'            => 'Tags',
        'title'           => 'Title',
        'userData'        => 'UserData',
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
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->mediaExt) {
            $res['MediaExt'] = $this->mediaExt;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadAttachedMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['MediaExt'])) {
            $model->mediaExt = $map['MediaExt'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
