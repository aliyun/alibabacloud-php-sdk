<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListSchemasRequest extends Model
{
    /**
     * @description The comment. Fuzzy match is supported.
     *
     * @example test comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The name. Fuzzy match is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The order in which schemas are sorted. Default value: Asc. Valid values:
     *
     *   Asc: ascending order
     *   Desc: descending order
     *
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The parent entity ID. For more information, see [Concepts related to metadata entities](https://help.aliyun.com/document_detail/2880092.html). For the Hologres metadata crawler type, you can call the ListDatabases operation to query the settings of the `ParentMetaEntityId` parameter.
     *
     * Configure the `ParentMetaEntityId` parameter in the `${EntityType}:${Instance ID or escaped URL}:${Catalog identifier}:${Database name}` format. If a level does not exist, leave the level empty.
     *
     * >  If you want to query the information about a MaxCompute schema, specify an empty string at the Instance ID level as a placeholder and a MaxCompute project name at the Database name level. Make sure that the schema feature is enabled for the MaxCompute project.
     *
     * This parameter is required.
     *
     * @example maxcompute-project:123456XXX::test_project
     * holo-database:h-abc123xxx::test_db
     *
     * @var string
     */
    public $parentMetaEntityId;

    /**
     * @description The field used for sorting. Default value: CreateTime. Valid values:
     *
     *   CreateTime
     *   ModifyTime
     *   Name
     *   Type
     *
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The types. Exact match is supported. If this parameter is left empty, all types are queried.
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'comment' => 'Comment',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentMetaEntityId' => 'ParentMetaEntityId',
        'sortBy' => 'SortBy',
        'types' => 'Types',
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
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSchemasRequest
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
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
