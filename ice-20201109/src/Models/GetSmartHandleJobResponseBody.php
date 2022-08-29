<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;
use AlibabaCloud\Tea\Model;

class GetSmartHandleJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

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
