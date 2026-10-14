<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class SearchAgenticCatalogRequest extends Model
{
    /**
     * @var string
     */
    public $catalogType;

    /**
     * @var string
     */
    public $catalogUuids;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $searchKey;
    protected $_name = [
        'catalogType' => 'CatalogType',
        'catalogUuids' => 'CatalogUuids',
        'dbType' => 'DbType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'searchKey' => 'SearchKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogType) {
            $res['CatalogType'] = $this->catalogType;
        }

        if (null !== $this->catalogUuids) {
            $res['CatalogUuids'] = $this->catalogUuids;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
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
        if (isset($map['CatalogType'])) {
            $model->catalogType = $map['CatalogType'];
        }

        if (isset($map['CatalogUuids'])) {
            $model->catalogUuids = $map['CatalogUuids'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        return $model;
    }
}
