<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceRequest;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The name of the source database.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The IP address of the source database.
     *
     * >  This parameter is required only when the source database is a self-managed database.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the source database.
     *
     * >  This parameter is required only when the source database is an ApsaraDB RDS for MySQL instance, a PolarDB-X 1.0 instance, or a PolarDB for MySQL cluster.
     * @example rm-bp1zc3iyqe3qw****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The type of the source database. Valid values:
     *
     *   **RDS**: ApsaraDB RDS for MySQL instance
     *   **PolarDB**: PolarDB for MySQL cluster
     *   **LocalInstance**: self-managed database with a public IP address
     *   **ECS**: self-managed database hosted on an Elastic Compute Service (ECS) instance
     *   **Express**: self-managed database connected over Express Connect
     *   **CEN**: self-managed database connected over Cloud Enterprise Network (CEN)
     *   **dg**: self-managed database connected over Database Gateway
     *
     * >  The engine of a self-managed database can be MySQL or Oracle. You must specify the engine type when you call the [CreateSubscriptionInstance](https://help.aliyun.com/document_detail/49436.html) operation.
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The system ID (SID) of the Oracle database.
     *
     * >  This parameter is required only when the source database is a self-managed Oracle database and is not deployed in the Real Application Clusters (RAC) architecture.
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;

    /**
     * @description The ID of the Alibaba Cloud account to which the source database belongs.
     *
     * >  This parameter is required only when you track data changes across different Alibaba Cloud accounts.
     * @example 140692647406****
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The password of the account that is used to connect to the source database.
     *
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The service port number of the source database.
     *
     * >  This parameter is required only when the source database is a self-managed database.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The RAM role that is authorized to access the source database. This parameter is required if the source database does not belong to the Alibaba Cloud account that you use to configure the change tracking instance. In this case, you must authorize the Alibaba Cloud account to access the source database by using a RAM role.
     *
     * >  For more information about the permissions that are required for the RAM role and how to grant permissions to the RAM role, see [Configure RAM authorization for cross-account data migration and synchronization](https://help.aliyun.com/document_detail/48468.html).
     * @example ram-for-dts
     *
     * @var string
     */
    public $role;

    /**
     * @description The username of the account that is used to connect to the source database.
     *
     * >  The permissions that are required for the database account vary with the change tracking scenario. For more information, see [Overview of change tracking scenarios](https://help.aliyun.com/document_detail/145715.html).
     * @example dtstestaccount
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'IP'           => 'IP',
        'instanceID'   => 'InstanceID',
        'instanceType' => 'InstanceType',
        'oracleSID'    => 'OracleSID',
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
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->oracleSID) {
            $res['OracleSID'] = $this->oracleSID;
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
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OracleSID'])) {
            $model->oracleSID = $map['OracleSID'];
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
