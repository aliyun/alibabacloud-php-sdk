<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConvertJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConvertJobResponseBody\job\config;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputDetail;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputGroupDetail;

class job extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $code;
    /**
     * @var config
     */
    public $config;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $message;
    /**
     * @var MediaConvertOutputDetail[]
     */
    public $outputDetails;
    /**
     * @var MediaConvertOutputGroupDetail[]
     */
    public $outputGroupDetails;
    /**
     * @var string
     */
    public $pipelineId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'code'               => 'Code',
        'config'             => 'Config',
        'jobId'              => 'JobId',
        'message'            => 'Message',
        'outputDetails'      => 'OutputDetails',
        'outputGroupDetails' => 'OutputGroupDetails',
        'pipelineId'         => 'PipelineId',
        'requestId'          => 'RequestId',
        'state'              => 'State',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->outputDetails)) {
            Model::validateArray($this->outputDetails);
        }
        if (\is_array($this->outputGroupDetails)) {
            Model::validateArray($this->outputGroupDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->outputDetails) {
            if (\is_array($this->outputDetails)) {
                $res['OutputDetails'] = [];
                $n1                   = 0;
                foreach ($this->outputDetails as $item1) {
                    $res['OutputDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputGroupDetails) {
            if (\is_array($this->outputGroupDetails)) {
                $res['OutputGroupDetails'] = [];
                $n1                        = 0;
                foreach ($this->outputGroupDetails as $item1) {
                    $res['OutputGroupDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OutputDetails'])) {
            if (!empty($map['OutputDetails'])) {
                $model->outputDetails = [];
                $n1                   = 0;
                foreach ($map['OutputDetails'] as $item1) {
                    $model->outputDetails[$n1++] = MediaConvertOutputDetail::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputGroupDetails'])) {
            if (!empty($map['OutputGroupDetails'])) {
                $model->outputGroupDetails = [];
                $n1                        = 0;
                foreach ($map['OutputGroupDetails'] as $item1) {
                    $model->outputGroupDetails[$n1++] = MediaConvertOutputGroupDetail::fromMap($item1);
                }
            }
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
