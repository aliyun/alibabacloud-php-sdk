<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaRequest extends Model
{
    /**
     * @description The metadata of the media files. The value must be a JSON string. You can specify the metadata for up to 10 media files at a time. For more information about the metadata of media files, see the **RegisterMetadata** section of this topic.
     *
     * @example [{"FileURL":"https://****.oss-cn-shanghai.aliyuncs.com/video/test/video123.m3u8","Title":"VideoName"}]
     *
     * @var string
     */
    public $registerMetadatas;

    /**
     * @description The ID of the transcoding template group. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Transcoding Template Groups**. On the Transcoding Template Groups page, you can view the ID of the transcoding template group.
     *   Obtain the value of the TranscodeTemplateGroupId parameter from the response to the [AddTranscodeTemplateGroup](~~102665~~) operation that you called to create a transcoding template group.
     *   Obtain the value of the TranscodeTemplateGroupId parameter from the response to the [ListTranscodeTemplateGroup](~~102669~~) operation that you called to query transcoding template groups.
     *
     * >
     *
     *   If you do not need to transcode media files, set the TemplateGroupId parameter to VOD_NO_TRANSCODE. If you do not specify this configuration, errors occur on your files. If you need to transcode media files, specify the ID of the transcoding template group.
     *
     *   If you specify both WorkflowId and TemplateGroupId, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     *
     * @example ca3a8f6e49c87b65806709586****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The custom settings. The value must be a JSON string. You can configure settings such as message callbacks. For more information, see [UserData](~~86952#section\_6fg_qll_v3w~~).
     *
     * >  You cannot configure callbacks for this operation. No callback message is returned after the media files are registered even if you configure callback settings for this parameter. If you configure callback settings for the UserData parameter when you create media processing jobs such as transcoding and snapshot capture jobs for the media file, the callback URL that you specified is used. If you do not configure callback settings when you create media processing jobs, the callback URL that you specified for the UserData parameter when you register the media file is used.
     * @example {"Extend":{"localId":"****","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the workflow. To view the workflow ID, perform the following steps: Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     *
     * >  If you specify both WorkflowId and TemplateGroupId, the value of WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     * @example 637adc2b7ba51a83d841606f8****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'registerMetadatas' => 'RegisterMetadatas',
        'templateGroupId'   => 'TemplateGroupId',
        'userData'          => 'UserData',
        'workflowId'        => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registerMetadatas) {
            $res['RegisterMetadatas'] = $this->registerMetadatas;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
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
     * @return RegisterMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegisterMetadatas'])) {
            $model->registerMetadatas = $map['RegisterMetadatas'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
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
