<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class destinationEndpoint extends Model
{
    /**
     * @description The database type of the destination instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The endpoint of the destination instance.
     *
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the destination instance.
     *
     * @example rm-bp162d4tp0500****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the destination instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The database service port of the destination instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The database account of the destination instance.
     *
     * @example dtstest
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'engineName'   => 'EngineName',
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'port'         => 'Port',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineName) {
            $res['EngineName'] = $this->engineName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineName'])) {
            $model->engineName = $map['EngineName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
