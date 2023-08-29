<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionNamesRequest extends Model
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
     * @example .*
     *
     * @var string
     */
    public $functionNamePattern;

    /**
     * @example \"\"
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
    protected $_name = [
        'catalogId'           => 'CatalogId',
        'databaseName'        => 'DatabaseName',
        'functionNamePattern' => 'FunctionNamePattern',
        'nextPageToken'       => 'NextPageToken',
        'pageSize'            => 'PageSize',
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
        if (null !== $this->functionNamePattern) {
            $res['FunctionNamePattern'] = $this->functionNamePattern;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionNamesRequest
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
        if (isset($map['FunctionNamePattern'])) {
            $model->functionNamePattern = $map['FunctionNamePattern'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
