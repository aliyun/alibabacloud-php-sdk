<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitSegmentationJobRequest extends Model
{
    /**
     * @example ****12e8864746a0a398****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @example {
     * "Mode": "UserDefined",
     * "Ranges": [{
     * "In": 10,
     * "Out": 20
     * }, {
     * "In": 35,
     * "Out": 50
     * }]
     * }
     *
     * @var string
     */
    public $jobParams;

    /**
     * @example {
     * "OutputMediaTarget": "oss-object",
     * "Bucket": "test-bucket",
     * "ObjectKey": "path/to/test_{index}.mp4",
     * "Width": 1920,
     * "Height": 1080,
     * "ExportAsNewMedia": false
     * }
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'inputConfig' => 'InputConfig',
        'jobParams' => 'JobParams',
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
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
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
     * @return SubmitSegmentationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
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
