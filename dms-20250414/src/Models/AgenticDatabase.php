<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticDatabase extends Model
{
    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $catalogType;

    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var mixed[]
     */
    public $databaseBizAttrs;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var AgenticDatabaseEngineMeta
     */
    public $engineMeta;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $storageLocation;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'catalogType' => 'CatalogType',
        'catalogUuid' => 'CatalogUuid',
        'databaseBizAttrs' => 'DatabaseBizAttrs',
        'databaseUuid' => 'DatabaseUuid',
        'dbType' => 'DbType',
        'description' => 'Description',
        'engineMeta' => 'EngineMeta',
        'name' => 'Name',
        'properties' => 'Properties',
        'qualifiedName' => 'QualifiedName',
        'regionId' => 'RegionId',
        'searchName' => 'SearchName',
        'state' => 'State',
        'storageLocation' => 'StorageLocation',
    ];

    public function validate()
    {
        if (\is_array($this->databaseBizAttrs)) {
            Model::validateArray($this->databaseBizAttrs);
        }
        if (null !== $this->engineMeta) {
            $this->engineMeta->validate();
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->catalogType) {
            $res['CatalogType'] = $this->catalogType;
        }

        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->databaseBizAttrs) {
            if (\is_array($this->databaseBizAttrs)) {
                $res['DatabaseBizAttrs'] = [];
                foreach ($this->databaseBizAttrs as $key1 => $value1) {
                    $res['DatabaseBizAttrs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->engineMeta) {
            $res['EngineMeta'] = null !== $this->engineMeta ? $this->engineMeta->toArray($noStream) : $this->engineMeta;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
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
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['CatalogType'])) {
            $model->catalogType = $map['CatalogType'];
        }

        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['DatabaseBizAttrs'])) {
            if (!empty($map['DatabaseBizAttrs'])) {
                $model->databaseBizAttrs = [];
                foreach ($map['DatabaseBizAttrs'] as $key1 => $value1) {
                    $model->databaseBizAttrs[$key1] = $value1;
                }
            }
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EngineMeta'])) {
            $model->engineMeta = AgenticDatabaseEngineMeta::fromMap($map['EngineMeta']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        return $model;
    }
}
