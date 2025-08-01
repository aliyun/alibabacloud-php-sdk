<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesWithEcsInfoShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @example i-bp118piqcio9tiwgh84b
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 84b
     *
     * @var string
     */
    public $instanceIdName;

    /**
     * @example block-load-balancer-hjdm9
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceTagShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $isManaged;

    /**
     * @example Alibaba Cloud Linux  3.2104 LTS 64bit
     *
     * @var string
     */
    public $osName;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $privateIp;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $publicIp;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @example rg-xxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example default
     *
     * @var string
     */
    public $resourceGroupIdName;

    /**
     * @example default resource group
     *
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'current' => 'current',
        'healthStatus' => 'health_status',
        'instanceId' => 'instance_id',
        'instanceIdName' => 'instance_id_name',
        'instanceName' => 'instance_name',
        'instanceTagShrink' => 'instance_tag',
        'isManaged' => 'is_managed',
        'osName' => 'os_name',
        'pageSize' => 'pageSize',
        'privateIp' => 'private_ip',
        'publicIp' => 'public_ip',
        'region' => 'region',
        'resourceGroupId' => 'resource_group_id',
        'resourceGroupIdName' => 'resource_group_id_name',
        'resourceGroupName' => 'resource_group_name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->healthStatus) {
            $res['health_status'] = $this->healthStatus;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->instanceIdName) {
            $res['instance_id_name'] = $this->instanceIdName;
        }
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }
        if (null !== $this->instanceTagShrink) {
            $res['instance_tag'] = $this->instanceTagShrink;
        }
        if (null !== $this->isManaged) {
            $res['is_managed'] = $this->isManaged;
        }
        if (null !== $this->osName) {
            $res['os_name'] = $this->osName;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->privateIp) {
            $res['private_ip'] = $this->privateIp;
        }
        if (null !== $this->publicIp) {
            $res['public_ip'] = $this->publicIp;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupIdName) {
            $res['resource_group_id_name'] = $this->resourceGroupIdName;
        }
        if (null !== $this->resourceGroupName) {
            $res['resource_group_name'] = $this->resourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesWithEcsInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['health_status'])) {
            $model->healthStatus = $map['health_status'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['instance_id_name'])) {
            $model->instanceIdName = $map['instance_id_name'];
        }
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }
        if (isset($map['instance_tag'])) {
            $model->instanceTagShrink = $map['instance_tag'];
        }
        if (isset($map['is_managed'])) {
            $model->isManaged = $map['is_managed'];
        }
        if (isset($map['os_name'])) {
            $model->osName = $map['os_name'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['private_ip'])) {
            $model->privateIp = $map['private_ip'];
        }
        if (isset($map['public_ip'])) {
            $model->publicIp = $map['public_ip'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['resource_group_id_name'])) {
            $model->resourceGroupIdName = $map['resource_group_id_name'];
        }
        if (isset($map['resource_group_name'])) {
            $model->resourceGroupName = $map['resource_group_name'];
        }

        return $model;
    }
}
