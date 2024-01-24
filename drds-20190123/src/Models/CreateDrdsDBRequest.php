<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest\instDbName;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest\rdsSuperAccount;
use AlibabaCloud\Tea\Model;

class CreateDrdsDBRequest extends Model
{
    /**
     * @description The name of the account that has permissions to access all databases on the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required only when the Type parameter is set to VERTICAL.
     * @example drds_sample_account
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The type of the storage instances that are used by the PolarDB-X 1.0 database. Set the value to RDS.
     *
     * @example RDS
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description Specifies whether the required ApsaraDB RDS for MySQL instance is being created.
     *
     * @example false
     *
     * @var bool
     */
    public $dbInstanceIsCreating;

    /**
     * @description The name of the PolarDB-X 1.0 database you want to create.
     *
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance on which you want to create the database.
     *
     * @example drdshbgal154****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The encoding method that is used by the database.
     *
     * @example utf8
     *
     * @var string
     */
    public $encode;

    /**
     * @var instDbName[]
     */
    public $instDbName;

    /**
     * @description The password that is used to log on to the database.
     *
     * @example drds_sample_password
     *
     * @var string
     */
    public $password;

    /**
     * @example ["drds_sample_rds_id1", "drds_sample_rds_id2"]
     *
     * @var string[]
     */
    public $rdsInstance;

    /**
     * @var rdsSuperAccount[]
     */
    public $rdsSuperAccount;

    /**
     * @description The partitioning mode of the database. Valid values:
     *
     *   **HORIZONTAL**: The database is horizontally partitioned (sharded).
     *   **VERTICAL**: The database is vertically partitioned.
     *
     * @example HORIZONTAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accountName'          => 'AccountName',
        'dbInstType'           => 'DbInstType',
        'dbInstanceIsCreating' => 'DbInstanceIsCreating',
        'dbName'               => 'DbName',
        'drdsInstanceId'       => 'DrdsInstanceId',
        'encode'               => 'Encode',
        'instDbName'           => 'InstDbName',
        'password'             => 'Password',
        'rdsInstance'          => 'RdsInstance',
        'rdsSuperAccount'      => 'RdsSuperAccount',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->dbInstanceIsCreating) {
            $res['DbInstanceIsCreating'] = $this->dbInstanceIsCreating;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->encode) {
            $res['Encode'] = $this->encode;
        }
        if (null !== $this->instDbName) {
            $res['InstDbName'] = [];
            if (null !== $this->instDbName && \is_array($this->instDbName)) {
                $n = 0;
                foreach ($this->instDbName as $item) {
                    $res['InstDbName'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->rdsInstance) {
            $res['RdsInstance'] = $this->rdsInstance;
        }
        if (null !== $this->rdsSuperAccount) {
            $res['RdsSuperAccount'] = [];
            if (null !== $this->rdsSuperAccount && \is_array($this->rdsSuperAccount)) {
                $n = 0;
                foreach ($this->rdsSuperAccount as $item) {
                    $res['RdsSuperAccount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDrdsDBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DbInstanceIsCreating'])) {
            $model->dbInstanceIsCreating = $map['DbInstanceIsCreating'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['Encode'])) {
            $model->encode = $map['Encode'];
        }
        if (isset($map['InstDbName'])) {
            if (!empty($map['InstDbName'])) {
                $model->instDbName = [];
                $n                 = 0;
                foreach ($map['InstDbName'] as $item) {
                    $model->instDbName[$n++] = null !== $item ? instDbName::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RdsInstance'])) {
            if (!empty($map['RdsInstance'])) {
                $model->rdsInstance = $map['RdsInstance'];
            }
        }
        if (isset($map['RdsSuperAccount'])) {
            if (!empty($map['RdsSuperAccount'])) {
                $model->rdsSuperAccount = [];
                $n                      = 0;
                foreach ($map['RdsSuperAccount'] as $item) {
                    $model->rdsSuperAccount[$n++] = null !== $item ? rdsSuperAccount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
