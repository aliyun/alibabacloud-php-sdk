<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest;

use AlibabaCloud\Tea\Model;

class destinationEndpoint extends Model
{
    /**
     * @description The name of the database to which the synchronization object in the destination instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $dataBaseName;

    /**
     * @description The IP address of the destination database.
     *
     * >  You must specify this parameter only if the **DestinationEndpoint.InstanceType** parameter is set to **Express**, **dg**, or **cen**.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the destination instance.
     *
     * >  If the **DestinationEndpoint.InstanceType** parameter is set to **MaxCompute** or **DataHub**, you must specify the name of the MaxCompute project or the DataHub project.
     *
     * If the destination instance is an AnalyticDB for MySQL cluster, specify the ID of the AnalyticDB for MySQL cluster.
     * @example rm-bp1r46452ai50****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the destination instance. Valid values:
     *
     *   **Redis**: ApsaraDB for Redis instance
     *   **RDS**: ApsaraDB RDS instance
     *   **PolarDB**: PolarDB for MySQL cluster or PolarDB O Edition cluster
     *   **ECS**: self-managed database that is hosted on ECS
     *   **Express**: self-managed database that is connected over Express Connect
     *   **DataHub**: DataHub project
     *   **MaxCompute**: MaxCompute project
     *   **AnalyticDB**: AnalyticDB for MySQL cluster V3.0 or V2.0
     *   **Greenplum**: AnalyticDB for PostgreSQL instance
     *
     * >  The default value is **RDS**.
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The password of the destination database account.
     *
     * >
     *   If the **DestinationEndpoint.InstanceType** parameter is set to **ECS**, **Express**, **dg**, or **cen**, you must specify the DestinationEndpoint.Password parameter.
     *
     * @example Test654321
     *
     * @var string
     */
    public $password;

    /**
     * @description The service port number of the destination database.
     *
     * >  You must specify this parameter only if the **DestinationEndpoint.InstanceType** parameter is set to **ECS**, **Express**, **dg**, or **cen**.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The database account of the destination database.
     *
     * >
     *   The permissions that are required for database accounts vary with the synchronization scenario. For more information, see [Overview of data synchronization scenarios](https://help.aliyun.com/document_detail/140954.html).
     *   If the **DestinationEndpoint.InstanceType** parameter is set to **ECS**, **Express**, **dg**, or **cen**, you must specify the DestinationEndpoint.UserName parameter.
     *   If the **DestinationEndpoint.InstanceType** parameter is set to RDS and the database version is MySQL 5.5 or MySQL 5.6, you do not need to specify the DestinationEndpoint.UserName and **DestinationEndpoint.Password** parameters.
     *   If the **DestinationEndpoint.InstanceType** parameter is set to **Redis**, you do not need to specify the DestinationEndpoint.UserName parameter.
     *
     * @example dtstestaccount
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dataBaseName' => 'DataBaseName',
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'password'     => 'Password',
        'port'         => 'Port',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataBaseName) {
            $res['DataBaseName'] = $this->dataBaseName;
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
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
        if (isset($map['DataBaseName'])) {
            $model->dataBaseName = $map['DataBaseName'];
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
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
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
