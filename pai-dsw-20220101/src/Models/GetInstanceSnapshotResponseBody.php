<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceSnapshotResponseBody extends Model
{
    /**
     * @description 状态码
     *
     * @var string
     */
    public $code;

    /**
     * @description 实例快照创建时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 实例快照修改时间
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description http状态码
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description 实例快照的镜像Id
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 实例快照的镜像地址
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 实例Id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 说明
     *
     * @var string
     */
    public $message;

    /**
     * @description 实例快照错误代码
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @description 实例快照错误消息
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 实例快照Id
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description 实例快照名称
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description 实例快照状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 成功标志
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'httpStatusCode'  => 'HttpStatusCode',
        'imageId'         => 'ImageId',
        'imageUrl'        => 'ImageUrl',
        'instanceId'      => 'InstanceId',
        'message'         => 'Message',
        'reasonCode'      => 'ReasonCode',
        'reasonMessage'   => 'ReasonMessage',
        'requestId'       => 'RequestId',
        'snapshotId'      => 'SnapshotId',
        'snapshotName'    => 'SnapshotName',
        'status'          => 'Status',
        'success'         => 'Success',
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
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
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
     * @return GetInstanceSnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
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
