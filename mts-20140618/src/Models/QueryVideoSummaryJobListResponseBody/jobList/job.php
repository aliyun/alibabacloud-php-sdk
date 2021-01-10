<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList\job\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList\job\videoSummaryResult;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var videoSummaryResult
     */
    public $videoSummaryResult;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'state'              => 'State',
        'userData'           => 'UserData',
        'code'               => 'Code',
        'message'            => 'Message',
        'videoSummaryResult' => 'VideoSummaryResult',
        'pipelineId'         => 'PipelineId',
        'input'              => 'Input',
        'id'                 => 'Id',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->videoSummaryResult) {
            $res['VideoSummaryResult'] = null !== $this->videoSummaryResult ? $this->videoSummaryResult->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['VideoSummaryResult'])) {
            $model->videoSummaryResult = videoSummaryResult::fromMap($map['VideoSummaryResult']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
