<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the application.
     *
     * @example app
     *
     * @var string
     */
    public $app;

    /**
     * @description The name of the cluster.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The reference key.
     *
     * @example 30.5.XX.XX:unknown:DEFAULT
     *
     * @var string
     */
    public $datumKey;

    /**
     * @description The default key.
     *
     * @example 30.5.XX.XX:unknown
     *
     * @var string
     */
    public $defaultKey;

    /**
     * @description The effective status of the instance. Valid values:
     *
     *   `true`: The instance takes effect.
     *   `false`: The instance does not take effect.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether the information about the temporary node is obtained. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example true
     *
     * @var bool
     */
    public $ephemeral;

    /**
     * @description The number of failed checks.
     *
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The health status of the instance. Valid values:
     *
     *   `true`: The instance is healthy.
     *   `false`: The instance is unhealthy.
     *
     * @example true
     *
     * @var bool
     */
    public $healthy;

    /**
     * @description The heartbeat interval of the instance. Unit: seconds.
     *
     * @example 5000
     *
     * @var int
     */
    public $instanceHeartBeatInterval;

    /**
     * @description The timeout period of the instance heartbeat.
     *
     * @example 15000
     *
     * @var int
     */
    public $instanceHeartBeatTimeOut;

    /**
     * @description The ID of the instance.
     *
     * @example 30.5.XX.XX#0#DEFAULT#DEFAULT_GROUP@@consumers:com.alibaba.edas.IHelloService
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The public IP address.
     *
     * @example 30.5.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The timeout period for removing an IP address.
     *
     * @example 30000
     *
     * @var int
     */
    public $ipDeleteTimeout;

    /**
     * @description The last heartbeat time.
     *
     * @example 20201010
     *
     * @var int
     */
    public $lastBeat;

    /**
     * @description Indicates whether the instance was marked. Valid values:
     *
     *   `true`: The instance marking was successful.
     *   `false`: The instance marking failed.
     *
     * @example true
     *
     * @var bool
     */
    public $marked;

    /**
     * @description The metadata.
     *
     * @example [int]
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @description The number of successful checks.
     *
     * @example 0
     *
     * @var int
     */
    public $okCount;

    /**
     * @description The port number.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The name of the service.
     *
     * @example DEFAULT_GROUP@@consumers:com.alibaba.edas.IHelloService::
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The weight.
     *
     * @example 1
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'app'                       => 'App',
        'clusterName'               => 'ClusterName',
        'datumKey'                  => 'DatumKey',
        'defaultKey'                => 'DefaultKey',
        'enabled'                   => 'Enabled',
        'ephemeral'                 => 'Ephemeral',
        'failCount'                 => 'FailCount',
        'healthy'                   => 'Healthy',
        'instanceHeartBeatInterval' => 'InstanceHeartBeatInterval',
        'instanceHeartBeatTimeOut'  => 'InstanceHeartBeatTimeOut',
        'instanceId'                => 'InstanceId',
        'ip'                        => 'Ip',
        'ipDeleteTimeout'           => 'IpDeleteTimeout',
        'lastBeat'                  => 'LastBeat',
        'marked'                    => 'Marked',
        'metadata'                  => 'Metadata',
        'okCount'                   => 'OkCount',
        'port'                      => 'Port',
        'serviceName'               => 'ServiceName',
        'weight'                    => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->datumKey) {
            $res['DatumKey'] = $this->datumKey;
        }
        if (null !== $this->defaultKey) {
            $res['DefaultKey'] = $this->defaultKey;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->ephemeral) {
            $res['Ephemeral'] = $this->ephemeral;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->healthy) {
            $res['Healthy'] = $this->healthy;
        }
        if (null !== $this->instanceHeartBeatInterval) {
            $res['InstanceHeartBeatInterval'] = $this->instanceHeartBeatInterval;
        }
        if (null !== $this->instanceHeartBeatTimeOut) {
            $res['InstanceHeartBeatTimeOut'] = $this->instanceHeartBeatTimeOut;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipDeleteTimeout) {
            $res['IpDeleteTimeout'] = $this->ipDeleteTimeout;
        }
        if (null !== $this->lastBeat) {
            $res['LastBeat'] = $this->lastBeat;
        }
        if (null !== $this->marked) {
            $res['Marked'] = $this->marked;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->okCount) {
            $res['OkCount'] = $this->okCount;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DatumKey'])) {
            $model->datumKey = $map['DatumKey'];
        }
        if (isset($map['DefaultKey'])) {
            $model->defaultKey = $map['DefaultKey'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Ephemeral'])) {
            $model->ephemeral = $map['Ephemeral'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['Healthy'])) {
            $model->healthy = $map['Healthy'];
        }
        if (isset($map['InstanceHeartBeatInterval'])) {
            $model->instanceHeartBeatInterval = $map['InstanceHeartBeatInterval'];
        }
        if (isset($map['InstanceHeartBeatTimeOut'])) {
            $model->instanceHeartBeatTimeOut = $map['InstanceHeartBeatTimeOut'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpDeleteTimeout'])) {
            $model->ipDeleteTimeout = $map['IpDeleteTimeout'];
        }
        if (isset($map['LastBeat'])) {
            $model->lastBeat = $map['LastBeat'];
        }
        if (isset($map['Marked'])) {
            $model->marked = $map['Marked'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['OkCount'])) {
            $model->okCount = $map['OkCount'];
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
