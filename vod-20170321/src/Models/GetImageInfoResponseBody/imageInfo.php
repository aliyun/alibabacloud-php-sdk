<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody\imageInfo\mezzanine;
use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the category.
     *
     * @example 254766071
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     *
     * @example test name
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The time when the image file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-21T02:37:23Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the image.
     *
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the image.
     *
     * @example bbc65bba53f9*****ed90de118a7849
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
     *
     * - **CoverSnapshot**: thumbnail snapshot.
     * - **NormalSnapshot**: normal snapshot.
     * - **SpriteSnapshot**: sprite snapshot.
     * - **SpriteOriginSnapshot**: sprite source snapshot.
     * - **All**: images of all the preceding types. If this parameter is not set to All, you can specify multiple types and separate them with commas (,).
     * @example NormalSnapshot
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The information about the image mezzanine file.
     *
     * @var mezzanine
     */
    public $mezzanine;

    /**
     * @description The status of the image. Valid values:
     *
     * - **Uploading**: The image is being uploaded. This is the initial status.
     * - **Normal**: The image is uploaded.
     * - **UploadFail**: The image fails to be uploaded.
     * @example Uploading
     *
     * @var string
     */
    public $status;

    /**
     * @description The OSS bucket where the image is stored.
     *
     * @example outin-****..oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tag of the image. Multiple tags are separated by commas (,).
     *
     * @example tag1,tag2,tag3
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the image.
     *
     * @example this is a sample
     *
     * @var string
     */
    public $title;

    /**
     * @description The URL of the image. If a CDN domain name is specified, a CDN URL is returned. Otherwise, an OSS URL is returned.
     *
     * @example http://example.aliyundoc.com/image/default/****.gif?auth_key=****
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'appId'           => 'AppId',
        'cateId'          => 'CateId',
        'cateName'        => 'CateName',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'imageId'         => 'ImageId',
        'imageType'       => 'ImageType',
        'mezzanine'       => 'Mezzanine',
        'status'          => 'Status',
        'storageLocation' => 'StorageLocation',
        'tags'            => 'Tags',
        'title'           => 'Title',
        'URL'             => 'URL',
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
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->mezzanine) {
            $res['Mezzanine'] = null !== $this->mezzanine ? $this->mezzanine->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfo
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
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Mezzanine'])) {
            $model->mezzanine = mezzanine::fromMap($map['Mezzanine']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
