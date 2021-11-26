<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;
use AlibabaCloud\Tea\Model;

class GetSmartHandleJobResponseBody extends Model
{
    /**
     * @description 任务Id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 任务结果
     *
     * @var string
     */
    public $output;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 智能任务信息
     *
     * @var smartJobInfo
     */
    public $smartJobInfo;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $state;

    /**
     * @description 用户自定义信息
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'jobId'        => 'JobId',
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
