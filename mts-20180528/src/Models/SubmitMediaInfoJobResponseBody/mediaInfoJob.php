<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitMediaInfoJobResponseBody;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitMediaInfoJobResponseBody\mediaInfoJob\input;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitMediaInfoJobResponseBody\mediaInfoJob\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitMediaInfoJobResponseBody\mediaInfoJob\properties;
use AlibabaCloud\Tea\Model;

class mediaInfoJob extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'async'            => 'Async',
        'code'             => 'Code',
        'creationTime'     => 'CreationTime',
        'input'            => 'Input',
        'jobId'            => 'JobId',
        'MNSMessageResult' => 'MNSMessageResult',
        'message'          => 'Message',
        'pipelineId'       => 'PipelineId',
        'properties'       => 'Properties',
        'state'            => 'State',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInfoJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
