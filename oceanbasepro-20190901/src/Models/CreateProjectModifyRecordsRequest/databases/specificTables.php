<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\databases;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\databases\specificTables\adbTableSchema;
use AlibabaCloud\Tea\Model;

class specificTables extends Model
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
     * @example table_id
     *
     * @var string
     */
    public $id;

    /**
     * @example mapped_table
     *
     * @var string
     */
    public $mappedName;

    /**
     * @example table_name
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $shardColumns;

    /**
     * @example id<1
     *
     * @var string
     */
    public $whereClause;
    protected $_name = [
        'adbTableSchema' => 'AdbTableSchema',
        'filterColumns'  => 'FilterColumns',
        'id'             => 'Id',
        'mappedName'     => 'MappedName',
        'name'           => 'Name',
        'shardColumns'   => 'ShardColumns',
        'whereClause'    => 'WhereClause',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adbTableSchema) {
            $res['AdbTableSchema'] = null !== $this->adbTableSchema ? $this->adbTableSchema->toMap() : null;
        }
        if (null !== $this->filterColumns) {
            $res['FilterColumns'] = $this->filterColumns;
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
            $res['ShardColumns'] = $this->shardColumns;
        }
        if (null !== $this->whereClause) {
            $res['WhereClause'] = $this->whereClause;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specificTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdbTableSchema'])) {
            $model->adbTableSchema = adbTableSchema::fromMap($map['AdbTableSchema']);
        }
        if (isset($map['FilterColumns'])) {
            if (!empty($map['FilterColumns'])) {
                $model->filterColumns = $map['FilterColumns'];
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
                $model->shardColumns = $map['ShardColumns'];
            }
        }
        if (isset($map['WhereClause'])) {
            $model->whereClause = $map['WhereClause'];
        }

        return $model;
    }
}
