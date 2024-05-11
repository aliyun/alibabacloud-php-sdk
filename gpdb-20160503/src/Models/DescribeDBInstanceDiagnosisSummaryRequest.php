<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceDiagnosisSummaryRequest extends Model
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
     *   **20**
     *   **50**
     *   **100**
     *
     * Default value: **20**.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The role state of the node. It specifies whether a primary/secondary switchover occurs. Valid values:
     *
     *   **normal**: The node role is normal. No primary/secondary switchover occurs.
     *   **reverse**: The node role is reversed. A primary/secondary switchover occurs.
     *
     * @example normal
     *
     * @var string
     */
    public $rolePreferd;

    /**
     * @description The running state of the node. Valid values:
     *
     *   **UP**: The node is running.
     *   **DOWN**: The node is faulty.
     *
     * If you do not specify this parameter, the information about nodes in all running states is returned.
     * @example UP
     *
     * @var string
     */
    public $startStatus;

    /**
     * @description The data synchronization state of the node. Valid values:
     *
     *   **synced**: The node data is synchronized.
     *   **notSyncing**: The node data is not synchronized.
     *
     * If you do not specify this parameter, the information about nodes in all synchronization states is returned.
     * @example synced
     *
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
