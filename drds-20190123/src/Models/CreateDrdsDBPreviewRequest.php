<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreviewRequest\instDbName;
use AlibabaCloud\Tea\Model;

class CreateDrdsDBPreviewRequest extends Model
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
     * @var instDbName[]
     */
    public $instDbName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string[]
     */
    public $rdsInstance;

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
        'instDbName'           => 'InstDbName',
        'orderId'              => 'OrderId',
        'rdsInstance'          => 'RdsInstance',
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
        if (null !== $this->instDbName) {
            $res['InstDbName'] = [];
            if (null !== $this->instDbName && \is_array($this->instDbName)) {
                $n = 0;
                foreach ($this->instDbName as $item) {
                    $res['InstDbName'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->rdsInstance) {
            $res['RdsInstance'] = $this->rdsInstance;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDrdsDBPreviewRequest
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
        if (isset($map['InstDbName'])) {
            if (!empty($map['InstDbName'])) {
                $model->instDbName = [];
                $n                 = 0;
                foreach ($map['InstDbName'] as $item) {
                    $model->instDbName[$n++] = null !== $item ? instDbName::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RdsInstance'])) {
            if (!empty($map['RdsInstance'])) {
                $model->rdsInstance = $map['RdsInstance'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
