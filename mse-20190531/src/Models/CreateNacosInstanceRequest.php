<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateNacosInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Nacos集群名
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description 服务禁用标志
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description 临时节点标志
     *
     * @var bool
     */
    public $ephemeral;

    /**
     * @description 分组名
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Nacos实例ip
     *
     * @var string
     */
    public $ip;

    /**
     * @description 节点元数据
     *
     * @var string
     */
    public $metadata;

    /**
     * @description 命名空间id
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description Nacos实例端口
     *
     * @var int
     */
    public $port;

    /**
     * @description 服务名
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 权重
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterName'    => 'ClusterName',
        'enabled'        => 'Enabled',
        'ephemeral'      => 'Ephemeral',
        'groupName'      => 'GroupName',
        'instanceId'     => 'InstanceId',
        'ip'             => 'Ip',
        'metadata'       => 'Metadata',
        'namespaceId'    => 'NamespaceId',
        'port'           => 'Port',
        'serviceName'    => 'ServiceName',
        'weight'         => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->ephemeral) {
            $res['Ephemeral'] = $this->ephemeral;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNacosInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Ephemeral'])) {
            $model->ephemeral = $map['Ephemeral'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
