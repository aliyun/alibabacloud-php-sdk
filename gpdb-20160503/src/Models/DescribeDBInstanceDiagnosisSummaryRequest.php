<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceDiagnosisSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $rolePreferd;

    /**
     * @var string
     */
    public $startStatus;

    /**
     * @var string
     */
    public $syncMode;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'rolePreferd'  => 'RolePreferd',
        'startStatus'  => 'StartStatus',
        'syncMode'     => 'SyncMode',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rolePreferd) {
            $res['RolePreferd'] = $this->rolePreferd;
        }
        if (null !== $this->startStatus) {
            $res['StartStatus'] = $this->startStatus;
        }
        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceDiagnosisSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RolePreferd'])) {
            $model->rolePreferd = $map['RolePreferd'];
        }
        if (isset($map['StartStatus'])) {
            $model->startStatus = $map['StartStatus'];
        }
        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }

        return $model;
    }
}
