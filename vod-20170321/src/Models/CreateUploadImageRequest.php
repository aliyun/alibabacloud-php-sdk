<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description The category ID of the image. You can use one of the following methods to obtain the category ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Categories**. On the Categories page, you can view the category ID of the image.
     *   Obtain the value of CateId from the response to the [AddCategory](~~56401~~) operation.
     *   Obtain the value of CateId from the response to the [GetCategories](~~56406~~) operation.
     *
     * @example 100036****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The description of the image.
     *
     *   The description can be up to 1,024 characters in length.
     *   The value must be encoded in UTF-8.
     *
     * @var string
     */
    public $description;

    /**
     * @description The file name extension of the image. Valid values:
     *
     *   **png** (default)
     *   **jpg**
     *   **jpeg**
     *   **gif**
     *
     * @example png
     *
     * @var string
     */
    public $imageExt;

    /**
     * @description The type of the image. Valid values:
     *
     *   **default**: the default image type.
     *   **cover**: the thumbnail.
     *
     * > You can manage only images of the **default** type in the ApsaraVideo VOD console.
     * @example default
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The name of the source file.
     *
     * > The name must contain a file name extension. The file name extension is not case-sensitive.
     * @example D:\picture_01.png
     *
     * @var string
     */
    public $originalFileName;

    /**
     * @description The storage address. Perform the following operations to obtain the storage address: Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Storage**. On the Storage page, view the storage address.
     *
     * > If you specify a storage address, media files are uploaded to the specified address.
     * @example outin-****..oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the image. The following rules apply:
     *
     *   Each tag can be up to 32 characters in length.
     *   You can specify a maximum of 16 tags for an image.
     *   Separate multiple tags with commas (,).
     *   The value must be encoded in UTF-8.
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the image. The following rules apply:
     *
     *   The title can be up to 128 characters in length.
     *   The value must be encoded in UTF-8.
     *
     * @example mytitle
     *
     * @var string
     */
    public $title;

    /**
     * @description The custom configurations, including callback configurations and upload acceleration configurations. The value must be a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952~~) topic.
     *
     * > *   The callback configurations take effect only after you specify the HTTP callback URL and select specific callback events in the ApsaraVideo VOD console. For more information about how to configure HTTP callback settings in the ApsaraVideo VOD console, see [Configure callback settings](~~86071~~).
     * >*   If you want to enable the upload acceleration feature, [submit a request on Yida](https://yida.alibaba-inc.com/o/ticketapply). For more information, see [Overview](~~55396~~).
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId'            => 'AppId',
        'cateId'           => 'CateId',
        'description'      => 'Description',
        'imageExt'         => 'ImageExt',
        'imageType'        => 'ImageType',
        'originalFileName' => 'OriginalFileName',
        'storageLocation'  => 'StorageLocation',
        'tags'             => 'Tags',
        'title'            => 'Title',
        'userData'         => 'UserData',
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
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageExt) {
            $res['ImageExt'] = $this->imageExt;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->originalFileName) {
            $res['OriginalFileName'] = $this->originalFileName;
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
     * @return CreateUploadImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageExt'])) {
            $model->imageExt = $map['ImageExt'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['OriginalFileName'])) {
            $model->originalFileName = $map['OriginalFileName'];
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
