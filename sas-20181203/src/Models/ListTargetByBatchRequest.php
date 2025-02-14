<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListTargetByBatchRequest extends Model
{
    /**
     * @var int
     */
    public $batchId;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $operationBase;
    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'batchId'       => 'BatchId',
        'currentPage'   => 'CurrentPage',
        'operationBase' => 'OperationBase',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->operationBase) {
            $res['OperationBase'] = $this->operationBase;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['OperationBase'])) {
            $model->operationBase = $map['OperationBase'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
