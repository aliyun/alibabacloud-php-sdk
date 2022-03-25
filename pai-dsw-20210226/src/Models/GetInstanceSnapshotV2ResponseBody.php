<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceSnapshotV2ResponseBody extends Model
{
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
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'imageId'         => 'ImageId',
        'imageUrl'        => 'ImageUrl',
        'instanceId'      => 'InstanceId',
        'reasonCode'      => 'ReasonCode',
        'reasonMessage'   => 'ReasonMessage',
        'requestId'       => 'RequestId',
        'snapshotId'      => 'SnapshotId',
        'snapshotName'    => 'SnapshotName',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceSnapshotV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
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

        return $model;
    }
}
