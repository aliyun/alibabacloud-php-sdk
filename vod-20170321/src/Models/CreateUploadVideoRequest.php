<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadVideoRequest extends Model
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
     * @description The category ID of the audio or video file. You can use one of the following methods to obtain the category ID:
     *
     * Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Categories**. On the Categories page, you can view the category ID.
     * View the value of the CateId parameter returned by the [AddCategory](~~56401~~) operation that you called to create a category.
     * View the value of the CateId parameter returned by the [GetCategories](~~56406~~) operation that you called to query a category.
     *
     * @example 100036****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The URL of the custom video thumbnail.
     *
     * @example https://example.aliyundoc.com/image/D22F553TEST****.jpeg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the audio or video file.
     *
     * The description can be up to 1,024 characters in length.
     * The value must be encoded in UTF-8.
     *
     * @example UploadTest
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the audio or video file.
     *
     * The name must contain a file name extension, which is not case-sensitive.
     * For more information about file name extensions supported by ApsaraVideo VOD, see [Overview](~~55396~~).
     *
     * @example D:\video_01.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The size of the audio or video file. Unit: byte.
     *
     * @example 123
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The storage location. You can use one of the following methods to obtain the storage location:
     *
     * Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Storage**. On the Storage page, you can view the storage location.
     *
     * > If this parameter is set to a specific value, the audio or video file is uploaded to the specified storage location.
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The one or more tags of the audio or video file.
     *
     * You can specify a maximum of 16 tags.
     * If you need to specify multiple tags, separate the tags with commas (,).
     * Each tag can be up to 32 characters in length.
     * The value must be encoded in UTF-8.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the transcoding template group. You can use one of the following methods to obtain the ID of the transcoding template group:
     *
     * Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Transcoding Template Groups**. On the Transcoding Template Groups page, you can view the ID of the transcoding template group.
     * View the value of the TranscodeTemplateGroupId parameter returned by the [AddTranscodeTemplateGroup](~~102665~~) operation that you called to create a transcoding template group.
     * View the value of the TranscodeTemplateGroupId parameter returned by the [ListTranscodeTemplateGroup](~~102669~~) operation that you called to query a transcoding template group.
     *
     * > If you leave this parameter empty, the default transcoding template group is used for transcoding. If you set this parameter to the ID of a specific transcoding template group, the specified transcoding template group is used for transcoding.
     * @example 405477f9e214d19ea2c7c854****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The title of the audio or video file.
     *
     * The title can be up to 128 characters in length.
     * The value must be encoded in UTF-8.
     *
     * @example UploadTest
     *
     * @var string
     */
    public $title;

    /**
     * @description The custom configurations, including callback configurations and upload acceleration configurations. The value is a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952~~) topic.
     *
     * > * The callback configurations take effect only after you specify the HTTP callback URL and select the specific callback events in the ApsaraVideo VOD console. For more information about how to configure an HTTP callback in the ApsaraVideo VOD console, see [Configure callback settings](~~86071~~).
     * > * To use the upload acceleration feature, submit a [ticket](https://ticket-intl.console.aliyun.com/#/ticket/createIndex) to enable this feature. For more information, see [Overview](~~55396~~).
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"*****","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     *
     * > If both the WorkflowId and TemplateGroupId parameters are set, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     * @example 613efff3887ec34af685714cc461****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'appId'           => 'AppId',
        'cateId'          => 'CateId',
        'coverURL'        => 'CoverURL',
        'description'     => 'Description',
        'fileName'        => 'FileName',
        'fileSize'        => 'FileSize',
        'storageLocation' => 'StorageLocation',
        'tags'            => 'Tags',
        'templateGroupId' => 'TemplateGroupId',
        'title'           => 'Title',
        'userData'        => 'UserData',
        'workflowId'      => 'WorkflowId',
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
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
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
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadVideoRequest
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
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
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
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
