<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListLineageRelationshipsRequest extends Model
{
    /**
     * @description The destination entity ID. For more information, see the table ID or field ID in the response returned by the ListTables or ListColumns operation. You can also specify a custom entity ID.
     *
     * This parameter is required.
     *
     * @example maxcompute-table:123456XXX::test_project::test_tbl
     * dlf-table:123456XXX:test_catalog:test_db::test_tbl
     * hms-table:c-abc123xxx::test_db::test_tbl
     * holo-table:h-abc123xxx::test_db:test_schema:test_tbl
     * custom-api:api123
     * custom-table:table456
     *
     * @var string
     */
    public $dstEntityId;

    /**
     * @example dstName
     *
     * @var string
     */
    public $dstEntityName;

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
     * @example Name
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The source entity ID. For more information, see the table ID or field ID in the response returned by the ListTables or ListColumns operation. You can also specify a custom entity ID.
     *
     * This parameter is required.
     *
     * @example maxcompute-table:123456XXX::test_project::test_tbl
     * dlf-table:123456XXX:test_catalog:test_db::test_tbl
     * hms-table:c-abc123xxx::test_db::test_tbl
     * holo-table:h-abc123xxx::test_db:test_schema:test_tbl
     * custom-api:api123
     * custom-table:table456
     *
     * @var string
     */
    public $srcEntityId;

    /**
     * @example srcName
     *
     * @var string
     */
    public $srcEntityName;
    protected $_name = [
        'dstEntityId' => 'DstEntityId',
        'dstEntityName' => 'DstEntityName',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'srcEntityId' => 'SrcEntityId',
        'srcEntityName' => 'SrcEntityName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstEntityId) {
            $res['DstEntityId'] = $this->dstEntityId;
        }
        if (null !== $this->dstEntityName) {
            $res['DstEntityName'] = $this->dstEntityName;
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
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->srcEntityId) {
            $res['SrcEntityId'] = $this->srcEntityId;
        }
        if (null !== $this->srcEntityName) {
            $res['SrcEntityName'] = $this->srcEntityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLineageRelationshipsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstEntityId'])) {
            $model->dstEntityId = $map['DstEntityId'];
        }
        if (isset($map['DstEntityName'])) {
            $model->dstEntityName = $map['DstEntityName'];
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
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SrcEntityId'])) {
            $model->srcEntityId = $map['SrcEntityId'];
        }
        if (isset($map['SrcEntityName'])) {
            $model->srcEntityName = $map['SrcEntityName'];
        }

        return $model;
    }
}
