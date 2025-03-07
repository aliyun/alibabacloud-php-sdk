<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Tea\Model;

class mediaBase extends Model
{
    /**
     * @description The category ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [Intelligent Media Services (IMS) console](https://ims.console.aliyun.com) and choose **Media Asset Management** > **Category Management** to view the category ID.
     *   View the value of the CateId parameter returned by the AddCategory operation that you called to create a category.
     *   View the value of the CateId parameter returned by the GetCategories operation that you called to query a category.
     *
     * @example 4220
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The URL of the thumbnail.
     *
     * @example https://***.oss-cn-shanghai.aliyuncs.com/cover/281c64d6-b5fb-4c57-97cd-84da56a8b151_large_cover_url.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the media asset was created.
     *
     * @example 2021-09-22T10:07:31+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The content description.
     *
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the media asset.
     *
     * @example 2eea77a61c7b4ddd95bec34a6f65b***
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The tags.
     *
     *   Up to 16 tags are supported.
     *   Multiple tags are separated by commas (,).
     *   Each tag can be up to 32 bytes in length.
     *   The value is encoded in UTF-8.
     *
     * @example test,ccc
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @description The type of the media asset. Valid values:
     *
     * video audio
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The resource status. Valid values:
     *
     * Normal: The source file is ready.
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The title.
     *
     * @example testTitle
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'cateId'       => 'CateId',
        'coverURL'     => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'mediaId'      => 'MediaId',
        'mediaTags'    => 'MediaTags',
        'mediaType'    => 'MediaType',
        'status'       => 'Status',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaTags) {
            $res['MediaTags'] = $this->mediaTags;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaBase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaTags'])) {
            $model->mediaTags = $map['MediaTags'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
