<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineAsyncResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $asyncId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $hostMachine;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $submitId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'asyncId' => 'AsyncId',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'hostMachine' => 'HostMachine',
        'nodeId' => 'NodeId',
        'pipelineId' => 'PipelineId',
        'status' => 'Status',
        'submitId' => 'SubmitId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncId) {
            $res['AsyncId'] = $this->asyncId;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->hostMachine) {
            $res['HostMachine'] = $this->hostMachine;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncId'])) {
            $model->asyncId = $map['AsyncId'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['HostMachine'])) {
            $model->hostMachine = $map['HostMachine'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
