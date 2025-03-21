<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
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
     * @description The custom identifier for deduplication. If you specify this parameter and send a request, an error is returned if a request with the same identifier was sent in the last 10 minutes. A custom identifier can be up to 50 characters in length and can contain letters, digits, hyphens (-), and underscores (_). If you do not specify this parameter or leave this parameter empty, duplicate requests are not filtered.
     *
     * @example 5c62d40299034bbaa4c195da330****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The storage address of the media file.
     *
     * To view the storage address, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/?spm=a2c4g.11186623.2.15.6948257eaZ4m54#/vod/settings/censored). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Storage**. If you do not specify a storage address, the default storage address is used.
     *
     * @example outin-bfefbb90a47c******163e1c7426.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The ID of the transcoding template group. You can use one of the following methods to obtain the ID of the transcoding template group:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Transcoding Template Groups**. On the Transcoding Template Groups page, view the ID of the transcoding template group.
     *   Obtain the value of TranscodeTemplateGroupId from the response to the [AddTranscodeTemplateGroup](https://help.aliyun.com/document_detail/102665.html) operation.
     *   Obtain the value of TranscodeTemplateGroupId from the response to the [ListTranscodeTemplateGroup](https://help.aliyun.com/document_detail/102669.html) operation.
     *
     * >-   If you leave this parameter empty, the default transcoding template group is used for transcoding. If you specify this parameter, the specified transcoding template group is used for transcoding.
     * >-   You can also specify the ID of the transcoding template group in `UploadMetadatas`. If you specify this parameter and TemplateGroupId in UploadMetadatas, the TemplateGroupId in UploadMetadatas takes effect.
     *
     * @example ca3a8f6e4957b65806709586****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The metadata of the media file that you want to upload. The value must be a JSON string.
     *
     *   This parameter takes effect only if SourceURL matches the URL that you specified for UploadURLs.
     *   You must convert the JSON-formatted data such as `[UploadMetadata, UploadMetadata,…]` to a JSON string.
     *   For more information, see the **UploadMetadata** table.
     *
     * @example [{"SourceURL":"https://example.aliyundoc.com/video01.mp4","Title":"urlUploadTest"}]
     *
     * @var string
     */
    public $uploadMetadatas;

    /**
     * @description The URL of the media file.
     *
     *   You must include a file name extension in the URL, such as `https://****.mp4`.
     *
     *   If the URL does not contain a file name extension, specify a file name extension for `FileExtension` in `UploadMetadatas`.
     *   If you specify `FileExtension` when the URL contains a file name extension, the file name extension that you specified for `FileExtension` takes effect.
     *   For more information about file name extensions supported by ApsaraVideo VOD, see [Overview](https://help.aliyun.com/document_detail/55396.html).
     *
     *   URL encoding is required. Separate multiple URLs with commas (,). You can specify a maximum of 20 URLs.
     *
     *   Special characters may cause upload failures. You must encode URLs before you separate them with commas (,).
     *
     * This parameter is required.
     *
     * @example https://****.mp4
     *
     * @var string
     */
    public $uploadURLs;

    /**
     * @description The custom configurations such as callback configurations and upload acceleration configurations. The value must be a JSON string. For more information, see [Request parameters](~~86952#UserData~~).
     *
     * >-   The callback configurations take effect only after you specify the HTTP callback URL and select specific callback events in the ApsaraVideo VOD console. For more information about how to configure HTTP callback settings in the ApsaraVideo VOD console, see [Configure callback settings](https://help.aliyun.com/document_detail/86071.html).
     * >-   If you want to enable the upload acceleration feature, [submit a request on Yida](https://yida.alibaba-inc.com/o/ticketapply). For more information, see [Overview](https://help.aliyun.com/document_detail/55396.html).
     *
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     *
     * > If you specify WorkflowId and TemplateGroupId, the value of WorkflowId takes effect. For more information, see [Workflows](https://help.aliyun.com/document_detail/115347.html).
     *
     * @example e1e243b42548248197d6f74f9****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'appId' => 'AppId',
        'sessionId' => 'SessionId',
        'storageLocation' => 'StorageLocation',
        'templateGroupId' => 'TemplateGroupId',
        'uploadMetadatas' => 'UploadMetadatas',
        'uploadURLs' => 'UploadURLs',
        'userData' => 'UserData',
        'workflowId' => 'WorkflowId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
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
