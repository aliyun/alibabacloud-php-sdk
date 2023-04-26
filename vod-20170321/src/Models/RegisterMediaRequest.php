<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaRequest extends Model
{
    /**
     * @description The URLs of the media files that failed to be registered.
     *
     * @example [{"FileURL":"https://****.oss-cn-shanghai.aliyuncs.com/video/test/video123.m3u8","Title":"VideoName"}]
     *
     * @var string
     */
    public $registerMetadatas;

    /**
     * @description The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     * > If both the WorkflowId and TemplateGroupId parameters are set, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     * @example ca3a8f6e49c87b65806709586****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The ID of the media file that is registered with ApsaraVideo VOD. If the registered media file is an audio or video file, the value of the VideoId parameter returned by ApsaraVideo VOD takes effect.
     *
     * @example {"Extend":{"localId":"****","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the request.
     *
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
