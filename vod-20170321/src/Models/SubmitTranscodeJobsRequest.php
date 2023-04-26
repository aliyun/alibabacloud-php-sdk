<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobsRequest extends Model
{
    /**
     * @description The ID of the video.
     * > The VideoId parameter is required.
     * @example {"CipherText":"ZjJmZGViNzUtZWY1Mi00Y2RlLTk3****", "DecryptKeyUri":"http://demo.aliyundoc.com?CipherText=ZjJmZGViNzUtZWY1Mi00Y2RlLTk3****","KeyServiceType":"KMS"}
     *
     * @var string
     */
    public $encryptConfig;

    /**
     * @description The transcoding jobs.
     * > This parameter is not returned for HLS packaging tasks. You must asynchronously receive the transcoding result.
     * @example {"Watermarks":[{"WatermarkId":"af2afe4761992c47dae973374****","FileUrl":"http://developer.aliyundoc.com/image/image.png"},{"WatermarkId":"e8e5b8038d7ada85b376c2707****","Content":"watermark test"}]}
     *
     * @var string
     */
    public $overrideParams;

    /**
     * @description The priority of the current transcoding job in all queued jobs.
     *   Valid values: **1** to **10**.
     *   A value of **10** indicates the highest priority.
     *   Default value: **6**.
     * > This parameter specifies the priority of only the current transcoding job in all queued jobs and does not affect the priorities of jobs that are running.
     * @example d3e680e618708erf45fbf2cae7c****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The encryption configurations. The value is a JSON-formatted string. This parameter is required only when HLS encryption is used.
     * > *   In the JSON-formatted string of the [EncryptConfig](~~86952~~) parameter, you must set the **CipherText** parameter to an AES-128 ciphertext key that is generated by calling the [GenerateDataKey](~~28948~~) operation. Otherwise, the transcoding job that uses HLS encryption fails. For more information about how to use HLS encryption, see [HLS encryption](~~68612~~).
     * > *   Regardless of whether HLS encryption or Alibaba Cloud proprietary cryptography is required, you must enable HLS encryption for the template group that is specified by the **TemplateGroupId** parameter. Otherwise, HLS encryption cannot be used.
     * @example 6
     *
     * @var string
     */
    public $priority;

    /**
     * @description The parameters used for overriding. The value is a JSON-formatted string. You can set this parameter to override the watermark or subtitle that is associated with the transcoding template. You can override the file URL of an image watermark, the content of a text watermark, the URL of a subtitle file, and the encoding format of a subtitle file. For more information about the data structure, see the "OverrideParams" section of the [Media processing parameters](~~98618~~) topic.
     *
     * @example 0e408c803baf658ee637790c5d9f****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The detailed information of the job.
     *
     * @example {"Extend":{"localId":"****","test":"***"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The operation that you want to perform. Set the value to **SubmitTranscodeJobs**.
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
