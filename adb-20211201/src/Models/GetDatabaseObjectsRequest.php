<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetDatabaseObjectsRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example am-bp1565u55p32****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The owner of the database.
     *
     * @example admin
     *
     * @var string
     */
    public $filterOwner;

    /**
     * @description The name of the database.
     *
     * @example test_db
     *
     * @var string
     */
    public $filterSchemaName;

    /**
     * @description The order in which you want to sort the query results. Valid values:
     *
     *   Asc
     *   Desc
     *
     * Default value: {"Type": "Desc","Field": "DatabaseName"}.
     * @example {"Type": "Desc","Field": "DbName"}
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number. Pages start from page 1. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
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
     * @description The region ID of the database.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'filterOwner'      => 'FilterOwner',
        'filterSchemaName' => 'FilterSchemaName',
        'orderBy'          => 'OrderBy',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
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
        if (null !== $this->filterSchemaName) {
            $res['FilterSchemaName'] = $this->filterSchemaName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabaseObjectsRequest
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
        if (isset($map['FilterSchemaName'])) {
            $model->filterSchemaName = $map['FilterSchemaName'];
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

        return $model;
    }
}
