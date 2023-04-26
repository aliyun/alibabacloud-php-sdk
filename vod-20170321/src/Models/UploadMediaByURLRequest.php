<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
{
    /**
     * @description ## UploadMetadata
     *
     * | CoverURL | String | No | The URL of the custom thumbnail of the media file. |
     * | CateId | String | No | The category ID of the media file. To view the category ID of the media file, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Categories**. |
     * - If you specify multiple media files at a time, ApsaraVideo VOD sends an event notification for each media file after the media file is uploaded.
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The URL of the source file.
     * The URL must contain a file name extension, such as mp4 in `https://****.mp4`.
     * If the URL does not contain a file name extension, you can specify one by setting the `FileExtension` parameter under the `UploadMetadatas` parameter.
     * If the URL contains a file name extension and the `FileExtension` parameter is set, the value of the `FileExtension` parameter is used.
     * For more information about file name extensions supported by ApsaraVideo VOD, see [Overview](~~55396~~).
     * URL encoding is required. Separate multiple URLs with commas (,). You can specify a maximum of 20 URLs.
     * Special characters may cause upload failures. Therefore, encode URLs before you separate them with commas (,).
     *
     * @example outin-bfefbb90a47c******163e1c7426.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The information about one or more upload jobs.
     *
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
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     *
     * @example https://****.mp4
     *
     * @var string
     */
    public $uploadURLs;

    /**
     * @description The ID of the request.
     *
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description > This operation is used to asynchronously upload media files. Upload jobs are queued for execution after they are submitted. The completion time of an upload job varies with the number of jobs in the queue.
     *
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
