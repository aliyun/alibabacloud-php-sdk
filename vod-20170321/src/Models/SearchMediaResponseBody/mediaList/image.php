<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The ID of the audio file.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The duration of the video file. Unit: seconds.
     *
     * @example 1000123
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The tags of the auxiliary media asset.
     *
     * @example The ID of the image file.
     *
     * @var string
     */
    public $cateName;

    /**
     * @description [Details about auxiliary media assets](~~86991~~).
     *
     * @example 2018-07-19T03:45:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the application.
     *
     * @example The category ID of the video file.
     *
     * @var string
     */
    public $description;

    /**
     * @description The endpoint of the OSS bucket in which the audio file is stored.
     *
     * @example 11130843741se99wqmoes****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The URL of the thumbnail.
     *
     * @example 2018-07-19T03:48:25Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The type of the media asset. Valid values:
     *
     *   **video**
     *   **audio**
     *   **image**
     *   **attached**
     *
     * @example Uploading
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the application.
     *
     * @example outin-bfefbb90a47c******163e1c7426.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The list of automatic snapshots.
     *
     * @example tag1
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the request.
     *
     * @example image1
     *
     * @var string
     */
    public $title;

    /**
     * @description The URL of the thumbnail.
     *
     * @example https://example.com/****.png
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'appId'            => 'AppId',
        'cateId'           => 'CateId',
        'cateName'         => 'CateName',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'imageId'          => 'ImageId',
        'modificationTime' => 'ModificationTime',
        'status'           => 'Status',
        'storageLocation'  => 'StorageLocation',
        'tags'             => 'Tags',
        'title'            => 'Title',
        'URL'              => 'URL',
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
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
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
     * @return image
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
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
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
