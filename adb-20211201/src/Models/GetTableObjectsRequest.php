<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetTableObjectsRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example am-bp1565u55p32****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The description of the table.
     *
     * @example description
     *
     * @var string
     */
    public $filterDescription;

    /**
     * @description The owner of the table.
     *
     * @example admin
     *
     * @var string
     */
    public $filterOwner;

    /**
     * @description The name of the table.
     *
     * @example test_tbl
     *
     * @var string
     */
    public $filterTblName;

    /**
     * @description The type of the table.
     *
     * Default value: null.
     * @example FACT_TABLE
     *
     * @var string
     */
    public $filterTblType;

    /**
     * @description The order in which the fields to be returned are sorted.
     *
     * Valid values:
     *
     *   Asc
     *   Desc
     *
     * Default value: {"Type": "Desc","Field": "TableName"};
     * @example {"Type": "Desc","Field": "TableName"}
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of the page to return. The value is an integer that is greater than 0. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values:
     *
     *   30
     *   50
     *   100
     *
     * Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the cluster resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'filterDescription' => 'FilterDescription',
        'filterOwner'       => 'FilterOwner',
        'filterTblName'     => 'FilterTblName',
        'filterTblType'     => 'FilterTblType',
        'orderBy'           => 'OrderBy',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'regionId'          => 'RegionId',
        'schemaName'        => 'SchemaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->filterDescription) {
            $res['FilterDescription'] = $this->filterDescription;
        }
        if (null !== $this->filterOwner) {
            $res['FilterOwner'] = $this->filterOwner;
        }
        if (null !== $this->filterTblName) {
            $res['FilterTblName'] = $this->filterTblName;
        }
        if (null !== $this->filterTblType) {
            $res['FilterTblType'] = $this->filterTblType;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableObjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['FilterDescription'])) {
            $model->filterDescription = $map['FilterDescription'];
        }
        if (isset($map['FilterOwner'])) {
            $model->filterOwner = $map['FilterOwner'];
        }
        if (isset($map['FilterTblName'])) {
            $model->filterTblName = $map['FilterTblName'];
        }
        if (isset($map['FilterTblType'])) {
            $model->filterTblType = $map['FilterTblType'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        return $model;
    }
}
