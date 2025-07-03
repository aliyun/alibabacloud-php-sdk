<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\databases;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\databases\views\adbTableSchema;

class views extends Model
{
    /**
     * @var adbTableSchema
     */
    public $adbTableSchema;

    /**
     * @var string[]
     */
    public $filterColumns;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mappedName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $shardColumns;

    /**
     * @var string
     */
    public $whereClause;
    protected $_name = [
        'adbTableSchema' => 'AdbTableSchema',
        'filterColumns' => 'FilterColumns',
        'id' => 'Id',
        'mappedName' => 'MappedName',
        'name' => 'Name',
        'shardColumns' => 'ShardColumns',
        'whereClause' => 'WhereClause',
    ];

    public function validate()
    {
        if (null !== $this->adbTableSchema) {
            $this->adbTableSchema->validate();
        }
        if (\is_array($this->filterColumns)) {
            Model::validateArray($this->filterColumns);
        }
        if (\is_array($this->shardColumns)) {
            Model::validateArray($this->shardColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adbTableSchema) {
            $res['AdbTableSchema'] = null !== $this->adbTableSchema ? $this->adbTableSchema->toArray($noStream) : $this->adbTableSchema;
        }

        if (null !== $this->filterColumns) {
            if (\is_array($this->filterColumns)) {
                $res['FilterColumns'] = [];
                $n1 = 0;
                foreach ($this->filterColumns as $item1) {
                    $res['FilterColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->shardColumns) {
            if (\is_array($this->shardColumns)) {
                $res['ShardColumns'] = [];
                $n1 = 0;
                foreach ($this->shardColumns as $item1) {
                    $res['ShardColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whereClause) {
            $res['WhereClause'] = $this->whereClause;
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
        if (isset($map['AdbTableSchema'])) {
            $model->adbTableSchema = adbTableSchema::fromMap($map['AdbTableSchema']);
        }

        if (isset($map['FilterColumns'])) {
            if (!empty($map['FilterColumns'])) {
                $model->filterColumns = [];
                $n1 = 0;
                foreach ($map['FilterColumns'] as $item1) {
                    $model->filterColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ShardColumns'])) {
            if (!empty($map['ShardColumns'])) {
                $model->shardColumns = [];
                $n1 = 0;
                foreach ($map['ShardColumns'] as $item1) {
                    $model->shardColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WhereClause'])) {
            $model->whereClause = $map['WhereClause'];
        }

        return $model;
    }
}
