<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobsRequest extends Model
{
    /**
     * @description The encryption configurations. The value must be a JSON string. This parameter is required only when you use HLS encryption.
     *
     * >
     *
     *   You must set **CipherText** in [EncrptConfig](~~86952~~) to the AES\_128 cipher text that is obtained from the response to the [GenerateKMSDataKey](~~455051~~) operation. Otherwise, the HLS encryption fails. For more information about how to use HLS encryption, see [HLS encryption](~~68612~~).
     *
     *   You must select HLS encryption for the template specified by **TemplateGroupId** no matter you use HLS encryption or Alibaba Cloud proprietary cryptography. Otherwise, the transcoded file is not encrypted.
     *
     * @example {"CipherText":"ZjJmZGViNzUtZWY1Mi00Y2RlLTk3****", "DecryptKeyUri":"http://demo.aliyundoc.com?CipherText=ZjJmZGViNzUtZWY1Mi00Y2RlLTk3****","KeyServiceType":"KMS"}
     *
     * @var string
     */
    public $encryptConfig;

    /**
     * @description The override parameter. The value must be a JSON string. You can use this parameter to override the image watermark, text watermark, or subtitle file specified in the transcoding template, or override the encoding format of the subtitle file. For more information about the data structure, see [OverrideParams](~~98618~~).
     *
     * @example {"Watermarks":[{"WatermarkId":"af2afe4761992c47dae973374****","FileUrl":"http://developer.aliyundoc.com/image/image.png"},{"WatermarkId":"e8e5b8038d7ada85b376c2707****","Content":"watermark test"}]}
     *
     * @var string
     */
    public $overrideParams;

    /**
     * @description The ID of the queue that you want to use to run the job.
     *
     * @example d3e680e618708erf45fbf2cae7c****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The priority of the transcoding job in all queued jobs.
     *
     *   Valid values: **1** to **10**.
     *   A value of **10** indicates the highest priority.
     *   Default value: **6**.
     *
     * >  This parameter takes effect only on the queued transcoding jobs. The priorities of the in-progress transcoding jobs are not affected.
     * @example 6
     *
     * @var string
     */
    public $priority;

    /**
     * @description The ID of the transcoding template group that you want to use. To view the template group ID, perform the following operations: Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Transcoding Template Groups**.
     *
     * @example 0e408c803baf658ee637790c5d9f****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The custom settings. The value must be a JSON string. You can configure settings such as message callbacks. For more information, see [UserData](~~86952~~).
     *
     * >  To use the callback configurations specified by this parameter, you must configure an HTTP callback URL and specify the types of the callback events in the ApsaraVideo VOD console. Otherwise, the callback configurations do not take effect.
     * @example {"Extend":{"localId":"****","test":"***"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the video file. You can use one of the following methods to obtain the video ID:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of VideoId from the response to the [CreateUploadVideo](~~55407~~) operation that you call to upload the video.
     *   Obtain the value of VideoId from the response to the [SearchMedia](~~86044~~) operation after you upload the video.
     *
     * @example 142710f878bd42508932f660d7b1****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'encryptConfig'   => 'EncryptConfig',
        'overrideParams'  => 'OverrideParams',
        'pipelineId'      => 'PipelineId',
        'priority'        => 'Priority',
        'templateGroupId' => 'TemplateGroupId',
        'userData'        => 'UserData',
        'videoId'         => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptConfig) {
            $res['EncryptConfig'] = $this->encryptConfig;
        }
        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
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
     * @return SubmitTranscodeJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptConfig'])) {
            $model->encryptConfig = $map['EncryptConfig'];
        }
        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
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
