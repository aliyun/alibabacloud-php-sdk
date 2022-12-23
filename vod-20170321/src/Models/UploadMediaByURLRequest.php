<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The storage location of the media file.
     *
     * Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/?spm=a2c4g.11186623.2.15.6948257eaZ4m54#/vod/settings/censored). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Storage**. On the Storage page, you can view the storage location. If you do not specify the storage location, the default storage location is used.
     * @example outin-bfefbb90a47c******163e1c7426.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The ID of the transcoding template group. You can use one of the following methods to obtain the ID of the transcoding template group:
     * Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Transcoding Template Groups**. On the Transcoding Template Groups page, you can view the ID of the transcoding template group.
     * View the value of the TranscodeTemplateGroupId parameter returned by the [AddTranscodeTemplateGroup](~~102665~~) operation that you called to create a transcoding template group.
     * View the value of the TranscodeTemplateGroupId parameter returned by the [ListTranscodeTemplateGroup](~~102669~~) operation that you called to query a transcoding template group.
     * > * If this parameter is left empty, the default transcoding template group is used for transcoding. If this parameter is set to a specific value, the specified transcoding template group is used for transcoding.
     * > * You can also specify the ID of the transcoding template group by using the nested TemplateGroupId parameter under the `UploadMetadatas` parameter. If you set this parameter and the nested TemplateGroupId parameter, the value of the nested TemplateGroupId parameter takes effect.
     * @example ca3a8f6e4957b65806709586****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The metadata of the media file to be uploaded. The value is a JSON string.
     * This parameter takes effect only if the value of the SourceURL parameter matches the URL that is specified by the UploadURLs parameter.
     * The JSON-formatted data, such as `[UploadMetadata, UploadMetadata,…]`, must be converted into a JSON string.
     * For more information, see the **UploadMetadata** section.
     *
     * @example [{"SourceURL":"https://example.aliyundoc.com/video01.mp4","Title":"urlUploadTest"}]
     *
     * @var string
     */
    public $uploadMetadatas;

    /**
     * @description The URL of the source file.
     * The URL must contain a file name extension, such as mp4 in `https://****.mp4`.
     * If the URL does not contain a file name extension, you can specify one by setting the `FileExtension` parameter under the `UploadMetadatas` parameter.
     * If the URL contains a file name extension and the `FileExtension` parameter is set, the value of the `FileExtension` parameter is used.
     * For more information about file name extensions supported by ApsaraVideo VOD, see [Overview](~~55396~~).
     * URL encoding is required. Separate multiple URLs with commas (,). You can specify a maximum of 20 URLs.
     * Special characters may cause upload failures. Therefore, encode URLs before you separate them with commas (,).
     *
     * @example https://****.mp4
     *
     * @var string
     */
    public $uploadURLs;

    /**
     * @description The custom configurations, including callback configurations and upload acceleration configurations. The value is a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952#UserData~~) topic.
     * > * The callback configurations take effect only if you specify the HTTP callback URL and select the specific callback events in the ApsaraVideo VOD console. For more information about how to configure HTTP callback settings in the ApsaraVideo VOD console, see [Configure callback settings](~~86071~~).
     * > * To use the upload acceleration feature, submit a [ticket](https://ticket-intl.console.aliyun.com/#/ticket/createIndex) to enable this feature. For more information, see [Overview](~~55396~~).
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     * > If both the WorkflowId and TemplateGroupId parameters are set, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     * @example e1e243b42548248197d6f74f9****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'appId'           => 'AppId',
        'storageLocation' => 'StorageLocation',
        'templateGroupId' => 'TemplateGroupId',
        'uploadMetadatas' => 'UploadMetadatas',
        'uploadURLs'      => 'UploadURLs',
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
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->uploadMetadatas) {
            $res['UploadMetadatas'] = $this->uploadMetadatas;
        }
        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
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
     * @return UploadMediaByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['UploadMetadatas'])) {
            $model->uploadMetadatas = $map['UploadMetadatas'];
        }
        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
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
