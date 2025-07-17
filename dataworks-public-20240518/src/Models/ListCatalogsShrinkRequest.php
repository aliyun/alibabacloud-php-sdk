<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListCatalogsShrinkRequest extends Model
{
    /**
     * @example this is a comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example abc
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
     * @description The parent entity ID. For more information, see [Concepts related to metadata entities](https://help.aliyun.com/document_detail/2880092.html).
     *
     * Only DLF and StarRocks data sources support this parameter.
     *
     *   For DLF data sources, you can call this API operation to query all catalogs. In this case, you must set the `ParentMetaEntityId` parameter to `dlf`.
     *   For StarRocks data sources, you can call this API operation to query the catalogs in a specific instance. In this case, you can configure the `ParentMetaEntityId` parameter in the `starrocks:(instance_id|encoded_jdbc_url)` format.
     *
     * > \\
     * `instance_id`: the ID of an instance. If the related data source is added to DataWorks in Alibaba Cloud instance mode, you must configure this parameter.\\
     * `encoded_jdbc_url`: the JDBC connection string that is URL-encoded. If the related data source is added to DataWorks in connection string mode, you must configure this parameter.
     *
     * This parameter is required.
     *
     * @example dlf
     * starrocks:c-abc123xxx
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

    /**
     * @var string
     */
    public $typesShrink;
    protected $_name = [
        'comment' => 'Comment',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentMetaEntityId' => 'ParentMetaEntityId',
        'sortBy' => 'SortBy',
        'typesShrink' => 'Types',
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
        if (null !== $this->typesShrink) {
            $res['Types'] = $this->typesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCatalogsShrinkRequest
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
        if (isset($map['Types'])) {
            $model->typesShrink = $map['Types'];
        }

        return $model;
    }
}
