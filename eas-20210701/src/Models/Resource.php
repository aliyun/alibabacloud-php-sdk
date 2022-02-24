<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class Resource extends Model
{
    /**
     * @description 资源组所在的集群
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 资源组CPU数量
     *
     * @var int
     */
    public $cpuCount;

    /**
     * @description 资源组创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 资源组自定义数据
     *
     * @var mixed[]
     */
    public $extraData;

    /**
     * @description 资源组GPU个数
     *
     * @var int
     */
    public $gpuCount;

    /**
     * @description 资源组实例个数
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description 资源组摘要信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 资源组按量付费实例个数
     *
     * @var int
     */
    public $postPaidInstanceCount;

    /**
     * @description 资源组预付费实例个数
     *
     * @var int
     */
    public $prePaidInstanceCount;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 资源组名字
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description 资源组的状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 资源组更新时间
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'cpuCount'              => 'CpuCount',
        'createTime'            => 'CreateTime',
        'extraData'             => 'ExtraData',
        'gpuCount'              => 'GpuCount',
        'instanceCount'         => 'InstanceCount',
        'message'               => 'Message',
        'postPaidInstanceCount' => 'PostPaidInstanceCount',
        'prePaidInstanceCount'  => 'PrePaidInstanceCount',
        'resourceId'            => 'ResourceId',
        'resourceName'          => 'ResourceName',
        'status'                => 'Status',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->postPaidInstanceCount) {
            $res['PostPaidInstanceCount'] = $this->postPaidInstanceCount;
        }
        if (null !== $this->prePaidInstanceCount) {
            $res['PrePaidInstanceCount'] = $this->prePaidInstanceCount;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PostPaidInstanceCount'])) {
            $model->postPaidInstanceCount = $map['PostPaidInstanceCount'];
        }
        if (isset($map['PrePaidInstanceCount'])) {
            $model->prePaidInstanceCount = $map['PrePaidInstanceCount'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
