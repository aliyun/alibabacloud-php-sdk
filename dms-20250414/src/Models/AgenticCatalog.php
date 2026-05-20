<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticCatalog extends Model
{
    /**
     * @var mixed[]
     */
    public $catalogBizAttrs;

    /**
     * @var string
     */
    public $catalogType;

    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $dataSourceUuid;

    /**
     * @var string
     */
    public $description;

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
    public $regionId;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $storageLocation;
    protected $_name = [
        'catalogBizAttrs' => 'CatalogBizAttrs',
        'catalogType' => 'CatalogType',
        'catalogUuid' => 'CatalogUuid',
        'dataSourceType' => 'DataSourceType',
        'dataSourceUuid' => 'DataSourceUuid',
        'description' => 'Description',
        'name' => 'Name',
        'properties' => 'Properties',
        'regionId' => 'RegionId',
        'state' => 'State',
        'storageLocation' => 'StorageLocation',
    ];

    public function validate()
    {
        if (\is_array($this->catalogBizAttrs)) {
            Model::validateArray($this->catalogBizAttrs);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogBizAttrs) {
            if (\is_array($this->catalogBizAttrs)) {
                $res['CatalogBizAttrs'] = [];
                foreach ($this->catalogBizAttrs as $key1 => $value1) {
                    $res['CatalogBizAttrs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->catalogType) {
            $res['CatalogType'] = $this->catalogType;
        }

        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->dataSourceUuid) {
            $res['DataSourceUuid'] = $this->dataSourceUuid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CatalogBizAttrs'])) {
            if (!empty($map['CatalogBizAttrs'])) {
                $model->catalogBizAttrs = [];
                foreach ($map['CatalogBizAttrs'] as $key1 => $value1) {
                    $model->catalogBizAttrs[$key1] = $value1;
                }
            }
        }

        if (isset($map['CatalogType'])) {
            $model->catalogType = $map['CatalogType'];
        }

        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['DataSourceUuid'])) {
            $model->dataSourceUuid = $map['DataSourceUuid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
