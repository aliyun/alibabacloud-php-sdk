<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateNacosInstanceRequest extends Model
{
    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 服务名
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 分组名
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 命名空间id
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description Nacos集群名
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Nacos实例ip
     *
     * @var string
     */
    public $ip;

    /**
     * @description Nacos实例端口
     *
     * @var int
     */
    public $port;

    /**
     * @description 临时节点标志
     *
     * @var bool
     */
    public $ephemeral;

    /**
     * @description 权重
     *
     * @var string
     */
    public $weight;

    /**
     * @description 服务禁用标志
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description 节点元数据
     *
     * @var string
     */
    public $metadata;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'serviceName' => 'ServiceName',
        'groupName'   => 'GroupName',
        'namespaceId' => 'NamespaceId',
        'clusterName' => 'ClusterName',
        'ip'          => 'Ip',
        'port'        => 'Port',
        'ephemeral'   => 'Ephemeral',
        'weight'      => 'Weight',
        'enabled'     => 'Enabled',
        'metadata'    => 'Metadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ephemeral) {
            $res['Ephemeral'] = $this->ephemeral;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNacosInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Ephemeral'])) {
            $model->ephemeral = $map['Ephemeral'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        return $model;
    }
}
