<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $datumKey;

    /**
     * @var string
     */
    public $defaultKey;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $ephemeral;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var bool
     */
    public $healthy;

    /**
     * @var int
     */
    public $instanceHeartBeatInterval;

    /**
     * @var int
     */
    public $instanceHeartBeatTimeOut;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $ipDeleteTimeout;

    /**
     * @var int
     */
    public $lastBeat;

    /**
     * @var bool
     */
    public $marked;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var int
     */
    public $okCount;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $serviceName;

    /**
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
