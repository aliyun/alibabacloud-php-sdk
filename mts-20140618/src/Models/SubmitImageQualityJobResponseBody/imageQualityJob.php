<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobResponseBody\imageQualityJob\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobResponseBody\imageQualityJob\result;
use AlibabaCloud\Tea\Model;

class imageQualityJob extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'result'       => 'Result',
        'state'        => 'State',
        'jobId'        => 'JobId',
        'userData'     => 'UserData',
        'pipelineId'   => 'PipelineId',
        'input'        => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageQualityJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
