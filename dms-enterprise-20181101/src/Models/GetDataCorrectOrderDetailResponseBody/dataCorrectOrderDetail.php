<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\databaseList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\orderDetail;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail;
use AlibabaCloud\Tea\Model;

class dataCorrectOrderDetail extends Model
{
    /**
     * @description The configurations of the ticket. This parameter is used to store the configuration information specific to a data change ticket type.
     *
     * @var configDetail
     */
    public $configDetail;

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
     *
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
     * @description The specific state of the data change ticket. Valid values:
     *
     * >  The state of the ticket is not exactly equivalent to the status code for the ticket. To query the status code of the ticket, you can call the [GetOrderBaseInfo](https://help.aliyun.com/document_detail/465868.html) operation and check the value of StatusCode in the response.
     *
     *   **new**: The ticket is created.
     *   **precheck**: The ticket is in the pre-check phase.
     *   **precheckFailed**: The ticket failed to pass the precheck.
     *   **precheck_success**: The ticket passes the precheck and waits to be submitted for approval.
     *   **toaudit**: The ticket is being reviewed.
     *   **Approved**: The ticket is approved.
     *   **reject**: The ticket is rejected.
     *   **waiting**: The task is submitted and waits to be scheduled.
     *   **processing**: The task is being executed.
     *   **Success**: The task is successful.
     *
     * @example approved
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configDetail' => 'ConfigDetail',
        'databaseList' => 'DatabaseList',
        'execMode' => 'ExecMode',
        'orderDetail' => 'OrderDetail',
        'preCheckDetail' => 'PreCheckDetail',
        'status' => 'Status',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configDetail) {
            $res['ConfigDetail'] = null !== $this->configDetail ? $this->configDetail->toMap() : null;
        }
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
        if (isset($map['ConfigDetail'])) {
            $model->configDetail = configDetail::fromMap($map['ConfigDetail']);
        }
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
