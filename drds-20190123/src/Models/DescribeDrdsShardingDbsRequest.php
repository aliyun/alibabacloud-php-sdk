<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsShardingDbsRequest extends Model
{
    /**
     * @description The name of the database whose shards you want to query.
     *
     * @example drds_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The matching pattern of the database name.
     *
     * @example test
     *
     * @var string
     */
    public $dbNamePattern;

    /**
     * @description The ID of the PolarDB-X 1.0 instance whose database shards you want to query.
     *
     * @example drdshbgaf3c63qbo
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
     * @description The number of database shards returned on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'dbName'         => 'DbName',
        'dbNamePattern'  => 'DbNamePattern',
        'drdsInstanceId' => 'DrdsInstanceId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbNamePattern) {
            $res['DbNamePattern'] = $this->dbNamePattern;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsShardingDbsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbNamePattern'])) {
            $model->dbNamePattern = $map['DbNamePattern'];
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

        return $model;
    }
}
