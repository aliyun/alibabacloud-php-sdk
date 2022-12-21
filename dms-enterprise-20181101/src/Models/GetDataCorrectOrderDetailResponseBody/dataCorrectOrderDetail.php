<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\databaseList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\orderDetail;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail;
use AlibabaCloud\Tea\Model;

class dataCorrectOrderDetail extends Model
{
    /**
     * @description The information about the database in which data is changed.
     *
     * @var databaseList
     */
    public $databaseList;

    /**
     * @description The execution mode of the ticket after the ticket is approved. Valid values:
     *
     * - **COMMITOR**: The data change is performed by the user who submits the ticket.
     * - **AUTO**: The data change is automatically performed after the ticket is approved.
     * - **LAST_AUDITOR**: The data change is performed by the last approver of the ticket.
     * @example COMMITOR
     *
     * @var string
     */
    public $execMode;

    /**
     * @description The details of the ticket.
     *
     * @var orderDetail
     */
    public $orderDetail;

    /**
     * @description The precheck details of the ticket.
     *
     * @var preCheckDetail
     */
    public $preCheckDetail;

    /**
     * @description The status of the ticket. Valid values:
     *
     * - **new**: The ticket is created.
     * - **precheck**: The ticket is being prechecked.
     * - **precheck_fail**: The ticket fails the precheck.
     * - **precheck_success**: The ticket passes the precheck and waits to be submitted for approval.
     * - **toaudit**: The ticket is being reviewed.
     * - **Approved**: The ticket is approved.
     * - **reject**: The ticket is rejected.
     * - **waiting**: The ticket is submitted and waits to be scheduled.
     * - **processing**: The ticket is being executed.
     * - **success**: The ticket is executed.
     * - **closed**: The ticket is closed.
     * @example approved
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'databaseList'   => 'DatabaseList',
        'execMode'       => 'ExecMode',
        'orderDetail'    => 'OrderDetail',
        'preCheckDetail' => 'PreCheckDetail',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseList) {
            $res['DatabaseList'] = null !== $this->databaseList ? $this->databaseList->toMap() : null;
        }
        if (null !== $this->execMode) {
            $res['ExecMode'] = $this->execMode;
        }
        if (null !== $this->orderDetail) {
            $res['OrderDetail'] = null !== $this->orderDetail ? $this->orderDetail->toMap() : null;
        }
        if (null !== $this->preCheckDetail) {
            $res['PreCheckDetail'] = null !== $this->preCheckDetail ? $this->preCheckDetail->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCorrectOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseList'])) {
            $model->databaseList = databaseList::fromMap($map['DatabaseList']);
        }
        if (isset($map['ExecMode'])) {
            $model->execMode = $map['ExecMode'];
        }
        if (isset($map['OrderDetail'])) {
            $model->orderDetail = orderDetail::fromMap($map['OrderDetail']);
        }
        if (isset($map['PreCheckDetail'])) {
            $model->preCheckDetail = preCheckDetail::fromMap($map['PreCheckDetail']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
