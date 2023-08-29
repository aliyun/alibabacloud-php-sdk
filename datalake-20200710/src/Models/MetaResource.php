<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class MetaResource extends Model
{
    /**
     * @var CatalogResource
     */
    public $catalogResource;

    /**
     * @var ColumnResource
     */
    public $columnResource;

    /**
     * @var DatabaseResource
     */
    public $databaseResource;

    /**
     * @var FunctionResource
     */
    public $functionResource;

    /**
     * @example TABLE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var TableResource
     */
    public $tableResource;
    protected $_name = [
        'catalogResource'  => 'CatalogResource',
        'columnResource'   => 'ColumnResource',
        'databaseResource' => 'DatabaseResource',
        'functionResource' => 'FunctionResource',
        'resourceType'     => 'ResourceType',
        'tableResource'    => 'TableResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogResource) {
            $res['CatalogResource'] = null !== $this->catalogResource ? $this->catalogResource->toMap() : null;
        }
        if (null !== $this->columnResource) {
            $res['ColumnResource'] = null !== $this->columnResource ? $this->columnResource->toMap() : null;
        }
        if (null !== $this->databaseResource) {
            $res['DatabaseResource'] = null !== $this->databaseResource ? $this->databaseResource->toMap() : null;
        }
        if (null !== $this->functionResource) {
            $res['FunctionResource'] = null !== $this->functionResource ? $this->functionResource->toMap() : null;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tableResource) {
            $res['TableResource'] = null !== $this->tableResource ? $this->tableResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetaResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogResource'])) {
            $model->catalogResource = CatalogResource::fromMap($map['CatalogResource']);
        }
        if (isset($map['ColumnResource'])) {
            $model->columnResource = ColumnResource::fromMap($map['ColumnResource']);
        }
        if (isset($map['DatabaseResource'])) {
            $model->databaseResource = DatabaseResource::fromMap($map['DatabaseResource']);
        }
        if (isset($map['FunctionResource'])) {
            $model->functionResource = FunctionResource::fromMap($map['FunctionResource']);
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TableResource'])) {
            $model->tableResource = TableResource::fromMap($map['TableResource']);
        }

        return $model;
    }
}
