<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListPartitionsRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isShareSd;

    /**
     * @example 2cb472ec1bf84f8d92f9c4baa0d21c19aa
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $partialPartValues;

    /**
     * @example test_table_20200715162543389
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'         => 'CatalogId',
        'databaseName'      => 'DatabaseName',
        'isShareSd'         => 'IsShareSd',
        'nextPageToken'     => 'NextPageToken',
        'pageSize'          => 'PageSize',
        'partialPartValues' => 'PartialPartValues',
        'tableName'         => 'TableName',
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
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->isShareSd) {
            $res['IsShareSd'] = $this->isShareSd;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->partialPartValues) {
            $res['PartialPartValues'] = $this->partialPartValues;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPartitionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IsShareSd'])) {
            $model->isShareSd = $map['IsShareSd'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PartialPartValues'])) {
            if (!empty($map['PartialPartValues'])) {
                $model->partialPartValues = $map['PartialPartValues'];
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
