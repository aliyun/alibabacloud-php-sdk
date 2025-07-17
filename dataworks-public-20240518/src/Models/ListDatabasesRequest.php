<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDatabasesRequest extends Model
{
    /**
     * @example test comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example test_tbl
     *
     * @var string
     */
    public $name;

    /**
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The parent entity ID. For more information, see [description of concepts related to metadata entities.](https://help.aliyun.com/document_detail/2880092.html)
     *
     * The type of the parent entity can be found in the response of the ListCrawlerTypes operation.
     *
     *   If the parent entity is a catalog, the format of `ParentMetaEntityId` follows the response of the ListCatalogs API.
     *   If the parent entity is a metadata crawler, the format of `ParentMetaEntityId` is `${CrawlerType}:${Instance ID or encoded URL}.`
     *
     * ParentMetaEntityId format examples
     *
     * `dlf-catalog::catalog_id`
     *
     * `holo:instance_id`
     *
     * `mysql:(instance_id|encoded_jdbc_url)`
     *
     * > \\
     * `catalog_id`: The DLF catalog ID.\\
     * `instance_id`: The instance ID, required for the data source registered in instance mode.\\
     * `encoded_jdbc_url`: The JDBC connection string that has been URL encoded, required for the data source registered via a connection string.
     *
     * This parameter is required.
     *
     * @example mysql:rm-abc123xxx
     * dlf-catalog:123456XXX:test_catalog
     *
     * @var string
     */
    public $parentMetaEntityId;

    /**
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'comment' => 'Comment',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentMetaEntityId' => 'ParentMetaEntityId',
        'sortBy' => 'SortBy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentMetaEntityId) {
            $res['ParentMetaEntityId'] = $this->parentMetaEntityId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentMetaEntityId'])) {
            $model->parentMetaEntityId = $map['ParentMetaEntityId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
