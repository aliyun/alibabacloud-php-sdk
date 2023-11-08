<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateNacosInstanceRequest extends Model
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
     * @description The name of the Nacos instance.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Specifies whether to enable the service for the instance.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Specifies whether to mark the instance as a temporary node.
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
     * @description The ID of the instance.
     *
     * @example mse-cn-123456
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the Nacos instance.
     *
     * @example 1.2.xx.xx
     *
     * @var string
     */
    public $ip;

    /**
     * @description The node metadata of the instance.
     *
     * @example {\"grayversion\":\"1.0\",\"preserved.register.source\":\"SPRING_CLOUD\",\"management.context-path\":\"\"}
     *
     * @var string
     */
    public $metadata;

    /**
     * @description The ID of the namespace.
     *
     * @example 9e78a671-4b9b-4dd4-99c1-0b9da87****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The port number of the Nacos instance.
     *
     * @example 12281
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

    /**
     * @description The weight. Valid values: 0 to 10000. The value must be an integer. A larger value indicates a higher frequency at which the instance is accessed.
     *
     * @example 1
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
