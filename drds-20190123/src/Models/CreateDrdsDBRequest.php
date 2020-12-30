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
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $encode;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $type;

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
    public $accountName;

    /**
     * @var string[]
     */
    public $rdsInstance;

    /**
     * @var rdsSuperAccount[]
     */
    public $rdsSuperAccount;

    /**
     * @var instDbName[]
     */
    public $instDbName;
    protected $_name = [
        'drdsInstanceId'       => 'DrdsInstanceId',
        'dbName'               => 'DbName',
        'encode'               => 'Encode',
        'password'             => 'Password',
        'type'                 => 'Type',
        'dbInstType'           => 'DbInstType',
        'dbInstanceIsCreating' => 'DbInstanceIsCreating',
        'accountName'          => 'AccountName',
        'rdsInstance'          => 'RdsInstance',
        'rdsSuperAccount'      => 'RdsSuperAccount',
        'instDbName'           => 'InstDbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->encode) {
            $res['Encode'] = $this->encode;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->dbInstanceIsCreating) {
            $res['DbInstanceIsCreating'] = $this->dbInstanceIsCreating;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (null !== $this->instDbName) {
            $res['InstDbName'] = [];
            if (null !== $this->instDbName && \is_array($this->instDbName)) {
                $n = 0;
                foreach ($this->instDbName as $item) {
                    $res['InstDbName'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Encode'])) {
            $model->encode = $map['Encode'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DbInstanceIsCreating'])) {
            $model->dbInstanceIsCreating = $map['DbInstanceIsCreating'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
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
        if (isset($map['InstDbName'])) {
            if (!empty($map['InstDbName'])) {
                $model->instDbName = [];
                $n                 = 0;
                foreach ($map['InstDbName'] as $item) {
                    $model->instDbName[$n++] = null !== $item ? instDbName::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
