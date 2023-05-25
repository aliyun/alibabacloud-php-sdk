<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDataImportSQLPreCheckDetailRequest extends Model
{
    /**
     * @description The ticket ID. You can call the [ListOrders](~~144643~~) operation to query the ticket ID.
     *
     * @example 11****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumer;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the SQL statement. Valid values:
     *
     *   **SELECT**
     *   **INSERT**
     *   **DELETE**
     *   **CREATE_TABLE**
     *
     * > You can log on to the Data Management (DMS) console and choose **Security and Specifications** > **Operation Audit** in the top navigation bar to view more types of SQL statements.
     * @example INSERT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The state of the ticket. If you leave this parameter empty, all the states are queried by default. Valid values:
     *
     *   **INIT**: The ticket is being initialized.
     *   **RUNNING**: The ticket is in progress.
     *   **SUCCESS**: The ticket is complete.
     *   **TIMEOUT**: The ticket is skipped due to timeout.
     *   **FAIL**: The ticket fails.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The tenant ID. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to query the tenant ID.
     *
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderId'    => 'OrderId',
        'pageNumer'  => 'PageNumer',
        'pageSize'   => 'PageSize',
        'sqlType'    => 'SqlType',
        'statusCode' => 'StatusCode',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNumer) {
            $res['PageNumer'] = $this->pageNumer;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataImportSQLPreCheckDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNumer'])) {
            $model->pageNumer = $map['PageNumer'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
