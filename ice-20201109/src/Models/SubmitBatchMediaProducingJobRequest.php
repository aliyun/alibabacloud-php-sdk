<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitBatchMediaProducingJobRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ****12e8864746a0a398****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The editing configurations. For more information, see [EditingConfig](~~2692547#1be9bba03b7qu~~).
     *
     * @example {
     * "MediaConfig": {
     * "Volume": 0
     * },
     * "SpeechConfig": {
     * "Volume": 1
     * },
     * "BackgroundMusicConfig": {
     * "Volume": 0.3
     * }
     * }
     *
     * @var string
     */
    public $editingConfig;

    /**
     * @description The input configurations. For more information, see [InputConfig](~~2692547#2faed1559549n~~).
     *
     * @var string
     */
    public $inputConfig;

    /**
     * @description The output configurations. For more information, see [OutputConfig](~~2692547#447b928fcbuoa~~).
     *
     * @example {
     * "MediaURL": "http://xxx.oss-cn-shanghai.aliyuncs.com/xxx_{index}.mp4",
     * "Count": 20,
     * "MaxDuration": 15,
     * "Width": 1080,
     * "Height": 1920,
     * "Video": {"Crf": 27}
     * }
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @description The user-defined data, including the business and callback configurations. For more information, see [UserData](https://help.aliyun.com/document_detail/357745.html).
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'editingConfig' => 'EditingConfig',
        'inputConfig' => 'InputConfig',
        'outputConfig' => 'OutputConfig',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBatchMediaProducingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
