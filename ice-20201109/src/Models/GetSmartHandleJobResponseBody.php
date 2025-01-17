<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\jobResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;

class GetSmartHandleJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var jobResult
     */
    public $jobResult;
    /**
     * @var string
     */
    public $output;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var smartJobInfo
     */
    public $smartJobInfo;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'jobId'        => 'JobId',
        'jobResult'    => 'JobResult',
        'output'       => 'Output',
        'requestId'    => 'RequestId',
        'smartJobInfo' => 'SmartJobInfo',
        'state'        => 'State',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->jobResult) {
            $this->jobResult->validate();
        }
        if (null !== $this->smartJobInfo) {
            $this->smartJobInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobResult) {
            $res['JobResult'] = null !== $this->jobResult ? $this->jobResult->toArray($noStream) : $this->jobResult;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smartJobInfo) {
            $res['SmartJobInfo'] = null !== $this->smartJobInfo ? $this->smartJobInfo->toArray($noStream) : $this->smartJobInfo;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobResult'])) {
            $model->jobResult = jobResult::fromMap($map['JobResult']);
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmartJobInfo'])) {
            $model->smartJobInfo = smartJobInfo::fromMap($map['SmartJobInfo']);
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
