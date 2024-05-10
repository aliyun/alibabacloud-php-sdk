<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetViewObjectsRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example am-bp1xxxxxxxx47
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The owner of the view.
     *
     * @example admin
     *
     * @var string
     */
    public $filterOwner;

    /**
     * @description The name of the view.
     *
     * @example test_filter
     *
     * @var string
     */
    public $filterViewName;

    /**
     * @description The type of the view.
     *
     * Default value: null.
     * @example VIRTUAL_VIEW
     *
     * @var string
     */
    public $filterViewType;

    /**
     * @description The order in which you want to sort the query results. Valid values for Type:
     *
     *   Asc
     *   Desc
     *
     * Default value: {"Type": "Desc","Field": "ViewName"}.
     * @example {"Type": "Desc","Field": "ViewName"}
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **30** (default)
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the cluster.
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
        'DBClusterId'    => 'DBClusterId',
        'filterOwner'    => 'FilterOwner',
        'filterViewName' => 'FilterViewName',
        'filterViewType' => 'FilterViewType',
        'orderBy'        => 'OrderBy',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'schemaName'     => 'SchemaName',
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
        if (null !== $this->filterOwner) {
            $res['FilterOwner'] = $this->filterOwner;
        }
        if (null !== $this->filterViewName) {
            $res['FilterViewName'] = $this->filterViewName;
        }
        if (null !== $this->filterViewType) {
            $res['FilterViewType'] = $this->filterViewType;
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
     * @return GetViewObjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['FilterOwner'])) {
            $model->filterOwner = $map['FilterOwner'];
        }
        if (isset($map['FilterViewName'])) {
            $model->filterViewName = $map['FilterViewName'];
        }
        if (isset($map['FilterViewType'])) {
            $model->filterViewType = $map['FilterViewType'];
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
