<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Catalog extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var bool
     */
    public $defaultCatalog;

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
    public $status;

    /**
     * @var string
     */
    public $storageAccessConfig;

    /**
     * @var bool
     */
    public $thriftEnabled;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'catalogId'           => 'CatalogId',
        'catalogType'         => 'CatalogType',
        'createTime'          => 'CreateTime',
        'createdBy'           => 'CreatedBy',
        'defaultCatalog'      => 'DefaultCatalog',
        'description'         => 'Description',
        'jdbcEnabled'         => 'JdbcEnabled',
        'locationUri'         => 'LocationUri',
        'owner'               => 'Owner',
        'status'              => 'Status',
        'storageAccessConfig' => 'StorageAccessConfig',
        'thriftEnabled'       => 'ThriftEnabled',
        'updateTime'          => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->defaultCatalog) {
            $res['DefaultCatalog'] = $this->defaultCatalog;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageAccessConfig) {
            $res['StorageAccessConfig'] = $this->storageAccessConfig;
        }
        if (null !== $this->thriftEnabled) {
            $res['ThriftEnabled'] = $this->thriftEnabled;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Catalog
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['DefaultCatalog'])) {
            $model->defaultCatalog = $map['DefaultCatalog'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageAccessConfig'])) {
            $model->storageAccessConfig = $map['StorageAccessConfig'];
        }
        if (isset($map['ThriftEnabled'])) {
            $model->thriftEnabled = $map['ThriftEnabled'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
