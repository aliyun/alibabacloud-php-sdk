<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateTargetListByBatchRequest\operationList;

class UpdateTargetListByBatchRequest extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var operationList[]
     */
    public $operationList;
    protected $_name = [
        'batchId' => 'BatchId',
        'operationList' => 'OperationList',
    ];

    public function validate()
    {
        if (\is_array($this->operationList)) {
            Model::validateArray($this->operationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->operationList) {
            if (\is_array($this->operationList)) {
                $res['OperationList'] = [];
                $n1 = 0;
                foreach ($this->operationList as $item1) {
                    $res['OperationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['OperationList'])) {
            if (!empty($map['OperationList'])) {
                $model->operationList = [];
                $n1 = 0;
                foreach ($map['OperationList'] as $item1) {
                    $model->operationList[$n1] = operationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
