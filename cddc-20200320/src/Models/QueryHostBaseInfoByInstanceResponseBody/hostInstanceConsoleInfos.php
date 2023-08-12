<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostBaseInfoByInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class hostInstanceConsoleInfos extends Model
{
    /**
     * @example rds.ebmr6.26xlarge
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 2021.07.20
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example ch-bp1fgj3kt7fsb****
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 172.22.0.***
     *
     * @var string
     */
    public $ip;

    /**
     * @example 3443
     *
     * @var string
     */
    public $port;

    /**
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-bp1ov7as4yvz4kxei****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterName'   => 'ClusterName',
        'engine'        => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expiredTime'   => 'ExpiredTime',
        'hostName'      => 'HostName',
        'ip'            => 'Ip',
        'port'          => 'Port',
        'role'          => 'Role',
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostInstanceConsoleInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
