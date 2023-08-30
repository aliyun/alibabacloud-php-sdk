<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteNacosInstanceRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The alias of the cluster.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Specifies whether the node is an ephemeral node. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example false
     *
     * @var bool
     */
    public $ephemeral;

    /**
     * @description The name of the group.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the Nacos instance.
     *
     * @example mse-cn-st21v5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the Nacos instance.
     *
     * @example 10.237.1.32
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the namespace.
     *
     * @example 9e78a671-4b9b-4dd4-99c1-0b9da87****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The port of the Nacos instance.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The name of the service.
     *
     * @example hello_service
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterName'    => 'ClusterName',
        'ephemeral'      => 'Ephemeral',
        'groupName'      => 'GroupName',
        'instanceId'     => 'InstanceId',
        'ip'             => 'Ip',
        'namespaceId'    => 'NamespaceId',
        'port'           => 'Port',
        'serviceName'    => 'ServiceName',
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
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNacosInstanceRequest
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
