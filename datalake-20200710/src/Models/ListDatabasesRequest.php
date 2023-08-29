<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListDatabasesRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example .*
     *
     * @var string
     */
    public $namePattern;

    /**
     * @example 2cb472ec1bf84f8d92f9c4baa0d21c19aa!
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
        'catalogId'     => 'CatalogId',
        'namePattern'   => 'NamePattern',
        'nextPageToken' => 'NextPageToken',
        'pageSize'      => 'PageSize',
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
        if (null !== $this->namePattern) {
            $res['NamePattern'] = $this->namePattern;
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
     * @return ListDatabasesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['NamePattern'])) {
            $model->namePattern = $map['NamePattern'];
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
