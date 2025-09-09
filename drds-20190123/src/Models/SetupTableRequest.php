<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class SetupTableRequest extends Model
{
    /**
     * @var bool
     */
    public $allowFullTableScan;

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
    public $regionId;

    /**
     * @var string[]
     */
    public $tableName;
    protected $_name = [
        'allowFullTableScan' => 'AllowFullTableScan',
        'dbName' => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'regionId' => 'RegionId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->tableName)) {
            Model::validateArray($this->tableName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowFullTableScan) {
            $res['AllowFullTableScan'] = $this->allowFullTableScan;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tableName) {
            if (\is_array($this->tableName)) {
                $res['TableName'] = [];
                $n1 = 0;
                foreach ($this->tableName as $item1) {
                    $res['TableName'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AllowFullTableScan'])) {
            $model->allowFullTableScan = $map['AllowFullTableScan'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TableName'])) {
            if (!empty($map['TableName'])) {
                $model->tableName = [];
                $n1 = 0;
                foreach ($map['TableName'] as $item1) {
                    $model->tableName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
