<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest\instDbName;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest\rdsSuperAccount;
use AlibabaCloud\Tea\Model;

class CreateDrdsDBRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $dbInstType;

    /**
     * @var bool
     */
    public $dbInstanceIsCreating;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $encode;

    /**
     * @var instDbName[]
     */
    public $instDbName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string[]
     */
    public $rdsInstance;

    /**
     * @var rdsSuperAccount[]
     */
    public $rdsSuperAccount;

    /**
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
