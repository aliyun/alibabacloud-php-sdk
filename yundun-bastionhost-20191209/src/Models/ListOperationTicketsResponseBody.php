<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsResponseBody\operationTickets;

class ListOperationTicketsResponseBody extends Model
{
    /**
     * @var operationTickets[]
     */
    public $operationTickets;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'operationTickets' => 'OperationTickets',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->operationTickets)) {
            Model::validateArray($this->operationTickets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationTickets) {
            if (\is_array($this->operationTickets)) {
                $res['OperationTickets'] = [];
                $n1 = 0;
                foreach ($this->operationTickets as $item1) {
                    $res['OperationTickets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['OperationTickets'])) {
            if (!empty($map['OperationTickets'])) {
                $model->operationTickets = [];
                $n1 = 0;
                foreach ($map['OperationTickets'] as $item1) {
                    $model->operationTickets[$n1] = operationTickets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
