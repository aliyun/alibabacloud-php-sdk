<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListResponseBody\data\increments;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The name of the Object Storage Service (OSS) bucket.
     *
     * @example bucketName
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The callback address.
     *
     * @example http://xxxxx
     *
     * @var string
     */
    public $callbackAddress;

    /**
     * @description The error code returned.
     *
     *   A value of 0 indicates that the operation is successful.
     *   Values other than 0 indicate errors.
     *
     * @example 0
     *
     * @var string
     */
    public $code;

    /**
     * @description The address where you can download the result. The address is valid for 2 hours.
     *
     * @example https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx
     *
     * @var string
     */
    public $errorUrl;

    /**
     * @description The ID of the task.
     *
     * @example 500
     *
     * @var int
     */
    public $id;

    /**
     * @description The error message returned.
     *
     * @example sucess
     *
     * @var string
     */
    public $msg;

    /**
     * @description The absolute path to the increment.meta file in the bucket. The path must start with a forward slash (/) and cannot end with a forward slash (/).
     *
     * @example /xx/xx
     *
     * @var string
     */
    public $path;

    /**
     * @description The status of the batch task.
     *
     *   PROCESSING: in progress
     *   FAIL: failed
     *   SUCCESS: successful
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the task was created. Unit: milliseconds.
     *
     * @example 1629095713000
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The time when the task was updated. Unit: milliseconds.
     *
     * @example 1629095760000
     *
     * @var int
     */
    public $utcModified;
    protected $_name = [
        'bucketName'      => 'BucketName',
        'callbackAddress' => 'CallbackAddress',
        'code'            => 'Code',
        'errorUrl'        => 'ErrorUrl',
        'id'              => 'Id',
        'msg'             => 'Msg',
        'path'            => 'Path',
        'status'          => 'Status',
        'utcCreate'       => 'UtcCreate',
        'utcModified'     => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->callbackAddress) {
            $res['CallbackAddress'] = $this->callbackAddress;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorUrl) {
            $res['ErrorUrl'] = $this->errorUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CallbackAddress'])) {
            $model->callbackAddress = $map['CallbackAddress'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorUrl'])) {
            $model->errorUrl = $map['ErrorUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
