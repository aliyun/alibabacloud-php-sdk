<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsResponseBody\operationTickets;
use AlibabaCloud\Tea\Model;

class ListOperationTicketsResponseBody extends Model
{
    /**
     * @var operationTickets[]
     */
    public $operationTickets;

    /**
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'operationTickets' => 'OperationTickets',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationTickets) {
            $res['OperationTickets'] = [];
            if (null !== $this->operationTickets && \is_array($this->operationTickets)) {
                $n = 0;
                foreach ($this->operationTickets as $item) {
                    $res['OperationTickets'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListOperationTicketsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationTickets'])) {
            if (!empty($map['OperationTickets'])) {
                $model->operationTickets = [];
                $n                       = 0;
                foreach ($map['OperationTickets'] as $item) {
                    $model->operationTickets[$n++] = null !== $item ? operationTickets::fromMap($item) : $item;
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
