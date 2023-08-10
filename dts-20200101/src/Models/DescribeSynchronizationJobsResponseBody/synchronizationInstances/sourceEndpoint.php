<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The progress of schema synchronization. Unit: %.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The database account of the source instance.
     *
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The database service port of the source instance.
     *
     * @example rm-bp1i99e8l7913****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The database type of the source instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The status of schema synchronization.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The status of schema synchronization. Valid values:
     *
     *   **NotStarted**: Schema synchronization is not started.
     *   **Migrating**: Schema synchronization is in progress.
     *   **Failed**: Schema synchronization failed.
     *   **Finished**: Schema synchronization is completed.
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
     * @return sourceEndpoint
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
