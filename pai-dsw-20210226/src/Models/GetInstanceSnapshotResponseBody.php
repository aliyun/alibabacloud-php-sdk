<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceSnapshotResponseBody extends Model
{
    /**
     * @description 实例快照保存时间（GMT）
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 实例快照修改时间（GMT）
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 实例快照描述
     *
     * @var string
     */
    public $instanceSnapshotDescription;

    /**
     * @description 实例快照ID
     *
     * @var string
     */
    public $instanceSnapshotId;

    /**
     * @description 实例快照名称
     *
     * @var string
     */
    public $instanceSnapshotName;

    /**
     * @description 实例快照存储地址
     *
     * @var string
     */
    public $instanceSnapshotRepoUrl;

    /**
     * @description 实例快照状态
     *
     * @var string
     */
    public $instanceSnapshotStatus;

    /**
     * @description 实例快照标签
     *
     * @var string
     */
    public $instanceSnapshotTag;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gmtCreateTime'               => 'GmtCreateTime',
        'gmtModifiedTime'             => 'GmtModifiedTime',
        'instanceId'                  => 'InstanceId',
        'instanceSnapshotDescription' => 'InstanceSnapshotDescription',
        'instanceSnapshotId'          => 'InstanceSnapshotId',
        'instanceSnapshotName'        => 'InstanceSnapshotName',
        'instanceSnapshotRepoUrl'     => 'InstanceSnapshotRepoUrl',
        'instanceSnapshotStatus'      => 'InstanceSnapshotStatus',
        'instanceSnapshotTag'         => 'InstanceSnapshotTag',
        'requestId'                   => 'RequestId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSnapshotDescription) {
            $res['InstanceSnapshotDescription'] = $this->instanceSnapshotDescription;
        }
        if (null !== $this->instanceSnapshotId) {
            $res['InstanceSnapshotId'] = $this->instanceSnapshotId;
        }
        if (null !== $this->instanceSnapshotName) {
            $res['InstanceSnapshotName'] = $this->instanceSnapshotName;
        }
        if (null !== $this->instanceSnapshotRepoUrl) {
            $res['InstanceSnapshotRepoUrl'] = $this->instanceSnapshotRepoUrl;
        }
        if (null !== $this->instanceSnapshotStatus) {
            $res['InstanceSnapshotStatus'] = $this->instanceSnapshotStatus;
        }
        if (null !== $this->instanceSnapshotTag) {
            $res['InstanceSnapshotTag'] = $this->instanceSnapshotTag;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSnapshotDescription'])) {
            $model->instanceSnapshotDescription = $map['InstanceSnapshotDescription'];
        }
        if (isset($map['InstanceSnapshotId'])) {
            $model->instanceSnapshotId = $map['InstanceSnapshotId'];
        }
        if (isset($map['InstanceSnapshotName'])) {
            $model->instanceSnapshotName = $map['InstanceSnapshotName'];
        }
        if (isset($map['InstanceSnapshotRepoUrl'])) {
            $model->instanceSnapshotRepoUrl = $map['InstanceSnapshotRepoUrl'];
        }
        if (isset($map['InstanceSnapshotStatus'])) {
            $model->instanceSnapshotStatus = $map['InstanceSnapshotStatus'];
        }
        if (isset($map['InstanceSnapshotTag'])) {
            $model->instanceSnapshotTag = $map['InstanceSnapshotTag'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
