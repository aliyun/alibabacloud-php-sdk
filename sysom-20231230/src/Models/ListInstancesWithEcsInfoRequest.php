<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoRequest\instanceTag;

class ListInstancesWithEcsInfoRequest extends Model
{
    /**
     * @var int
     */
    public $current;
    /**
     * @var string
     */
    public $healthStatus;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceIdName;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var instanceTag
     */
    public $instanceTag;
    /**
     * @var int
     */
    public $isManaged;
    /**
     * @var string
     */
    public $osName;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $privateIp;
    /**
     * @var string
     */
    public $publicIp;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceGroupIdName;
    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'current'             => 'current',
        'healthStatus'        => 'health_status',
        'instanceId'          => 'instance_id',
        'instanceIdName'      => 'instance_id_name',
        'instanceName'        => 'instance_name',
        'instanceTag'         => 'instance_tag',
        'isManaged'           => 'is_managed',
        'osName'              => 'os_name',
        'pageSize'            => 'pageSize',
        'privateIp'           => 'private_ip',
        'publicIp'            => 'public_ip',
        'region'              => 'region',
        'resourceGroupId'     => 'resource_group_id',
        'resourceGroupIdName' => 'resource_group_id_name',
        'resourceGroupName'   => 'resource_group_name',
    ];

    public function validate()
    {
        if (null !== $this->instanceTag) {
            $this->instanceTag->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->instanceTag) {
            $res['instance_tag'] = null !== $this->instanceTag ? $this->instanceTag->toArray($noStream) : $this->instanceTag;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            $model->instanceTag = instanceTag::fromMap($map['instance_tag']);
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
