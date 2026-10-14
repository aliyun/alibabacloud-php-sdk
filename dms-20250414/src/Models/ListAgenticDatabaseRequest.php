<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListAgenticDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $catalogUuid;

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

    /**
     * @var string
     */
    public $sortFieldName;

    /**
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'catalogUuid' => 'CatalogUuid',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'searchKey' => 'SearchKey',
        'sortFieldName' => 'SortFieldName',
        'sortOrder' => 'SortOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
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

        if (null !== $this->sortFieldName) {
            $res['SortFieldName'] = $this->sortFieldName;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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
        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
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

        if (isset($map['SortFieldName'])) {
            $model->sortFieldName = $map['SortFieldName'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
