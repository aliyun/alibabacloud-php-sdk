<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SimplyAddInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test***
     *
     * @var string
     */
    public $databasePassword;

    /**
     * @description This parameter is required.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @example 192.XXX.0.56
     *
     * @var string
     */
    public $host;

    /**
     * @example rm****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegion;

    /**
     * @example 5432
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'databasePassword' => 'DatabasePassword',
        'databaseUser' => 'DatabaseUser',
        'host' => 'Host',
        'instanceId' => 'InstanceId',
        'instanceRegion' => 'InstanceRegion',
        'port' => 'Port',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databasePassword) {
            $res['DatabasePassword'] = $this->databasePassword;
        }
        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceRegion) {
            $res['InstanceRegion'] = $this->instanceRegion;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimplyAddInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabasePassword'])) {
            $model->databasePassword = $map['DatabasePassword'];
        }
        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceRegion'])) {
            $model->instanceRegion = $map['InstanceRegion'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
