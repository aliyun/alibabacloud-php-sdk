<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDbInstancesRequest extends Model
{
    /**
     * @description Storage layer type. Valid values: **POLARDB** or **RDS**.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The ID of a DRDS instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the storage or cluster.
     *
     * @example pc-***************
     *
     * @var string
     */
    public $search;
    protected $_name = [
        'dbInstType'     => 'DbInstType',
        'drdsInstanceId' => 'DrdsInstanceId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'search'         => 'Search',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
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
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDbInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
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
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }

        return $model;
    }
}
