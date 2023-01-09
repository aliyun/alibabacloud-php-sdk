<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class GetPtsSceneRunningStatusResponseBody extends Model
{
    /**
     * @example 4001
     *
     * @var string
     */
    public $code;

    /**
     * @example 2021-03-01 16:05:56
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 400
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 2021-03-26 16:03:56
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example DC4E3177-6745-4925-B423-4E89VV34221A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'createTime'     => 'CreateTime',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'modifiedTime'   => 'ModifiedTime',
        'requestId'      => 'RequestId',
        'sceneName'      => 'SceneName',
        'status'         => 'Status',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPtsSceneRunningStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
