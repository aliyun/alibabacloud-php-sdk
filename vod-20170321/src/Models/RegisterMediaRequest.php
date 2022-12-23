<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaRequest extends Model
{
    /**
     * @description The metadata of the media file that you want to register. The value is a JSON string. You can specify the metadata for a maximum of 10 media files at a time. For more information about the metadata of media files, see the **RegisterMetadata** section of this topic.
     *
     * @example [{"FileURL":"https://****.oss-cn-shanghai.aliyuncs.com/video/test/video123.m3u8","Title":"VideoName"}]
     *
     * @var string
     */
    public $registerMetadatas;

    /**
     * @description The ID of the transcoding template group. You can use one of the following methods to obtain the ID of the transcoding template group:
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Transcoding Template Groups**. On the Transcoding Template Groups page, you can view the ID of the transcoding template group.
     *   View the value of the TranscodeTemplateGroupId parameter returned by the [AddTranscodeTemplateGroup](~~102665~~) operation that you called to create a transcoding template group.
     *   View the value of the TranscodeTemplateGroupId parameter returned by the [ListTranscodeTemplateGroup](~~102669~~) operation that you called to query a transcoding template group.
     * > *   If you do not need to transcode the media file, set the TemplateGroupId parameter to VOD_NO_TRANSCODE. Otherwise, an exception occurs during video playback. If you need to transcode the media file, specify the ID of the transcoding template group.
     * > *   If both the WorkflowId and TemplateGroupId parameters are set, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     * @example ca3a8f6e49c87b65806709586****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The custom configurations such as callback configurations. The value is a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952#section\_6fg_qll_v3w~~) topic.
     *
     * @example {"Extend":{"localId":"****","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     * > If both the WorkflowId and TemplateGroupId parameters are set, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
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
