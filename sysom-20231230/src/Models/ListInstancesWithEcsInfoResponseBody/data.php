<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoResponseBody\data\instanceTag;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var instanceTag[]
     */
    public $instanceTag;
    /**
     * @var string
     */
    public $osArch;
    /**
     * @var string
     */
    public $osHealthScore;
    /**
     * @var string
     */
    public $osName;
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
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceGroupName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'         => 'cluster_id',
        'instanceId'        => 'instance_id',
        'instanceName'      => 'instance_name',
        'instanceTag'       => 'instance_tag',
        'osArch'            => 'os_arch',
        'osHealthScore'     => 'os_health_score',
        'osName'            => 'os_name',
        'privateIp'         => 'private_ip',
        'publicIp'          => 'public_ip',
        'resourceGroupId'   => 'resource_group_id',
        'resourceGroupName' => 'resource_group_name',
        'status'            => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTag)) {
            Model::validateArray($this->instanceTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }

        if (null !== $this->instanceTag) {
            if (\is_array($this->instanceTag)) {
                $res['instance_tag'] = [];
                $n1                  = 0;
                foreach ($this->instanceTag as $item1) {
                    $res['instance_tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->osArch) {
            $res['os_arch'] = $this->osArch;
        }

        if (null !== $this->osHealthScore) {
            $res['os_health_score'] = $this->osHealthScore;
        }

        if (null !== $this->osName) {
            $res['os_name'] = $this->osName;
        }

        if (null !== $this->privateIp) {
            $res['private_ip'] = $this->privateIp;
        }

        if (null !== $this->publicIp) {
            $res['public_ip'] = $this->publicIp;
        }

        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceGroupName) {
            $res['resource_group_name'] = $this->resourceGroupName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }

        if (isset($map['instance_tag'])) {
            if (!empty($map['instance_tag'])) {
                $model->instanceTag = [];
                $n1                 = 0;
                foreach ($map['instance_tag'] as $item1) {
                    $model->instanceTag[$n1++] = instanceTag::fromMap($item1);
                }
            }
        }

        if (isset($map['os_arch'])) {
            $model->osArch = $map['os_arch'];
        }

        if (isset($map['os_health_score'])) {
            $model->osHealthScore = $map['os_health_score'];
        }

        if (isset($map['os_name'])) {
            $model->osName = $map['os_name'];
        }

        if (isset($map['private_ip'])) {
            $model->privateIp = $map['private_ip'];
        }

        if (isset($map['public_ip'])) {
            $model->publicIp = $map['public_ip'];
        }

        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }

        if (isset($map['resource_group_name'])) {
            $model->resourceGroupName = $map['resource_group_name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
