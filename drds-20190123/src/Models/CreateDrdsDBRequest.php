<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest\instDbName;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest\rdsSuperAccount;

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
        'accountName' => 'AccountName',
        'dbInstType' => 'DbInstType',
        'dbInstanceIsCreating' => 'DbInstanceIsCreating',
        'dbName' => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'encode' => 'Encode',
        'instDbName' => 'InstDbName',
        'password' => 'Password',
        'rdsInstance' => 'RdsInstance',
        'rdsSuperAccount' => 'RdsSuperAccount',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->instDbName)) {
            Model::validateArray($this->instDbName);
        }
        if (\is_array($this->rdsInstance)) {
            Model::validateArray($this->rdsInstance);
        }
        if (\is_array($this->rdsSuperAccount)) {
            Model::validateArray($this->rdsSuperAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instDbName)) {
                $res['InstDbName'] = [];
                $n1 = 0;
                foreach ($this->instDbName as $item1) {
                    $res['InstDbName'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->rdsInstance) {
            if (\is_array($this->rdsInstance)) {
                $res['RdsInstance'] = [];
                $n1 = 0;
                foreach ($this->rdsInstance as $item1) {
                    $res['RdsInstance'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rdsSuperAccount) {
            if (\is_array($this->rdsSuperAccount)) {
                $res['RdsSuperAccount'] = [];
                $n1 = 0;
                foreach ($this->rdsSuperAccount as $item1) {
                    $res['RdsSuperAccount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
                $n1 = 0;
                foreach ($map['InstDbName'] as $item1) {
                    $model->instDbName[$n1] = instDbName::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RdsInstance'])) {
            if (!empty($map['RdsInstance'])) {
                $model->rdsInstance = [];
                $n1 = 0;
                foreach ($map['RdsInstance'] as $item1) {
                    $model->rdsInstance[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RdsSuperAccount'])) {
            if (!empty($map['RdsSuperAccount'])) {
                $model->rdsSuperAccount = [];
                $n1 = 0;
                foreach ($map['RdsSuperAccount'] as $item1) {
                    $model->rdsSuperAccount[$n1] = rdsSuperAccount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
