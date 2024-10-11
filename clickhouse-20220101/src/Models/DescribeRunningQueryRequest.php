<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRunningQueryRequest extends Model
{
    /**
     * @example cc-bp1qx68m06981****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1000
     *
     * @var int
     */
    public $queryDurationMs;

    /**
     * @example c8cbcbaf-d4ab-4e74-900d-90d7c0aecaae
     *
     * @var string
     */
    public $queryId;

    /**
     * @example order by
     *
     * @var string
     */
    public $queryKeyWord;

    /**
     * @example test
     *
     * @var string
     */
    public $queryUser;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example vw-uf62965t8lt50****
     *
     * @var string
     */
    public $virtualWareHouseId;
    protected $_name = [
        'DBClusterId'        => 'DBClusterId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'queryDurationMs'    => 'QueryDurationMs',
        'queryId'            => 'QueryId',
        'queryKeyWord'       => 'QueryKeyWord',
        'queryUser'          => 'QueryUser',
        'regionId'           => 'RegionId',
        'virtualWareHouseId' => 'VirtualWareHouseId',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->queryKeyWord) {
            $res['QueryKeyWord'] = $this->queryKeyWord;
        }
        if (null !== $this->queryUser) {
            $res['QueryUser'] = $this->queryUser;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->virtualWareHouseId) {
            $res['VirtualWareHouseId'] = $this->virtualWareHouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRunningQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['QueryKeyWord'])) {
            $model->queryKeyWord = $map['QueryKeyWord'];
        }
        if (isset($map['QueryUser'])) {
            $model->queryUser = $map['QueryUser'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VirtualWareHouseId'])) {
            $model->virtualWareHouseId = $map['VirtualWareHouseId'];
        }

        return $model;
    }
}
