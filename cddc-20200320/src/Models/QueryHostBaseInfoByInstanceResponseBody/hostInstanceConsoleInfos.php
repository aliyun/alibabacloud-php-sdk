<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostBaseInfoByInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class hostInstanceConsoleInfos extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $engineVersion;
    protected $_name = [
        'vpcId'         => 'VpcId',
        'status'        => 'Status',
        'expiredTime'   => 'ExpiredTime',
        'clusterName'   => 'ClusterName',
        'ip'            => 'Ip',
        'hostName'      => 'HostName',
        'engine'        => 'Engine',
        'role'          => 'Role',
        'port'          => 'Port',
        'engineVersion' => 'EngineVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        return $model;
    }
}
