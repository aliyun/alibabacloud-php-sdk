<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRdsListResponseBody\data;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRdsListResponseBody\data\rdsInstance\readOnlyChildren;
use AlibabaCloud\Tea\Model;

class rdsInstance extends Model
{
    /**
     * @var string
     */
    public $connectUrl;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $port;

    /**
     * @var readOnlyChildren
     */
    public $readOnlyChildren;

    /**
     * @var int
     */
    public $readWeight;
    protected $_name = [
        'connectUrl'       => 'ConnectUrl',
        'dbType'           => 'DbType',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceStatus'   => 'InstanceStatus',
        'port'             => 'Port',
        'readOnlyChildren' => 'ReadOnlyChildren',
        'readWeight'       => 'ReadWeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectUrl) {
            $res['ConnectUrl'] = $this->connectUrl;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->readOnlyChildren) {
            $res['ReadOnlyChildren'] = null !== $this->readOnlyChildren ? $this->readOnlyChildren->toMap() : null;
        }
        if (null !== $this->readWeight) {
            $res['ReadWeight'] = $this->readWeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ReadOnlyChildren'])) {
            $model->readOnlyChildren = readOnlyChildren::fromMap($map['ReadOnlyChildren']);
        }
        if (isset($map['ReadWeight'])) {
            $model->readWeight = $map['ReadWeight'];
        }

        return $model;
    }
}
