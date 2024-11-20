<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\jobResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;
use AlibabaCloud\Tea\Model;

class GetSmartHandleJobResponseBody extends Model
{
    /**
     * @description The job ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The job results.
     *
     * @var jobResult
     */
    public $jobResult;

    /**
     * @description The job results.
     *
     * @example {}
     *
     * @var string
     */
    public $output;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the intelligent job.
     *
     * @var smartJobInfo
     */
    public $smartJobInfo;

    /**
     * @description The job state.
     *
     * Valid values:
     *
     *   Finished
     *   Failed
     *   Executing
     *   Created
     *
     * @example Finished
     *
     * @var string
     */
    public $state;

    /**
     * @description The user-defined data in the JSON format.
     *
     * @example {"user":"data"}
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobResult) {
            $res['JobResult'] = null !== $this->jobResult ? $this->jobResult->toMap() : null;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smartJobInfo) {
            $res['SmartJobInfo'] = null !== $this->smartJobInfo ? $this->smartJobInfo->toMap() : null;
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
     * @return GetSmartHandleJobResponseBody
     */
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
