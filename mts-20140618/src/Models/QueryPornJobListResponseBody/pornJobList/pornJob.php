<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\pornJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\pornJobList\pornJob\censorPornResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\pornJobList\pornJob\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\pornJobList\pornJob\pornConfig;
use AlibabaCloud\Tea\Model;

class pornJob extends Model
{
    /**
     * @var censorPornResult
     */
    public $censorPornResult;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var pornConfig
     */
    public $pornConfig;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'censorPornResult' => 'CensorPornResult',
        'code'             => 'Code',
        'creationTime'     => 'CreationTime',
        'id'               => 'Id',
        'input'            => 'Input',
        'message'          => 'Message',
        'pipelineId'       => 'PipelineId',
        'pornConfig'       => 'PornConfig',
        'state'            => 'State',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->censorPornResult) {
            $res['CensorPornResult'] = null !== $this->censorPornResult ? $this->censorPornResult->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pornConfig) {
            $res['PornConfig'] = null !== $this->pornConfig ? $this->pornConfig->toMap() : null;
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
     * @return pornJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CensorPornResult'])) {
            $model->censorPornResult = censorPornResult::fromMap($map['CensorPornResult']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['PornConfig'])) {
            $model->pornConfig = pornConfig::fromMap($map['PornConfig']);
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
