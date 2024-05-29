<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The name of the database to which the synchronization object in the source instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The IP address of the source database.
     *
     * >  You must specify this parameter only if the **SourceEndpoint.InstanceType** parameter is set to **ECS**, **Express**, **dg**, or **cen**.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the source instance.
     *
     * @example rm-bp1i99e8l7913****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the source instance. Valid values:
     *
     *   **RDS**: ApsaraDB RDS instance
     *   **Redis**: ApsaraDB for Redis instance
     *   **PolarDB**: PolarDB for MySQL cluster or PolarDB O Edition cluster
     *   **ECS**: self-managed database that is hosted on Elastic Compute Service (ECS)
     *   **Express**: self-managed database that is connected over Express Connect
     *   **dg**: self-managed database that is connected over Database Gateway
     *   **cen**: self-managed database that is connected over Cloud Enterprise Network (CEN)
     *
     * >  The default value is **RDS**.
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the Alibaba Cloud account that owns the source RDS instance.
     *
     * >  You can specify this parameter to synchronize data across different Alibaba Cloud accounts. In this case, you also need to specify the **SourceEndpoint.Role** parameter.
     * @example 140692647406****
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The password of the source database account.
     *
     * >  You must specify this parameter only if the **SourceEndpoint.InstanceType** parameter is set to **ECS**, **Express**, **dg**, or **cen**.
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The service port number of the source database.
     *
     * >  You must specify this parameter only if the **SourceEndpoint.InstanceType** parameter is set to **ECS**, **Express**, **dg**, or **cen**.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The name of the RAM role configured for the Alibaba Cloud account that owns the source instance.
     *
     * >  You must specify this parameter when you synchronize data across different Alibaba Cloud accounts. For information about the permissions and authorization methods of the RAM role, see [Configure RAM authorization for cross-account data migration and synchronization](https://help.aliyun.com/document_detail/48468.html).
     * @example ram-for-dts
     *
     * @var string
     */
    public $role;

    /**
     * @description The database account of the source database.
     *
     * >
     *   You must specify this parameter only if the **SourceEndpoint.InstanceType** parameter is set to **ECS**, **Express**, **dg**, or **cen**.
     *   If the **SourceEndpoint.InstanceType** parameter is set to **Redis**, you do not need to specify the database account.
     *   The permissions that are required for database accounts vary with the synchronization scenario. For more information, see [Overview of data synchronization scenarios](https://help.aliyun.com/document_detail/140954.html).
     *
     * @example dtstestaccount
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'ownerID'      => 'OwnerID',
        'password'     => 'Password',
        'port'         => 'Port',
        'role'         => 'Role',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
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
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
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
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
