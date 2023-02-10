<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\ListBatchTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class increments extends Model
{
    /**
     * @example maijun-test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example http://xxx.com
     *
     * @var string
     */
    public $callbackAddress;

    /**
     * @example PROCESSING
     *
     * @var string
     */
    public $callbackTaskStatus;

    /**
     * @example https://xxx.com
     *
     * @var string
     */
    public $errorUrl;

    /**
     * @example 38
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $msg;

    /**
     * @example /test/abc
     *
     * @var string
     */
    public $ossPath;

    /**
     * @example PROCESSING
     *
     * @var string
     */
    public $status;

    /**
     * @example 2023-02-09T02:15:46.911+00:00
     *
     * @var string
     */
    public $utcCreateTime;

    /**
     * @example 2023-02-09T02:15:46.911+00:00
     *
     * @var string
     */
    public $utcUpdateTime;
    protected $_name = [
        'bucketName'         => 'BucketName',
        'callbackAddress'    => 'CallbackAddress',
        'callbackTaskStatus' => 'CallbackTaskStatus',
        'errorUrl'           => 'ErrorUrl',
        'id'                 => 'Id',
        'msg'                => 'Msg',
        'ossPath'            => 'OssPath',
        'status'             => 'Status',
        'utcCreateTime'      => 'UtcCreateTime',
        'utcUpdateTime'      => 'UtcUpdateTime',
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
        if (null !== $this->callbackTaskStatus) {
            $res['CallbackTaskStatus'] = $this->callbackTaskStatus;
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
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }
        if (null !== $this->utcUpdateTime) {
            $res['UtcUpdateTime'] = $this->utcUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return increments
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
        if (isset($map['CallbackTaskStatus'])) {
            $model->callbackTaskStatus = $map['CallbackTaskStatus'];
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
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }
        if (isset($map['UtcUpdateTime'])) {
            $model->utcUpdateTime = $map['UtcUpdateTime'];
        }

        return $model;
    }
}
