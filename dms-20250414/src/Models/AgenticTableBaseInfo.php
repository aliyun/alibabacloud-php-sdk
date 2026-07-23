<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticTableBaseInfo extends Model
{
    /**
     * @var string
     */
    public $catalogType;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var AgenticTableEngineMeta
     */
    public $engineMeta;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'catalogType' => 'CatalogType',
        'databaseUuid' => 'DatabaseUuid',
        'description' => 'Description',
        'engineMeta' => 'EngineMeta',
        'name' => 'Name',
        'qualifiedName' => 'QualifiedName',
        'tableType' => 'TableType',
    ];

    public function validate()
    {
        if (null !== $this->engineMeta) {
            $this->engineMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogType) {
            $res['CatalogType'] = $this->catalogType;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
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

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
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
        if (isset($map['CatalogType'])) {
            $model->catalogType = $map['CatalogType'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EngineMeta'])) {
            $model->engineMeta = AgenticTableEngineMeta::fromMap($map['EngineMeta']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
