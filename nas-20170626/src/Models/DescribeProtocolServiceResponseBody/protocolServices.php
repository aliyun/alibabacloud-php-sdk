<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolServiceResponseBody;

use AlibabaCloud\Tea\Model;

class protocolServices extends Model
{
    /**
     * @description The time when the protocol service was created. The time is displayed in UTC.
     *
     * @example 2018-12-12T07:28:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the protocol service.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter and cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The base throughput of the protocol service. Unit: MB/s.
     *
     * @example 100
     *
     * @var int
     */
    public $instanceBaseThroughput;

    /**
     * @description The burst throughput of the protocol service. Unit: MB/s.
     *
     * @example 100
     *
     * @var int
     */
    public $instanceBurstThroughput;

    /**
     * @description The memory cache size of the protocol service. Unit: GiB.
     *
     * @example 0
     *
     * @var int
     */
    public $instanceRAM;

    /**
     * @description The time when the protocol service was modified. The time is displayed in UTC.
     *
     * @example 2018-12-12T07:28:38Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The total number of CPFS directories and filesets exported in the protocol service.
     *
     * @example 5
     *
     * @var int
     */
    public $mountTargetCount;

    /**
     * @description The ID of the protocol service.
     *
     * @example ptc-197ed6a00f2b****
     *
     * @var string
     */
    public $protocolServiceId;

    /**
     * @description The specification of the protocol service.
     *
     *   Valid value: General.
     *   Default value: General.
     *
     * @example General
     *
     * @var string
     */
    public $protocolSpec;

    /**
     * @description The throughput of the protocol service. Unit: MB/s.
     *
     * @example 500
     *
     * @var int
     */
    public $protocolThroughput;

    /**
     * @description The protocol type supported by the protocol service.
     *
     * Valid values:
     *
     *   NFS: The protocol service supports access over the Network File System (NFS) protocol.
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The status of the protocol service.
     *
     * Valid values:
     *
     *   Creating: The protocol service is being created.
     *   Starting: The protocol service is being started.
     *   Running: The protocol service is running.
     *   Updating: The protocol service is being updated.
     *   Deleting: The protocol service is being deleted.
     *   Stopping: The protocol service is being stopped.
     *   Stopped: The protocol service is stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'description'             => 'Description',
        'fileSystemId'            => 'FileSystemId',
        'instanceBaseThroughput'  => 'InstanceBaseThroughput',
        'instanceBurstThroughput' => 'InstanceBurstThroughput',
        'instanceRAM'             => 'InstanceRAM',
        'modifyTime'              => 'ModifyTime',
        'mountTargetCount'        => 'MountTargetCount',
        'protocolServiceId'       => 'ProtocolServiceId',
        'protocolSpec'            => 'ProtocolSpec',
        'protocolThroughput'      => 'ProtocolThroughput',
        'protocolType'            => 'ProtocolType',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->instanceBaseThroughput) {
            $res['InstanceBaseThroughput'] = $this->instanceBaseThroughput;
        }
        if (null !== $this->instanceBurstThroughput) {
            $res['InstanceBurstThroughput'] = $this->instanceBurstThroughput;
        }
        if (null !== $this->instanceRAM) {
            $res['InstanceRAM'] = $this->instanceRAM;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->mountTargetCount) {
            $res['MountTargetCount'] = $this->mountTargetCount;
        }
        if (null !== $this->protocolServiceId) {
            $res['ProtocolServiceId'] = $this->protocolServiceId;
        }
        if (null !== $this->protocolSpec) {
            $res['ProtocolSpec'] = $this->protocolSpec;
        }
        if (null !== $this->protocolThroughput) {
            $res['ProtocolThroughput'] = $this->protocolThroughput;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocolServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['InstanceBaseThroughput'])) {
            $model->instanceBaseThroughput = $map['InstanceBaseThroughput'];
        }
        if (isset($map['InstanceBurstThroughput'])) {
            $model->instanceBurstThroughput = $map['InstanceBurstThroughput'];
        }
        if (isset($map['InstanceRAM'])) {
            $model->instanceRAM = $map['InstanceRAM'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['MountTargetCount'])) {
            $model->mountTargetCount = $map['MountTargetCount'];
        }
        if (isset($map['ProtocolServiceId'])) {
            $model->protocolServiceId = $map['ProtocolServiceId'];
        }
        if (isset($map['ProtocolSpec'])) {
            $model->protocolSpec = $map['ProtocolSpec'];
        }
        if (isset($map['ProtocolThroughput'])) {
            $model->protocolThroughput = $map['ProtocolThroughput'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
