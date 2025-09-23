<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeColdStorageInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeColdStorageInstanceResponseBody\tables\childObjects;

class tables extends Model
{
    /**
     * @var childObjects[]
     */
    public $childObjects;

    /**
     * @var string
     */
    public $DB;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $ossClusterId;

    /**
     * @var string
     */
    public $partion;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'childObjects' => 'ChildObjects',
        'DB' => 'DB',
        'DBName' => 'DBName',
        'fieldName' => 'FieldName',
        'ossClusterId' => 'OssClusterId',
        'partion' => 'Partion',
        'size' => 'Size',
        'status' => 'Status',
        'table' => 'Table',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->childObjects)) {
            Model::validateArray($this->childObjects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childObjects) {
            if (\is_array($this->childObjects)) {
                $res['ChildObjects'] = [];
                $n1 = 0;
                foreach ($this->childObjects as $item1) {
                    $res['ChildObjects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DB) {
            $res['DB'] = $this->DB;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->ossClusterId) {
            $res['OssClusterId'] = $this->ossClusterId;
        }

        if (null !== $this->partion) {
            $res['Partion'] = $this->partion;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['ChildObjects'])) {
            if (!empty($map['ChildObjects'])) {
                $model->childObjects = [];
                $n1 = 0;
                foreach ($map['ChildObjects'] as $item1) {
                    $model->childObjects[$n1] = childObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DB'])) {
            $model->DB = $map['DB'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['OssClusterId'])) {
            $model->ossClusterId = $map['OssClusterId'];
        }

        if (isset($map['Partion'])) {
            $model->partion = $map['Partion'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
