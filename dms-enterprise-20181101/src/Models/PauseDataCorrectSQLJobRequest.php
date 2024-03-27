<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class PauseDataCorrectSQLJobRequest extends Model
{
    /**
     * @description The ID of the SQL task. You can call the [GetDataCorrectTaskDetail](~~208481~~) or [ListDBTaskSQLJob](~~207049~~) operation to obtain the value of this parameter.
     *
     * >  If Type is set to SINGLE, you must pass in the value of JobId to confirm the ID of the SQL task that you want to pause.
     * @example 43253
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The ID of the data change ticket. You can call the [ListOrders](~~144643~~) operation to query the ID of the data change ticket.
     *
     * @example 43253
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The tenant ID. You can call the [GetUserActiveTenant](~~198073~~) operation to query the tenant ID.
     *
     * @example 4325
     *
     * @var int
     */
    public $tid;

    /**
     * @description The type of the pause operation. Valid values:
     *
     *   ALL: pauses all SQL tasks.
     *   SINGLE: pauses a single SQL task.
     *
     * @example SINGLE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'jobId'   => 'JobId',
        'orderId' => 'OrderId',
        'tid'     => 'Tid',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PauseDataCorrectSQLJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
