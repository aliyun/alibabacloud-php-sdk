<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceIndexUsageRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $database;

    /**
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
     *   **30**
     *   **50**
     *   **100**
     *
     * Default value: **30**.
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'database'     => 'Database',
        'orderBy'      => 'OrderBy',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceIndexUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
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

        return $model;
    }
}
