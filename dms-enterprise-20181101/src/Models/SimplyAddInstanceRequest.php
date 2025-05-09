<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class SimplyAddInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $databasePassword;

    /**
     * @var string
     */
    public $databaseUser;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceRegion;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
