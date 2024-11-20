<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest\scheduleConfig;
use AlibabaCloud\Tea\Model;

class SubmitIProductionJobRequest extends Model
{
    /**
     * @description The name of the algorithm that you want to use for the job. Valid values:
     *
     *   **Cover**: This algorithm intelligently generates a thumbnail image for a video.
     *   **VideoClip**: This algorithm intelligently generates a summary for a video.
     *   **VideoDelogo**: This algorithm removes logos from a video.
     *   **VideoDetext**: This algorithm removes captions from a video.
     *   **CaptionExtraction**: This algorithm extracts captions from a video and generates the caption file.
     *   **VideoGreenScreenMatting**: This algorithm performs green-screen image matting on a video and generates a new video.
     *   **FaceBeauty**: This algorithm performs video retouching.
     *   **VideoH2V**: This algorithm transforms a video from the landscape mode to the portrait mode.
     *   **MusicSegmentDetect**: This algorithm detects the chorus of a song.
     *   **AudioBeatDetection**: This algorithm detects rhythms.
     *   **AudioQualityAssessment**: This algorithm assesses the audio quality.
     *   **SpeechDenoise**: This algorithm performs noise reduction.
     *   **AudioMixing**: This algorithm mixes audio streams.
     *
     * This parameter is required.
     * @example Cover
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The input file. The file can be an Object Storage Service (OSS) object or a media asset.
     *
     * This parameter is required.
     * @var input
     */
    public $input;

    /**
     * @description The algorithm-specific parameters. The parameters are specified as JSON objects and vary based on the algorithm. For more information, see the "Parameters of JobParams" section of this topic.
     *
     * @example {"Model":"gif"}
     *
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @description The name of the intelligent production job. The name can be up to 100 characters in length.
     *
     * @var string
     */
    public $name;

    /**
     * @description The output file. The file can be an OSS object or a media asset.
     *
     * This parameter is required.
     * @var output
     */
    public $output;

    /**
     * @description The scheduling configuration.
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @description The template ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The user-defined data that is returned in the response. The value can be up to 1,024 bytes in length.
     *
     * @example {"test":1}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'functionName'   => 'FunctionName',
        'input'          => 'Input',
        'jobParams'      => 'JobParams',
        'modelId'        => 'ModelId',
        'name'           => 'Name',
        'output'         => 'Output',
        'scheduleConfig' => 'ScheduleConfig',
        'templateId'     => 'TemplateId',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIProductionJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
