<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasResponseBody;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasResponseBody\tableMetas\fields;
use AlibabaCloud\Tea\Model;

class tableMetas extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canDelete;

    /**
     * @var string
     */
    public $config;

    /**
     * @example this is a test table
     *
     * @var string
     */
    public $description;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @example 2021-12-12 12:24:33
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example imprecation
     *
     * @var string
     */
    public $gmtImportedTime;

    /**
     * @example 2021-12-12 12:24:33
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example ABTest
     *
     * @var string
     */
    public $module;

    /**
     * @example test_table
     *
     * @var string
     */
    public $name;

    /**
     * @example reso-2s416t***
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 3
     *
     * @var string
     */
    public $tableMetaId;

    /**
     * @example table_mysql
     *
     * @var string
     */
    public $tableName;

    /**
     * @example MaxCompute
     *
     * @var string
     */
    public $type;

    /**
     * @example https://dmc-xxx.com/dm/table/xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'canDelete'       => 'CanDelete',
        'config'          => 'Config',
        'description'     => 'Description',
        'fields'          => 'Fields',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtImportedTime' => 'GmtImportedTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'module'          => 'Module',
        'name'            => 'Name',
        'resourceId'      => 'ResourceId',
        'tableMetaId'     => 'TableMetaId',
        'tableName'       => 'TableName',
        'type'            => 'Type',
        'url'             => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtImportedTime) {
            $res['GmtImportedTime'] = $this->gmtImportedTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tableMetaId) {
            $res['TableMetaId'] = $this->tableMetaId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableMetas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtImportedTime'])) {
            $model->gmtImportedTime = $map['GmtImportedTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TableMetaId'])) {
            $model->tableMetaId = $map['TableMetaId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
