<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody\records\operator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody\records\ticketMemo;

class records extends Model
{
    /**
     * @var string
     */
    public $openTicketId;
    /**
     * @var string
     */
    public $operateData;
    /**
     * @var string
     */
    public $operateTime;
    /**
     * @var string
     */
    public $operation;
    /**
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
        'openTicketId'         => 'OpenTicketId',
        'operateData'          => 'OperateData',
        'operateTime'          => 'OperateTime',
        'operation'            => 'Operation',
        'operationDisplayName' => 'OperationDisplayName',
        'operator'             => 'Operator',
        'ticketMemo'           => 'TicketMemo',
    ];

    public function validate()
    {
        if (null !== $this->operator) {
            $this->operator->validate();
        }
        if (null !== $this->ticketMemo) {
            $this->ticketMemo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Operator'] = null !== $this->operator ? $this->operator->toArray($noStream) : $this->operator;
        }

        if (null !== $this->ticketMemo) {
            $res['TicketMemo'] = null !== $this->ticketMemo ? $this->ticketMemo->toArray($noStream) : $this->ticketMemo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
