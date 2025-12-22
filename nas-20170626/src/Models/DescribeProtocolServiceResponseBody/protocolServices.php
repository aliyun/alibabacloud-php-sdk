<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolServiceResponseBody;

use AlibabaCloud\Dara\Model;

class protocolServices extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $instanceBaseThroughput;

    /**
     * @var int
     */
    public $instanceBurstThroughput;

    /**
     * @var int
     */
    public $instanceRAM;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $mountTargetCount;

    /**
     * @var string
     */
    public $protocolServiceId;

    /**
     * @var string
     */
    public $protocolSpec;

    /**
     * @var int
     */
    public $protocolThroughput;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'instanceBaseThroughput' => 'InstanceBaseThroughput',
        'instanceBurstThroughput' => 'InstanceBurstThroughput',
        'instanceRAM' => 'InstanceRAM',
        'modifyTime' => 'ModifyTime',
        'mountTargetCount' => 'MountTargetCount',
        'protocolServiceId' => 'ProtocolServiceId',
        'protocolSpec' => 'ProtocolSpec',
        'protocolThroughput' => 'ProtocolThroughput',
        'protocolType' => 'ProtocolType',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
