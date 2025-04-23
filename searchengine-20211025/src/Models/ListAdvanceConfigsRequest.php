<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListAdvanceConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var bool
     */
    public $newMode;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSourceName' => 'dataSourceName',
        'indexName' => 'indexName',
        'newMode' => 'newMode',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }

        if (null !== $this->newMode) {
            $res['newMode'] = $this->newMode;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }

        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        if (isset($map['newMode'])) {
            $model->newMode = $map['newMode'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
