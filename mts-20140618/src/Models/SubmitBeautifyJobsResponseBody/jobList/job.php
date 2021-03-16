<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitBeautifyJobsResponseBody\jobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitBeautifyJobsResponseBody\jobList\job\beautifyConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitBeautifyJobsResponseBody\jobList\job\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitBeautifyJobsResponseBody\jobList\job\MNSMessageResult;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var beautifyConfig
     */
    public $beautifyConfig;

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
     * @var string
     */
    public $pipelineId;

    /**
     * @var input
     */
    public $input;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'beautifyConfig'   => 'BeautifyConfig',
        'state'            => 'State',
        'userData'         => 'UserData',
        'code'             => 'Code',
        'message'          => 'Message',
        'pipelineId'       => 'PipelineId',
        'input'            => 'Input',
        'MNSMessageResult' => 'MNSMessageResult',
        'id'               => 'Id',
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
        if (null !== $this->beautifyConfig) {
            $res['BeautifyConfig'] = null !== $this->beautifyConfig ? $this->beautifyConfig->toMap() : null;
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
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
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
        if (isset($map['BeautifyConfig'])) {
            $model->beautifyConfig = beautifyConfig::fromMap($map['BeautifyConfig']);
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
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
