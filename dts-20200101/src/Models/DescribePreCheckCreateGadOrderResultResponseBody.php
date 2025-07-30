<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckCreateGadOrderResultResponseBody\preCheckItems;
use AlibabaCloud\Tea\Model;

class DescribePreCheckCreateGadOrderResultResponseBody extends Model
{
    /**
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @example present environment is not support,so skip.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @example gad-bp1i99e8l7913****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var preCheckItems
     */
    public $preCheckItems;

    /**
     * @example True
     *
     * @var bool
     */
    public $preCheckResult;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 92E1E99D-5224-4AD3-8C94-23A3516B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @example 11****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'instanceId' => 'InstanceId',
        'preCheckItems' => 'PreCheckItems',
        'preCheckResult' => 'PreCheckResult',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->preCheckItems) {
            $res['PreCheckItems'] = null !== $this->preCheckItems ? $this->preCheckItems->toMap() : null;
        }
        if (null !== $this->preCheckResult) {
            $res['PreCheckResult'] = $this->preCheckResult;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePreCheckCreateGadOrderResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PreCheckItems'])) {
            $model->preCheckItems = preCheckItems::fromMap($map['PreCheckItems']);
        }
        if (isset($map['PreCheckResult'])) {
            $model->preCheckResult = $map['PreCheckResult'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
