<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetStructSyncJobAnalyzeResultRequest extends Model
{
    /**
     * @description The type of the comparison. Valid values:
     *
     *   **CREATE_TABLE**: compares the created tables.
     *   **ALTER_TABLE**: compares the modified tables.
     *   **EQUAL_TABLE**: compares the identical tables.
     *   **PASS_TABLE**: compares the tables that are skipped during schema synchronization.
     *   **NOT_COMPARE**: does not compare tables.
     *
     * @example CREATE_TABLE
     *
     * @var string
     */
    public $compareType;

    /**
     * @description The ID of the ticket.
     *
     * @example 1342355
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the tenant.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](~~181330~~).
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'compareType' => 'CompareType',
        'orderId'     => 'OrderId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compareType) {
            $res['CompareType'] = $this->compareType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStructSyncJobAnalyzeResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompareType'])) {
            $model->compareType = $map['CompareType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
