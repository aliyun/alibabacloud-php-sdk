<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesRequest\tags;

class ListInstancesRequest extends Model
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
     * @var tags[]
     */
    public $tags;
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
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
