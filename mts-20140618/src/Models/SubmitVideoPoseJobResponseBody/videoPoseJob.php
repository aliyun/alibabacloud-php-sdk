<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\outputConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\properties;
use AlibabaCloud\Tea\Model;

class videoPoseJob extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $state;

    /**
     * @var input
     */
    public $input;

    /**
     * @var outputConfig
     */
    public $outputConfig;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;
    protected $_name = [
        'jobId'            => 'JobId',
        'pipelineId'       => 'PipelineId',
        'userData'         => 'UserData',
        'state'            => 'State',
        'input'            => 'Input',
        'outputConfig'     => 'OutputConfig',
        'properties'       => 'Properties',
        'MNSMessageResult' => 'MNSMessageResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toMap() : null;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoPoseJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = outputConfig::fromMap($map['OutputConfig']);
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }

        return $model;
    }
}
