<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateTargetListByBatchRequest\operationList;
use AlibabaCloud\Tea\Model;

class UpdateTargetListByBatchRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 52370
     *
     * @var int
     */
    public $batchId;

    /**
     * @description This parameter is required.
     *
     * @var operationList[]
     */
    public $operationList;
    protected $_name = [
        'batchId'       => 'BatchId',
        'operationList' => 'OperationList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->operationList) {
            $res['OperationList'] = [];
            if (null !== $this->operationList && \is_array($this->operationList)) {
                $n = 0;
                foreach ($this->operationList as $item) {
                    $res['OperationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTargetListByBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['OperationList'])) {
            if (!empty($map['OperationList'])) {
                $model->operationList = [];
                $n                    = 0;
                foreach ($map['OperationList'] as $item) {
                    $model->operationList[$n++] = null !== $item ? operationList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
