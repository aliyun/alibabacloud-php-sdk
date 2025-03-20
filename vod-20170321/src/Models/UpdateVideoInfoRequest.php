<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfoRequest extends Model
{
    /**
     * @description The category ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Categories** to view the category ID of the media file.
     *   View the value of the CateId parameter returned by the [AddCategory](https://help.aliyun.com/document_detail/56401.html) operation that you called to create a category.
     *   View the value of the CateId parameter returned by the [GetCategories](https://help.aliyun.com/document_detail/56406.html) operation that you called to query a category.
     *
     * @example 384761111
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The URL of the audio/video thumbnail.
     *
     * @example https://example.aliyundoc.com/****.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the audio or video file.
     *
     *   The description can be up to 1,024 bytes in length.
     *   The value is encoded in UTF-8.
     *
     * @example video description
     *
     * @var string
     */
    public $description;

    /**
     * @description The tags of the media file.
     *
     *   Each tag can be up to 32 bytes in length. You can specify up to 16 tags.
     *   Separate multiple tags with commas (,).
     *   The value is encoded in UTF-8.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the audio or video file.
     *
     *   The name cannot exceed 128 bytes.
     *   The value is encoded in UTF-8.
     *
     * @example video title
     *
     * @var string
     */
    public $title;

    /**
     * @description Custom settings. This is a JSON string that supports message callbacks, upload acceleration, and other settings. For more information, please refer to [UserData](https://help.aliyun.com/document_detail/86952.html).
     *
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"*****","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the audio or video file. Perform the following operations to obtain the storage address:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the audio or video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of VideoId from the response to the [CreateUploadVideo](https://help.aliyun.com/document_detail/55407.html) operation that you called to obtain the upload URL and credential.
     *   View the value of the VideoId parameter returned by the [SearchMedia](https://help.aliyun.com/document_detail/86044.html) operation that you called to query media information after the audio or video file is uploaded.
     *
     * This parameter is required.
     *
     * @example 2deda93265312baf9b0ed810d****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'cateId' => 'CateId',
        'coverURL' => 'CoverURL',
        'description' => 'Description',
        'tags' => 'Tags',
        'title' => 'Title',
        'userData' => 'UserData',
        'videoId' => 'VideoId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVideoInfoRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
