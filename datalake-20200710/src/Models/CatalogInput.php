<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CatalogInput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $jdbcEnabled;

    /**
     * @var string
     */
    public $locationUri;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $storageAccessConfig;

    /**
     * @var bool
     */
    public $thriftEnabled;
    protected $_name = [
        'catalogId'           => 'CatalogId',
        'catalogType'         => 'CatalogType',
        'description'         => 'Description',
        'jdbcEnabled'         => 'JdbcEnabled',
        'locationUri'         => 'LocationUri',
        'owner'               => 'Owner',
        'storageAccessConfig' => 'StorageAccessConfig',
        'thriftEnabled'       => 'ThriftEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->catalogType) {
            $res['CatalogType'] = $this->catalogType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jdbcEnabled) {
            $res['JdbcEnabled'] = $this->jdbcEnabled;
        }
        if (null !== $this->locationUri) {
            $res['LocationUri'] = $this->locationUri;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->storageAccessConfig) {
            $res['StorageAccessConfig'] = $this->storageAccessConfig;
        }
        if (null !== $this->thriftEnabled) {
            $res['ThriftEnabled'] = $this->thriftEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CatalogInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['CatalogType'])) {
            $model->catalogType = $map['CatalogType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JdbcEnabled'])) {
            $model->jdbcEnabled = $map['JdbcEnabled'];
        }
        if (isset($map['LocationUri'])) {
            $model->locationUri = $map['LocationUri'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['StorageAccessConfig'])) {
            $model->storageAccessConfig = $map['StorageAccessConfig'];
        }
        if (isset($map['ThriftEnabled'])) {
            $model->thriftEnabled = $map['ThriftEnabled'];
        }

        return $model;
    }
}
