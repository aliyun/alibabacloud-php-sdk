<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $defaultKey;

    /**
     * @var bool
     */
    public $ephemeral;

    /**
     * @var bool
     */
    public $marked;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $lastBeat;

    /**
     * @var int
     */
    public $okCount;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var int
     */
    public $instanceHeartBeatInterval;

    /**
     * @var int
     */
    public $ipDeleteTimeout;

    /**
     * @var string
     */
    public $app;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var bool
     */
    public $healthy;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $datumKey;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $instanceHeartBeatTimeOut;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var mixed[]
     */
    public $metadata;
    protected $_name = [
        'defaultKey'                => 'DefaultKey',
        'ephemeral'                 => 'Ephemeral',
        'marked'                    => 'Marked',
        'ip'                        => 'Ip',
        'instanceId'                => 'InstanceId',
        'port'                      => 'Port',
        'lastBeat'                  => 'LastBeat',
        'okCount'                   => 'OkCount',
        'weight'                    => 'Weight',
        'instanceHeartBeatInterval' => 'InstanceHeartBeatInterval',
        'ipDeleteTimeout'           => 'IpDeleteTimeout',
        'app'                       => 'App',
        'failCount'                 => 'FailCount',
        'healthy'                   => 'Healthy',
        'enabled'                   => 'Enabled',
        'datumKey'                  => 'DatumKey',
        'clusterName'               => 'ClusterName',
        'instanceHeartBeatTimeOut'  => 'InstanceHeartBeatTimeOut',
        'serviceName'               => 'ServiceName',
        'metadata'                  => 'Metadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultKey) {
            $res['DefaultKey'] = $this->defaultKey;
        }
        if (null !== $this->ephemeral) {
            $res['Ephemeral'] = $this->ephemeral;
        }
        if (null !== $this->marked) {
            $res['Marked'] = $this->marked;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->lastBeat) {
            $res['LastBeat'] = $this->lastBeat;
        }
        if (null !== $this->okCount) {
            $res['OkCount'] = $this->okCount;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->instanceHeartBeatInterval) {
            $res['InstanceHeartBeatInterval'] = $this->instanceHeartBeatInterval;
        }
        if (null !== $this->ipDeleteTimeout) {
            $res['IpDeleteTimeout'] = $this->ipDeleteTimeout;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->healthy) {
            $res['Healthy'] = $this->healthy;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->datumKey) {
            $res['DatumKey'] = $this->datumKey;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->instanceHeartBeatTimeOut) {
            $res['InstanceHeartBeatTimeOut'] = $this->instanceHeartBeatTimeOut;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
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
        if (isset($map['DefaultKey'])) {
            $model->defaultKey = $map['DefaultKey'];
        }
        if (isset($map['Ephemeral'])) {
            $model->ephemeral = $map['Ephemeral'];
        }
        if (isset($map['Marked'])) {
            $model->marked = $map['Marked'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['LastBeat'])) {
            $model->lastBeat = $map['LastBeat'];
        }
        if (isset($map['OkCount'])) {
            $model->okCount = $map['OkCount'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['InstanceHeartBeatInterval'])) {
            $model->instanceHeartBeatInterval = $map['InstanceHeartBeatInterval'];
        }
        if (isset($map['IpDeleteTimeout'])) {
            $model->ipDeleteTimeout = $map['IpDeleteTimeout'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['Healthy'])) {
            $model->healthy = $map['Healthy'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['DatumKey'])) {
            $model->datumKey = $map['DatumKey'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['InstanceHeartBeatTimeOut'])) {
            $model->instanceHeartBeatTimeOut = $map['InstanceHeartBeatTimeOut'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        return $model;
    }
}
