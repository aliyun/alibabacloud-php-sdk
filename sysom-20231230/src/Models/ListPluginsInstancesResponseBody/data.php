<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListPluginsInstancesResponseBody;

use AlibabaCloud\SDK\SysOM\V20231230\Models\ListPluginsInstancesResponseBody\data\instanceTag;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example i-bp118piqcio9tiwgh84b
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example allowed-repos-qmf8w
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var instanceTag[]
     */
    public $instanceTag;

    /**
     * @example Alibaba Cloud Linux  3.2104 LTS 64 bit
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example rg-xxxx
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
    protected $_name = [
        'instanceId' => 'instance_id',
        'instanceName' => 'instance_name',
        'instanceTag' => 'instance_tag',
        'osName' => 'os_name',
        'privateIp' => 'private_ip',
        'publicIp' => 'public_ip',
        'region' => 'region',
        'resourceGroupId' => 'resource_group_id',
        'resourceGroupName' => 'resource_group_name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->osName) {
            $res['os_name'] = $this->osName;
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
        if (null !== $this->resourceGroupName) {
            $res['resource_group_name'] = $this->resourceGroupName;
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
        if (isset($map['os_name'])) {
            $model->osName = $map['os_name'];
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
        if (isset($map['resource_group_name'])) {
            $model->resourceGroupName = $map['resource_group_name'];
        }

        return $model;
    }
}
