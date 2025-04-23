<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'catalog' => 'catalog',
        'dataSourceType' => 'dataSourceType',
        'database' => 'database',
        'description' => 'description',
        'edition' => 'edition',
        'instanceId' => 'instanceId',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'table' => 'table',
        'tagsShrink' => 'tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['catalog'] = $this->catalog;
        }

        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->edition) {
            $res['edition'] = $this->edition;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
        }

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
        if (isset($map['catalog'])) {
            $model->catalog = $map['catalog'];
        }

        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }

        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['edition'])) {
            $model->edition = $map['edition'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
