<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SkipPreCheckResponseBody extends Model
{
    /**
     * @description The error code. This parameter will be removed in the future.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the **%s** variable in the **ErrMessage** parameter.
     *
     * >  If the specified **JobId** parameter is invalid, **The Value of Input Parameter %s is not valid** is returned for **ErrMessage** and **JobId** is returned for **DynamicMessage**.
     * @example JobId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the DTS task on which the precheck is performed.
     *
     * @example kyri3z9w29a****
     *
     * @var string
     */
    public $migrationJobId;

    /**
     * @description The ID of the request.
     *
     * @example 8C498360-7892-433C-847A-BA71A850****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the precheck task.
     *
     * @example b4my3zg929a****
     *
     * @var string
     */
    public $scheduleJobId;

    /**
     * @description The shortened name of the precheck item.
     *
     * @example CHECK_SAME_OBJ
     *
     * @var string
     */
    public $skipItems;

    /**
     * @description The name of the precheck item.
     *
     * @example CHECK_SAME_OBJ_DETAIL
     *
     * @var string
     */
    public $skipNames;

    /**
     * @description Indicates whether the call is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'dynamicMessage' => 'DynamicMessage',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'migrationJobId' => 'MigrationJobId',
        'requestId'      => 'RequestId',
        'scheduleJobId'  => 'ScheduleJobId',
        'skipItems'      => 'SkipItems',
        'skipNames'      => 'SkipNames',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->migrationJobId) {
            $res['MigrationJobId'] = $this->migrationJobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleJobId) {
            $res['ScheduleJobId'] = $this->scheduleJobId;
        }
        if (null !== $this->skipItems) {
            $res['SkipItems'] = $this->skipItems;
        }
        if (null !== $this->skipNames) {
            $res['SkipNames'] = $this->skipNames;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SkipPreCheckResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['MigrationJobId'])) {
            $model->migrationJobId = $map['MigrationJobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleJobId'])) {
            $model->scheduleJobId = $map['ScheduleJobId'];
        }
        if (isset($map['SkipItems'])) {
            $model->skipItems = $map['SkipItems'];
        }
        if (isset($map['SkipNames'])) {
            $model->skipNames = $map['SkipNames'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
