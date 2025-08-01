<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoResponseBody;

use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoResponseBody\data\instanceTag;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cbf7a37bc905d4682a3338b3744810269
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example i-bp118piqcio9tiwgh84b
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example allowed-repos-r2tzl
     *
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
    public $kernelVersion;

    /**
     * @example x86
     *
     * @var string
     */
    public $osArch;

    /**
     * @example 100
     *
     * @var string
     */
    public $osHealthScore;

    /**
     * @example Alibaba Cloud Linux  3.2104 LTS 64bit
     *
     * @var string
     */
    public $osName;

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
     * @example rg-xxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example default resource group
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'instanceId' => 'instance_id',
        'instanceName' => 'instance_name',
        'instanceTag' => 'instance_tag',
        'kernelVersion' => 'kernel_version',
        'osArch' => 'os_arch',
        'osHealthScore' => 'os_health_score',
        'osName' => 'os_name',
        'privateIp' => 'private_ip',
        'publicIp' => 'public_ip',
        'resourceGroupId' => 'resource_group_id',
        'resourceGroupName' => 'resource_group_name',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
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
            $res['instance_tag'] = [];
            if (null !== $this->instanceTag && \is_array($this->instanceTag)) {
                $n = 0;
                foreach ($this->instanceTag as $item) {
                    $res['instance_tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->kernelVersion) {
            $res['kernel_version'] = $this->kernelVersion;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['instance_tag'] as $item) {
                    $model->instanceTag[$n++] = null !== $item ? instanceTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['kernel_version'])) {
            $model->kernelVersion = $map['kernel_version'];
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
