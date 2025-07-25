<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody\records\operator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody\records\ticketMemo;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example a8iSxxxxgtgiE
     *
     * @var string
     */
    public $openTicketId;

    /**
     * @example {"originTakers":[{"nickName":"贤文","unionId":"Dq9hxxxxwiEiE"},{"nickName":"王鸿程","unionId":"4kITooxxxx5wiEiE"}]}
     *
     * @var string
     */
    public $operateData;

    /**
     * @example 2021-07-09 19:26:09
     *
     * @var string
     */
    public $operateTime;

    /**
     * @example FINISH
     *
     * @var string
     */
    public $operation;

    /**
     * @example 结单
     *
     * @var string
     */
    public $operationDisplayName;

    /**
     * @var operator
     */
    public $operator;

    /**
     * @var ticketMemo
     */
    public $ticketMemo;
    protected $_name = [
        'openTicketId' => 'OpenTicketId',
        'operateData' => 'OperateData',
        'operateTime' => 'OperateTime',
        'operation' => 'Operation',
        'operationDisplayName' => 'OperationDisplayName',
        'operator' => 'Operator',
        'ticketMemo' => 'TicketMemo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->openTicketId) {
            $res['OpenTicketId'] = $this->openTicketId;
        }
        if (null !== $this->operateData) {
            $res['OperateData'] = $this->operateData;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->operationDisplayName) {
            $res['OperationDisplayName'] = $this->operationDisplayName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = null !== $this->operator ? $this->operator->toMap() : null;
        }
        if (null !== $this->ticketMemo) {
            $res['TicketMemo'] = null !== $this->ticketMemo ? $this->ticketMemo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenTicketId'])) {
            $model->openTicketId = $map['OpenTicketId'];
        }
        if (isset($map['OperateData'])) {
            $model->operateData = $map['OperateData'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['OperationDisplayName'])) {
            $model->operationDisplayName = $map['OperationDisplayName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = operator::fromMap($map['Operator']);
        }
        if (isset($map['TicketMemo'])) {
            $model->ticketMemo = ticketMemo::fromMap($map['TicketMemo']);
        }

        return $model;
    }
}
