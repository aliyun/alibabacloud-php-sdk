<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeTableListByTypeRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the database.
     *
     * @example drds_flash****
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drdshbga76p6****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The field that you specify for your query.
     *
     * @example drdshbga76p61861
     *
     * @var string
     */
    public $query;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of tables. Valid values:
     *
     * @example SINGLE
     *
     * @var string
     */
    public $tableType;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'pageSize'       => 'PageSize',
        'query'          => 'Query',
        'regionId'       => 'RegionId',
        'tableType'      => 'TableType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTableListByTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
