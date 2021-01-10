<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties;
use AlibabaCloud\Tea\Model;

class mediaInfoJob extends Model
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
    public $jobId;

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
     * @var string
     */
    public $pipelineId;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var input
     */
    public $input;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;

    /**
     * @var properties
     */
    public $properties;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'state'            => 'State',
        'jobId'            => 'JobId',
        'userData'         => 'UserData',
        'code'             => 'Code',
        'message'          => 'Message',
        'pipelineId'       => 'PipelineId',
        'async'            => 'Async',
        'input'            => 'Input',
        'MNSMessageResult' => 'MNSMessageResult',
        'properties'       => 'Properties',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        return $model;
    }
}
